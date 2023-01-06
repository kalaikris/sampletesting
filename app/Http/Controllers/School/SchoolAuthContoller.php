<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\School\StoreSchoolRequest;
use App\Http\Requests\School\LoginSchoolRequest;
use App\Http\Requests\School\ForgotOtpRequest;
use App\Http\Requests\School\VerifyOtpRequest;
use App\Http\Requests\School\ResetPasswordRequest;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\SchoolUser; 
use App\Traits\HttpResponses;

use App\Mail\ForgotMail;
use Illuminate\Support\Facades\Mail;
class SchoolAuthContoller extends Controller
{
    use HttpResponses;
    public function login(LoginSchoolRequest $request){
        $request->validated($request->all());
        $credentials = $request->only('school_id', 'password');
        if( !Auth::guard('schoolLogin')->attempt($credentials) ){
            return $this->error('','Credentials do not match', 401);
        }
        $school = SchoolUser::where('school_id', $request->school_id)->first();
        return  $this->success([
            'name' => $school->name,
            'message' => "Welcome",
            'token' => $school->createToken('school token of '. $school->name)->plainTextToken
        ]);
    }
    public function detail(){
        $school = Auth::guard('school')->user();
        $response['school']  = $school;
        return response()->json($response,200);
    }
    public function logout(){
        Auth::guard('school')->user()->currentAccessToken()->delete();
        return $this->success([
            'message' => 'You are successfully logged out'
        ]);
    }
    public function sendOtp(ForgotOtpRequest $request){
        $schoolUser = SchoolUser::where('school_id', $request->school_id)->first();
        $otp = mt_rand(100000, 999999);
        SchoolUser::where('school_id', $request->school_id)->update([
            'otp' => $otp
        ]);
        $mailData = [
            "header" => "School dashboard forgot otp",
            "name" => $schoolUser->name,
            "otp" => $otp
        ];
        Mail::to($schoolUser->email_id)->send(new ForgotMail($mailData));
        return $this->success(
            [],
            "Email sent successfully to the registered email id",
            201
        );
    }
    public function verifyOtp(VerifyOtpRequest $request){
        $schoolUser = SchoolUser::where('school_id', $request->school_id)
                        ->where('otp', $request->otp)
                        ->first();
        if($schoolUser!=null){
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
        $schoolUser = SchoolUser::where('school_id', $request->school_id)
                        ->where('otp', $request->otp)
                        ->first();
        if($schoolUser!=null){
            SchoolUser::where('school_id', $request->school_id)->update([
                'otp' => '0',
                'password' => Hash::make($request->password)
            ]);
            return $this->success([
                'name' => $schoolUser->name,
                'message' => "Password reseted successfully",
                'token' => $schoolUser->createToken('school token of '. $schoolUser->name)->plainTextToken
            ]);
        }else{
            return $this->error('','Otp do not match', 401);
        }
    }
}
