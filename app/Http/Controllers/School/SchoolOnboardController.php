<?php
namespace App\Http\Controllers\School;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\School\OnboardSchoolRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\School; 
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\TeacherSubject;
use App\Models\SchoolClass;
use App\Models\AcademicYear;
use App\Models\Standard;
use App\Models\Section;
use App\Models\ClassSubjectTeacher;
use App\Models\Student;
use App\Models\ClassStudent;

use App\Models\ParentModel;
use App\Models\StudentParent;

use Illuminate\Support\Facades\DB;
use App\Traits\HttpResponses;

class SchoolOnboardController extends Controller
{
    use HttpResponses;
    function onboard(OnboardSchoolRequest $request){
        $this->uploadSubjectCsv($request->subject_csv);
        $this->uploadTeacherCsv($request->teacher_csv);
        $this->uploadClassCsv($request->class_csv);
        $this->uploadStudentCsv($request->student_csv);
        $school_token = Auth::guard('school')->user()->school_token;
        //return School::where('token', $school_token)->with('academicYears')->get();
        $classCount = DB::table('classes')
            ->SELECT('classes.id')
            ->JOIN('academic_years', 'academic_years.token', '=', 'classes.academic_year_token')
            ->WHERE('academic_years.school_token', $school_token)
            ->count();
        $studentCount = DB::table('class__student')
            ->SELECT('class__student.id')
            ->JOIN('classes', 'classes.token', '=', 'class__student.class_token')
            ->JOIN('academic_years', 'academic_years.token', '=', 'classes.academic_year_token')
            ->WHERE('academic_years.school_token', $school_token)
            ->count();
        $teacher = Teacher::where('school_token', $school_token)->get();
        $teacherCount = $teacher->count();
        School::where('token', $school_token)->update([
            'name' => $request->school_name,
            'affiliation_number' => $request->affiliation_number,
            'syllabus' => $request->syllabus,
            'medium_type' => $request->medium_type,
            'contact_name' => $request->contact_name,
            'contact_number' => $request->contact_number,
            'website' => $request->website,
            'address_line_1' => $request->address_line_1,
            'address_line_2' => $request->address_line_2,
            'country_id' => $request->country_id,
            'state_id' => $request->state_id,
            'city_id' => $request->city_id,
            'total_teachers' => $teacherCount,
            'total_classes' => $classCount,
            'total_students' => $studentCount
        ]);
        return $this->success(
            [],
            "School onboarded successfully",
            201
        );
    }
    #split subject csv file then quing it in pending files folder
    function uploadSubjectCsv($csv){
        $school_token = Auth::guard('school')->user()->school_token;
        $file = file($csv->getRealPath());
        $data = array_slice($file, 1); 
        $parts= (array_chunk($data, 1000));
        foreach($parts as $index=>$part){
            $fileName = resource_path('pending-files/'.$school_token.'_subject_'.date("Y-m-d-H-i-s").$index.'.csv');
            file_put_contents($fileName, $part);
        }
        return $this->importSubjectToDb();
    }
    #uploading queued subject files from pending files folder
    public function importSubjectToDb(){
        $school_token = Auth::guard('school')->user()->school_token;
        $path = resource_path('pending-files/'.$school_token.'_subject_*.csv');
        $g = glob($path);
        foreach(array_slice($g, 0, 20) as $file){
            $data = array_map('str_getcsv', file($file)); 
            foreach($data as $row){
                $subject = Subject::where([
                    ['school_token', '=', $school_token],
                    ['subject_id', '=', $row[1]]
                ])->first();
                if ($subject === null) {
                    do {
                        $token = (new Controller)->randomnumberGenerate();
                    } while (Subject::where("token", "=", $token)->first() instanceof Subject);
                    Subject::Create([
                        'token' => $token,
                        'school_token' => $school_token,
                        'subject_id' => $row[1],
                        'name' => $row[2],
                        'status'=> 1
                    ]);
                }
            }
            unlink($file);
        }
    }
    #split teacher csv file then quing it in pending files folder
    function uploadTeacherCsv($csv){
        $school_token = Auth::guard('school')->user()->school_token;
        $file = file($csv->getRealPath());
        $data = array_slice($file, 1); 
        $parts= (array_chunk($data, 1000));
        foreach($parts as $index=>$part){
            $fileName = resource_path('pending-files/'.$school_token.'_teacher_'.date("Y-m-d-H-i-s").$index.'.csv');
            file_put_contents($fileName, $part);
        }
        return $this->importTeacherToDb();
    }
    #uploading queued teacher files from pending files folder
    public function importTeacherToDb(){
        $school_token = Auth::guard('school')->user()->school_token;
        $path = resource_path('pending-files/'.$school_token.'_teacher_*.csv');
        $g = glob($path);
        foreach(array_slice($g, 0, 15) as $file){
            $data = array_map('str_getcsv', file($file)); 
            foreach($data as $row){
                $teacher = Teacher::where([
                    ['school_token', '=', $school_token],
                    ['teacher_id', '=', $row[1]]
                ])->first();
                if ($teacher === null) {
                    do {
                        $token = (new Controller)->randomnumberGenerate();
                    } while (Teacher::where("token", "=", $token)->first() instanceof Teacher);
                    $dateOfBirth = \Carbon\Carbon::createFromFormat('d-m-y', $row[8])
                                ->format('Y-m-d');
                    Teacher::Create([
                        'token' => $token,
                        'school_token' => $school_token,
                        'teacher_id' => $row[1],
                        'password' => Hash::make($row[1]),
                        'name' => $row[2],
                        'email_id' => $row[3],
                        'mobile_number' => $row[5],
                        'address' => $row[6],
                        'gender' => $row[7],
                        'date_of_birth' => $dateOfBirth,
                        'nationality' => $row[10],
                        'status' => 1,
                    ]);
                    $subjectIdArray = preg_split ("/\,/", $row[14]); 
                    $subjectTokens = Subject::where('school_token', $school_token)
                                        ->whereIn('subject_id', $subjectIdArray)
                                        ->pluck('token')->toArray();
                    foreach($subjectTokens as $subjectToken){
                        $teacherSubject = TeacherSubject::where([
                            ['teacher_token', '=', $token],
                            ['subject_token', '=', $subjectToken]
                        ])->first();
                        if ($teacherSubject === null) {
                            TeacherSubject::Create([
                                'teacher_token' => $token,
                                'subject_token' => $subjectToken,
                                'status' => 1
                            ]);
                        }
                    }
                }
            }
            unlink($file);
        }
    }
    #split classes csv file then quing it in pending files folder
    function uploadClassCsv($csv){
        $school_token = Auth::guard('school')->user()->school_token;
        $file = file($csv->getRealPath());
        $data = array_slice($file, 1); 
        $parts= (array_chunk($data, 1000));
        foreach($parts as $index=>$part){
            $fileName = resource_path('pending-files/'.$school_token.'_class_'.date("Y-m-d-H-i-s").$index.'.csv');
            file_put_contents($fileName, $part);
        }
        return $this->importClassToDb();
    }
    #uploading queued classes files from pending files folder
    public function importClassToDb(){
        $school_token = Auth::guard('school')->user()->school_token;
        $path = resource_path('pending-files/'.$school_token.'_class_*.csv');
        $g = glob($path);
        foreach(array_slice($g, 0, 20) as $file){
            $data = array_map('str_getcsv', file($file)); 
            foreach($data as $row){
                $subjectIdArray = preg_split ("/\,/", $row[8]);
                $teacherIdArray = preg_split ("/\,/", $row[10]);
                $classId = SchoolClass::where([
                    ['class_id', '=', $row[1]]
                ])->first();
                if ($classId === null) {
                    $year = explode("-",$row[11]);;
                    $academicYear = AcademicYear::where([
                        ['school_token', '=', $school_token],
                        ['start_year', '=', $year[0]],
                        ['end_year', '=', $year[1]]
                    ])->first();
                    if ($academicYear === null) {
                        do {
                            $academiceYearToken = (new Controller)->randomnumberGenerate();
                        } while (AcademicYear::where("token", "=", $academiceYearToken)->first() instanceof AcademicYear);
                        AcademicYear::Create([
                            'token' => $academiceYearToken,
                            'school_token' => $school_token,
                            'start_year' => $year[0],
                            'end_year' => $year[1],
                            'status'=> 1
                        ]);
                    }else{
                        $academiceYearToken = $academicYear->token; 
                    }
                    $standard = Standard::where([
                        ['school_token', '=', $school_token],
                        ['name', '=', $row[2]]
                    ])->first();
                    if ($standard === null) {
                        do {
                            $standardToken = (new Controller)->randomnumberGenerate();
                        } while (Standard::where("token", "=", $standardToken)->first() instanceof Standard);
                        Standard::Create([
                            'token' => $standardToken,
                            'school_token' => $school_token,
                            'standard_id' => "",
                            'name' => $row[2],
                            'status'=> 1
                        ]);
                    }else{
                        $standardToken = $standard->token; 
                    }
                    $section = Section::where([
                        ['standard_token', '=', $standardToken],
                        ['name', '=', $row[3]]
                    ])->first();
                    if ($section === null) {
                        do {
                            $sectionToken = (new Controller)->randomnumberGenerate();
                        } while (Section::where("token", "=", $sectionToken)->first() instanceof Section);
                        Section::Create([
                            'token' => $sectionToken,
                            'standard_token' => $standardToken,
                            'name' => $row[3],
                            'status'=> 1
                        ]);
                    }else{
                        $sectionToken = $section->token; 
                    }
                    do {
                        $classToken = (new Controller)->randomnumberGenerate();
                    } while (SchoolClass::where("token", "=", $classToken)->first() instanceof SchoolClass);
                    SchoolClass::Create([
                        'token' => $classToken,
                        'class_id' => $row[1],
                        'section_token' => $sectionToken,
                        'academic_year_token' => $academiceYearToken,
                        'total_subject' => count($subjectIdArray),
                        'total_teacher' => count($teacherIdArray),
                        'status'=> 1
                    ]);
                }else{
                    $classToken = $classId->token; 
                }
                $subjectTeacher= Teacher::where([
                    ['school_token', '=', $school_token],
                    ['teacher_id', '=', $row[6]]
                ])->first();
                if ($subjectTeacher != null) {
                    $subjectTeacherToken = $subjectTeacher->token;
                }else{
                    $subjectTeacherToken = "";
                }
                

                foreach($subjectIdArray as $index=>$subjectId){
                    $subject= Subject::where([
                        ['school_token', '=', $school_token],
                        ['subject_id', '=', $subjectId]
                    ])->first();
                    if ($subject != null) {
                        $subjectToken = $subject->token;
                        $teacher= Teacher::where([
                            ['school_token', '=', $school_token],
                            ['teacher_id', '=', $teacherIdArray[$index]]
                        ])->first();
                        if ($teacher != null) {
                            $teacherToken = $teacher->token;
                            if($teacherToken==$subjectTeacherToken){
                                $is_class_teacher = 1;
                            }else{
                                $is_class_teacher = 0;
                            }
                            $classSubjectTeacher = ClassSubjectTeacher::where([
                                ['class_token', '=', $classToken],
                                ['subject_token', '=', $subjectToken],
                                ['teacher_token', '=', $teacherToken]
                            ])->first();
                            if ($classSubjectTeacher === null) {
                                do {
                                    $classSubjectTeacherToken = (new Controller)->randomnumberGenerate();
                                } while (ClassSubjectTeacher::where("token", "=", $classToken)->first() instanceof ClassSubjectTeacher);
                                ClassSubjectTeacher::Create([
                                    'token' => $classSubjectTeacherToken,
                                    'class_token' => $classToken,
                                    'subject_token' => $subjectToken,
                                    'teacher_token' => $teacherToken,
                                    'is_class_teacher' => $is_class_teacher,
                                    'status'=> 1
                                ]);
                            }else{
                                $classSubjectTeacherToken = $classSubjectTeacher->token;
                            }
                        }
                    }
                }
            }
            unlink($file);
        }
    }
    #split student csv file then quing it in pending files folder
    function uploadStudentCsv($csv){
        $school_token = Auth::guard('school')->user()->school_token;
        $file = file($csv->getRealPath());
        $data = array_slice($file, 1); 
        $parts= (array_chunk($data, 1000));
        foreach($parts as $index=>$part){
            $fileName = resource_path('pending-files/'.$school_token.'_student_'.date("Y-m-d-H-i-s").$index.'.csv');
            file_put_contents($fileName, $part);
        }
        return $this->importStudentToDb();
    }
    #uploading queued student files from pending files folder
    public function importStudentToDb(){
        $school_token = Auth::guard('school')->user()->school_token;
        $path = resource_path('pending-files/'.$school_token.'_student_*.csv');
        $g    = glob($path);
        foreach(array_slice($g, 0, 20) as $file){
            $data = array_map('str_getcsv', file($file)); 
            foreach($data as $row){
                $student = Student::where([
                    ['school_token', '=', $school_token],
                    ['student_id', '=', $row[1]]
                ])->first();
                if ($student === null) {
                    do {
                        $studentToken = (new Controller)->randomnumberGenerate();
                    } while (Student::where("token", "=", $studentToken)->first() instanceof Student);
                    $class = SchoolClass::where([
                        ['class_id', '=', $row[20]]
                    ])->first();
                    if ($class != null) {
                        $classToken = $class->token;
                        $dateOfBirth = \Carbon\Carbon::createFromFormat('d-m-y', $row[8])
                                ->format('Y-m-d');
                        Student::Create([
                            'token' => $studentToken,
                            'school_token' => $school_token,
                            'student_id' => $row[1],
                            'password' => Hash::make($row[1]),
                            'name' => $row[2],
                            'gender' => $row[7],
                            'date_of_birth' => $dateOfBirth,
                            'blood_group' => $row[9],
                            'emergency_contact_number' => "",
                            'mobile_number' => $row[5],
                            'address' => $row[6],
                            'father_name' => $row[12],
                            'father_email_id' => $row[14],
                            'father_mobile_number' => $row[13],
                            'father_alter_number' => "",
                            'mother_name' => $row[15],
                            'mother_email_id' => $row[17],
                            'mother_mobile_number' => $row[16],
                            'mother_alter_number' => "",
                            'is_rte' => 1,
                            'status'=> 1
                        ]);

                        do {
                            $classStudentToken = (new Controller)->randomnumberGenerate();
                        } while (ClassStudent::where("token", "=", $classStudentToken)->first() instanceof ClassStudent);
                        ClassStudent::Create([
                            'token' => $classStudentToken,
                            'class_token' => $classToken,
                            'student_token' => $studentToken,
                            'reason' => "",
                            'status' => 1,
                        ]);

                        do {
                            $parentToken = (new Controller)->randomnumberGenerate();
                        } while (ParentModel::where("token", "=", $parentToken)->first() instanceof ParentModel);
                        ParentModel::Create([
                            'token' => $parentToken,
                            'parent_id' => "",
                            'password' => "",
                            'father_name' => $row[12],
                            'father_email_id' => $row[14],
                            'father_mobile_number' => $row[13],
                            'father_alter_number' => "",
                            'mother_name' => $row[15],
                            'mother_email_id' => $row[17],
                            'mother_mobile_number' => $row[16],
                            'mother_alter_number' => "",
                            'status' => 1,
                        ]);
                        do {
                            $studentParentToken = (new Controller)->randomnumberGenerate();
                        } while (StudentParent::where("token", "=", $studentParentToken)->first() instanceof StudentParent);
                        StudentParent::Create([
                            'token' => $studentParentToken,
                            'student_token' => $studentToken,
                            'parent_token' => $parentToken,
                            'status' => 1,
                        ]);
                    }
                }
            }
            unlink($file);
        }
    }
}
