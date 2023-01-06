<?php

namespace App\Http\Controllers\TeacherApp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\TeacherApp\LoginTeacherRequest;
use App\Http\Requests\Teacher\ForgotOtpRequest;
use App\Http\Requests\Teacher\VerifyOtpRequest;
use App\Http\Requests\Teacher\ResetPasswordRequest;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Teacher; 
use App\Traits\HttpResponses;

use App\Mail\ForgotMail;
use Illuminate\Support\Facades\Mail;
class TeacherAppController extends Controller
{
    use HttpResponses;
    public function login(LoginTeacherRequest $request){
        $request->validated($request->all());
        $request->password = Hash::make($request->password);
        $credentials = $request->only('teacher_id', 'password');
        if( !Auth::guard('teacherLogin')->attempt($credentials) ){
            return $this->error('','Credentials do not match', 400);
        }
        $teacher = Teacher::where('teacher_id', $request->teacher_id)->first();
        return  $this->success([
            'name' => $teacher->name,
            'message' => "Welcome",
            'token' => $teacher->createToken('Teacher token of '. $teacher->name)->plainTextToken
        ]); 
    }
    public function detail(){
        $teacher = Auth::guard('teacher')->user();
        $response['teacher']  = $teacher;
        return response()->json($response,200);
    }
    public function logout(){
        Auth::guard('teacher')->user()->currentAccessToken()->delete();
        return $this->success([
            'message' => 'You are successfully logged out'
        ]);
    }
    public function logoutAll(){
        Auth::guard('teacher')->user()->tokens->each(function($token, $key) {
            $token->delete();
        });
        return $this->success([
            'message' => 'You are successfully logged out from all devices'
        ]);
    }
    public function sendOtp(ForgotOtpRequest $request){
        $teacher = Teacher::where('teacher_id', $request->teacher_id)->first();
        $otp = mt_rand(100000, 999999);
        Teacher::where('teacher_id', $request->teacher_id)->update([
            'otp' => $otp
        ]);
        $mailData = [
            "header" => "Teacher App forgot otp",
            "name" => $teacher->name,
            "otp" => $otp
        ];
        Mail::to($teacher->email_id)->send(new ForgotMail($mailData));
        return $this->success(
            [],
            "Email sent successfully to the registered email id",
            201
        );
    }
    public function verifyOtp(VerifyOtpRequest $request){
        $teacher = Teacher::where('teacher_id', $request->teacher_id)
                        ->where('otp', $request->otp)
                        ->first();
        if($teacher!=null){
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
        $teacher = Teacher::where('teacher_id', $request->teacher_id)
                        ->where('otp', $request->otp)
                        ->first();
        if($teacher!=null){
            Teacher::where('teacher_id', $request->teacher_id)->update([
                'otp' => '0',
                'password' => Hash::make($request->password)
            ]);
            return $this->success([
                'name' => $teacher->name,
                'message' => "Password reseted successfully",
                'token' => $teacher->createToken('Teacher token of '. $teacher->name)->plainTextToken
            ]);
        }else{
            return $this->error('','Otp do not match', 401);
        }
    }
}
