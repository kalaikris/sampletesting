<?php

namespace App\Http\Controllers\TeacherApp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\TeacherApp\TeacherAppClassResource;
use App\Http\Resources\TeacherApp\StudentsResource;
use App\Http\Resources\TeacherApp\SingleStudentResource;

use Illuminate\Support\Facades\Auth;
use App\Models\ClassSubjectTeacher; 
use App\Models\ClassStudent; 
use App\Models\Student; 
use App\Traits\HttpResponses;


class TeacherAppClassController extends Controller
{
    use HttpResponses;
    function teacherClasses(){
        $teacherToken = Auth::guard('teacher')->user()->token;
        $classes = TeacherAppClassResource::collection(
            ClassSubjectTeacher::where("teacher_token", $teacherToken)->get()
        );
        return $this->success(
            $classes,
            "",
            200
        );
    }
    function classDetails($classToken){
        $studentData = StudentsResource::collection(
            ClassStudent::where("class_token", $classToken)->get()
        );
        return $this->success(
            $studentData,
            "",
            200
        );
    }
    function studentDetails($studentToken){
        $studentData = SingleStudentResource::collection(
            Student::where("token", $studentToken)->get()
        );
        return $this->success(
            $studentData,
            "",
            200
        );
    }
}
