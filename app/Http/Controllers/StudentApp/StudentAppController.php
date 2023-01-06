<?php

namespace App\Http\Controllers\StudentApp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\StudentApp\LoginStudentRequest;
use App\Http\Requests\StudentApp\ForgotOtpRequest;
use App\Http\Requests\StudentApp\VerifyOtpRequest;
use App\Http\Requests\StudentApp\ResetPasswordRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Student; 
use App\Traits\HttpResponses;
use App\Mail\ForgotMail;
use Illuminate\Support\Facades\Mail;

class StudentAppController extends Controller
{
    use HttpResponses;
    public function login(LoginStudentRequest $request){
      $request->validated($request->all());
      $credentials = $request->only('student_id', 'password');
      if( !Auth::guard('studentLogin')->attempt($credentials) ){
          return $this->error('','Credentials do not match', 400);
      }
      $student = Student::where('student_id', $request->student_id)->first();
      return  $this->success([
          'name' => $student->name,
          'message' => "Welcome",
          'token' => $student->createToken('Student token of '. $student->name)->plainTextToken
      ]); 
    }

    public function detail(){
        $student = Auth::guard('student')->user();
        $response['student']  = $student;
        return response()->json($response,200);
    }

    public function logout(){
        Auth::guard('student')->user()->currentAccessToken()->delete();
        return $this->success([
            'message' => 'You are successfully logged out'
        ]);
    }

    public function sendOtp(ForgotOtpRequest $request){
        $student = Student::where('student_id', $request->student_id)->first();
        $otp = mt_rand(100000, 999999);
        Student::where('student_id', $request->student_id)->update([
            'otp' => $otp
        ]);
        $mailData = [
            "header" => "Student App forgot otp",
            "name" => $student->name,
            "otp" => $otp
        ];
        Mail::to($student->father_email_id)->send(new ForgotMail($mailData));
        return $this->success(
            [],
            "Email sent successfully to the registered email id",
            200
        );
    }
    public function verifyOtp(VerifyOtpRequest $request){
        $student = Student::where('student_id', $request->student_id)
                        ->where('otp', $request->otp)
                        ->first();
        if($student!=null){
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
        $student = Student::where('student_id', $request->student_id)
                        ->where('otp', $request->otp)
                        ->first();
        if($student!=null){
            Student::where('student_id', $request->student_id)->update([
                'otp' => '0',
                'password' => Hash::make($request->password)
            ]);
            return $this->success([
                'name' => $student->name,
                'message' => "Password reseted successfully",
                'token' => $student->createToken('Student token of '. $student->name)->plainTextToken
            ]);
        }else{
            return $this->error('','Otp do not match', 401);
        }
    }
}
