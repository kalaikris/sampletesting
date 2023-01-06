<?php

namespace App\Http\Controllers\ParentApp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ParentApp\ParentAppStudentResource;
use App\Http\Resources\ParentApp\ParentAppProfileResource;
use App\Http\Resources\ParentApp\ParentAppTeacherResource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\ParentModel; 
use App\Traits\HttpResponses;

class ParentAppStudentController extends Controller
{

    use HttpResponses;
    
    function studentDetails($studentToken){
        $studentData = ParentAppProfileResource::collection(
            Student::where("token", $studentToken)->get()
        );
        return $this->success(
            $studentData,
            "",
            200
        );
    }

    function studentTeacher($studentToken){
        $studentData = ParentAppStudentResource::collection(
            StudentSubject::where("class_token", $studentToken)->get()
        );
        return $this->success(
            $studentData,
            "",
            200
        );
    }
    
}
