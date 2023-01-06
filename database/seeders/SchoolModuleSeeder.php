<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SchoolModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('school__modules')->delete();
        $modules = [
            [
                'token' => "6624259391",
                'name' => "My Dashboard",
                'created_at'=> gmdate("Y-m-d H:i:s"),
                'updated_at'=> gmdate("Y-m-d H:i:s")
            ],
            [
                'token' => "6624259392",
                'name' => "Class Management",
                'created_at'=> gmdate("Y-m-d H:i:s"),
                'updated_at'=> gmdate("Y-m-d H:i:s")
            ],
            [
                'token' => "6624259393",
                'name' => "Teacher Management",
                'created_at'=> gmdate("Y-m-d H:i:s"),
                'updated_at'=> gmdate("Y-m-d H:i:s")
            ],
            [
                'token' => "6624259394",
                'name' => "User Management",
                'created_at'=> gmdate("Y-m-d H:i:s"),
                'updated_at'=> gmdate("Y-m-d H:i:s")
            ],
            [
                'token' => "6624259395",
                'name' => "Exam Management",
                'created_at'=> gmdate("Y-m-d H:i:s"),
                'updated_at'=> gmdate("Y-m-d H:i:s")
            ],
            [
                'token' => "6624259396",
                'name' => "Communication Management",
                'created_at'=> gmdate("Y-m-d H:i:s"),
                'updated_at'=> gmdate("Y-m-d H:i:s")
            ],
            [
                'token' => "6624259397",
                'name' => "School Configuration",
                'created_at'=> gmdate("Y-m-d H:i:s"),
                'updated_at'=> gmdate("Y-m-d H:i:s")
            ],
            [
                'token' => "6624259398",
                'name' => "Student Management",
                'created_at'=> gmdate("Y-m-d H:i:s"),
                'updated_at'=> gmdate("Y-m-d H:i:s")
            ],
            [
                'token' => "6624259399",
                'name' => "Parent Management",
                'created_at'=> gmdate("Y-m-d H:i:s"),
                'updated_at'=> gmdate("Y-m-d H:i:s")
            ],
            [
                'token' => "6624259400",
                'name' => "Content Management",
                'created_at'=> gmdate("Y-m-d H:i:s"),
                'updated_at'=> gmdate("Y-m-d H:i:s")
            ],
            [
                'token' => "6624259401",
                'name' => "Fee Management",
                'created_at'=> gmdate("Y-m-d H:i:s"),
                'updated_at'=> gmdate("Y-m-d H:i:s")
            ],
            [
                'token' => "6624259403",
                'name' => "Legal Management",
                'created_at'=> gmdate("Y-m-d H:i:s"),
                'updated_at'=> gmdate("Y-m-d H:i:s")
            ]
        ];
        DB::table('school__modules')->insert(
            $modules
        );
    }
}
