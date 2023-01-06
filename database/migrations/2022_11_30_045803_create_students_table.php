<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->char('token',20)->unique()->collation('utf8_general_ci');
            $table->char('school_token',20)
                ->collation('utf8_general_ci')
                ->comment('`school`.`token`');
            $table->string('student_id', 45);
            $table->string('password');
            $table->integer('otp')->nullable();
            $table->string('name');
            $table->enum('gender', ['Male', 'Female', 'Others'])
                ->comment("'Male','Female','Others'");
            $table->date('date_of_birth');
            $table->string('blood_group',45);
            $table->string('emergency_contact_number',45);
            $table->string('mobile_number',45);
            $table->text('address');
            $table->string('father_name');
            $table->string('father_email_id');
            $table->string('father_mobile_number',45);
            $table->string('father_alter_number',45);
            $table->string('mother_name');
            $table->string('mother_email_id');
            $table->string('mother_mobile_number',45);
            $table->string('mother_alter_number',45);
            $table->tinyInteger('is_rte');
            $table->tinyInteger('status');
            $table->foreign('school_token')
                ->references('token')
                ->on('schools');
            $table->softDeletes(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
