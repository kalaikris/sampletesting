<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\SuperAdmin\StoreSuperAdminRequest;
use App\Http\Requests\SuperAdmin\LoginSuperAdminRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\AdminUser; 
use App\Traits\HttpResponses;

use App\Http\Requests\SuperAdmin\ForgotOtpRequest;
use App\Http\Requests\SuperAdmin\VerifyOtpRequest;
use App\Http\Requests\SuperAdmin\ResetPasswordRequest;

use App\Mail\ForgotMail;
use Illuminate\Support\Facades\Mail;
class SuperAdminAuthContoller extends Controller
{
    use HttpResponses;
    public function register(StoreSuperAdminRequest $request){
        $lastEntry =  AdminUser::latest()->first();
        if(empty($lastEntry)){
            $user_id = "HCADMIN001";
        }else if($lastEntry->user_id=="HCADMIN999"){
            $user_id = "HCADMIN".++$lastEntry->id;
        }else{
            $user_id = ++$lastEntry->user_id;
        }
        $request->validated($request->all());
        do {
            $token = (new Controller)->randomnumberGenerate();
        } while (AdminUser::where("token", "=", $token)->first() instanceof AdminUser);


        
        $user = AdminUser::create([
            'token'=> $token,
            'user_id'=> $user_id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return $this->success([
            'name' => $user->name,
            'user_id' => $user->user_id,
            'message' => "Welcome",
            'token' => $user->createToken('super admin token of '. $user->name)->plainTextToken
        ]);
    }
    public function login(LoginSuperAdminRequest $request){
        $request->validated($request->all());
        $request->password = Hash::make($request->password);
        $credentials = $request->only('user_id', 'password');
        if( !Auth::guard('adminLogin')->attempt($credentials) ){
            return $this->error('','Credentials do not match', 401);
        }
        $user = AdminUser::where('user_id', $request->user_id)->first();
        return  $this->success([
            'name' => $user->name,
            'message' => "Welcome",
            'token' => $user->createToken('super admin token of '. $user->name)->plainTextToken
        ]); 
    }
    public function detail(){
        $user = Auth::guard('admin')->user();
        $response['user']  = $user;
        return response()->json($response,200);
    }
    public function logout(){
        Auth::guard('admin')->user()->currentAccessToken()->delete();
        return $this->success([
            'message' => 'You are successfully logged out'
        ]);
    }
    public function logoutAll(){
        Auth::guard('admin')->user()->tokens->each(function($token, $key) {
            $token->delete();
        });
        return $this->success([
            'message' => 'You are successfully logged out from all devices'
        ]);
    }
    public function sendOtp(ForgotOtpRequest $request){
        $user = AdminUser::where('user_id', $request->user_id)->first();
        $otp = mt_rand(100000, 999999);
        AdminUser::where('user_id', $request->user_id)->update([
            'otp' => $otp
        ]);
        $mailData = [
            "header" => "Super Admin forgot otp",
            "name" => $user->name,
            "otp" => $otp
        ];
        Mail::to($user->email)->send(new ForgotMail($mailData));
        return $this->success(
            [],
            "Email sent successfully to the registered email id",
            201
        );
    }
    public function verifyOtp(VerifyOtpRequest $request){
        $user = AdminUser::where('user_id', $request->user_id)
                        ->where('otp', $request->otp)
                        ->first();
        if($user!=null){
            return $this->success(
                [],
                "Otp verified",
                201
            );
        }else{
            return $this->error('','Otp do not match', 401);
        }
    }
    public function resetPassword(ResetPasswordRequest $request){
        $user = AdminUser::where('user_id', $request->user_id)
                        ->where('otp', $request->otp)
                        ->first();
        if($user!=null){
            AdminUser::where('user_id', $request->user_id)->update([
                'otp' => '0',
                'password' => Hash::make($request->password)
            ]);
            return $this->success([
                'name' => $user->name,
                'message' => "Password reseted successfully",
                'token' => $user->createToken('super admin token of '. $user->name)->plainTextToken
            ]);
        }else{
            return $this->error('','Otp do not match', 401);
        }
    }
}
