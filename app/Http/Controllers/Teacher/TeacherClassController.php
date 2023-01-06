<?php

namespace App\Http\Controllers\Teacher;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Teacher\TeacherClassResource;
use App\Http\Resources\Teacher\StudentDetailResource;
use App\Http\Resources\Teacher\ClassTeacherResource;
use Illuminate\Support\Facades\Auth;
use App\Models\ClassSubjectTeacher; 
use App\Models\ClassStudent; 
use App\Traits\HttpResponses;

class TeacherClassController extends Controller
{
    use HttpResponses;
    function teacherClasses(){
        $teacherToken = Auth::guard('teacher')->user()->token;
        $classes = TeacherClassResource::collection(
            ClassSubjectTeacher::where("teacher_token", $teacherToken)->get()
        );
        return $this->success(
            $classes,
            "",
            200
        );
    }
    function classDetails($classToken){
        $studentData = StudentDetailResource::collection(
            ClassStudent::where("class_token", $classToken)->get()
        );
        $teacherData = ClassTeacherResource::collection(
            ClassSubjectTeacher::where("class_token", $classToken)->get()
        );
        $classDetails['teacher_count']   = count($teacherData);
        $classDetails['teacher_details'] = $teacherData;
        $classDetails['student_count']   = count($studentData);
        $classDetails['student_details'] = $studentData;
        return $this->success(
            $classDetails,
            "",
            200
        );
    }
}
