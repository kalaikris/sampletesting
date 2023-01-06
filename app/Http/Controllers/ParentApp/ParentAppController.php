<?php

namespace App\Http\Controllers\ParentApp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\ParentApp\LoginParentRequest;
use App\Http\Requests\ParentApp\ForgotOtpRequest;
use App\Http\Requests\ParentApp\VerifyOtpRequest;
use App\Http\Requests\ParentApp\ResetPasswordRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\ParentModel; 
use App\Traits\HttpResponses;
use App\Mail\ForgotMail;
use Illuminate\Support\Facades\Mail;

class ParentAppController extends Controller
{
    use HttpResponses;
    public function login(LoginParentRequest $request){
      $request->validated($request->all());
      $request->password = Hash::make($request->password);
      $credentials = $request->only('parent_id', 'password');
      if( !Auth::guard('parentLogin')->attempt($credentials) ){
          return $this->error('','Credentials do not match', 400);
      }
      $ParentModel = ParentModel::where('parent_id', $request->parent_id)->first();
      return  $this->success([
          'name' => $ParentModel->father_name,
          'message' => "Welcome",
          'token' => $ParentModel->createToken('Parent token of '. $ParentModel->father_name)->plainTextToken
      ]); 
    }

    public function detail(){
        $ParentModel = Auth::guard('parent')->user();
        $response['ParentModel']  = $ParentModel;
        return response()->json($response,200);
    }

    public function logout(){
        Auth::guard('parent')->user()->currentAccessToken()->delete();
        return $this->success([
            'message' => 'You are successfully logged out'
        ]);
    }

    public function sendOtp(ForgotOtpRequest $request){
        $ParentModel = ParentModel::where('parent_id', $request->parent_id)->first();
        $otp = mt_rand(100000, 999999);
        ParentModel::where('parent_id', $request->parent_id)->update([
            'otp' => $otp
        ]);
        $mailData = [
            "header" => "Parent App forgot otp",
            "name" => $ParentModel->father_name,
            "otp" => $otp
        ];
        Mail::to($ParentModel->father_email_id)->send(new ForgotMail($mailData));
        return $this->success(
            [],
            "Email sent successfully to the registered email id",
            200
        );
    }
    public function verifyOtp(VerifyOtpRequest $request){
        $ParentModel = ParentModel::where('parent_id', $request->parent_id)
                        ->where('otp', $request->otp)
                        ->first();
        if($ParentModel!=null){
            return $this->success(
                [],
                "Otp verified",
                200
            );
        }else{
            return $this->error('','Otp do not match', 401);
        }
    }
    public function resetPassword(ResetPasswordRequest $request){
        $ParentModel = ParentModel::where('parent_id', $request->parent_id)
                        ->where('otp', $request->otp)
                        ->first();
        if($ParentModel!=null){
            ParentModel::where('parent_id', $request->parent_id)->update([
                'otp' => '0',
                'password' => Hash::make($request->password)
            ]);
            return $this->success([
                'name' => $ParentModel->father_name,
                'message' => "Password reseted successfully",
                'token' => $ParentModel->createToken('Parent token of '. $ParentModel->father_name)->plainTextToken
            ]);
        }else{
            return $this->error('','Otp do not match', 401);
        }
    }
}
