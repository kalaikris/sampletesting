<?php

namespace App\Http\Controllers\SuperAdmin;
use App\Models\School;
use App\Models\SchoolUserRole;
use App\Models\SchoolUser;
use App\Models\SchoolModule;
use App\Models\SchoolUserRoleModule;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\SuperAdmin\SchoolResource;
use App\Http\Resources\SuperAdmin\OnboardedSchoolResource;
use App\Http\Resources\SuperAdmin\GetUserModuleResource;
use App\Http\Requests\SuperAdmin\StoreAdminSchoolRequest;
use App\Traits\HttpResponses;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Mail\ForgotMail;
use Illuminate\Support\Facades\Mail;
class SuperAdminSchoolController extends Controller
{
    use HttpResponses;
    public function invitedSchools()
    {
        return SchoolResource::collection(
            School::get()
        );
    }
    public function onboardedSchools()
    {
        return OnboardedSchoolResource::collection(
            School::where("country_id", "!=", NUll)->get()
        );
    }
    public function store(StoreAdminSchoolRequest $request)
    {
        $request->validated($request->all());
        #Generate increment school id
        $lastEntry =  School::latest()->first();
        if(empty($lastEntry)){
            $school_id = "HCSCHOOL0001";
        }else if($lastEntry->school_id=="HCSCHOOL9999"){
            $school_id = "HCSCHOOL".++$lastEntry->id;
        }else{
            $school_id = ++$lastEntry->school_id;
        }
        #Generate random unique token for school
        do {
            $token = (new Controller)->randomnumberGenerate();
        } while (School::where("token", "=", $token)->first() instanceof School);
        #Create  school
        $school = School::create([
            'token'=> $token,
            'school_id'=> $school_id,
            'name' => $request->name,
            'email_id' => $request->email_id,
            'status'=> 1
        ]);
        #Generate random unique token for school user role
        do {
            $role_token = (new Controller)->randomnumberGenerate();
        } while (SchoolUserRole::where("token", "=", $role_token)->first() instanceof SchoolUserRole);
        #Create  school user role
        $school_user_role = SchoolUserRole::create([
            'token'=> $role_token,
            'school_token'=> $token,
            'name' => "Super Admin",
            'status' => "1"
        ]);
        #Get All module token for school dashboard
        $user_modules = SchoolModule::get(['token']);
        #Preparing data for role modules
        foreach($user_modules as $module){
            #Generate random unique token for school user role module
            do {
                $user_role_module_token = (new Controller)->randomnumberGenerate();
            } while (SchoolUserRoleModule::where("token", "=", $user_role_module_token)->first() instanceof SchoolUserRoleModule);
            #create role module
            SchoolUserRoleModule::create([
                'token' => $user_role_module_token,
                'user_role_token' => $role_token,
                'module_token' => $module->token
            ]);
        }
        #Genierate random unique token for school user
        do {
            $user_token = (new Controller)->randomnumberGenerate();
        } while (SchoolUser::where("token", "=", $user_token)->first() instanceof SchoolUser);
        #Create  school user role
        $school_user = SchoolUser::create([
            'token'=> $user_token,
            'school_token'=> $token,
            'school_id'=> $school_id,
            'name' => $request->name,
            'email_id' => $request->email_id,
            'password' => Hash::make($school_id),
            'mobile_number' => "",
            'user_role_token' => $role_token,
            'status' => "1"
        ]);
        return $this->success(
            $school,
            "School created successfully",
            201
        );
    }
    function mail(){
        $mailData = [
            "header" => "Superadmin forgot otp",
            "name" => "Karthick raja",
            "otp" => "444555"
        ];
        Mail::to("karthickraja@macappstudio.com")->send(new ForgotMail($mailData));
        return $this->success(
            [],
            "Mail Send Successfully",
            201
        );
    }
}
