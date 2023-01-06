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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->char('token',20)->unique()->collation('utf8_general_ci');
            $table->char('school_token',20)
                ->collation('utf8_general_ci')
                ->comment('`school`.`token`');
            $table->string('teacher_id', 45);
            $table->string('password');
            $table->integer('otp')->nullable();
            $table->string('name');
            $table->string('image')->nullable();
            $table->enum('gender', ['Male', 'Female', 'Others'])
                ->comment("'Male','Female','Others'");
            $table->string('mobile_number',25);
            $table->date('date_of_birth');
            $table->string('emergency_number',25)->nullable();
            $table->string('email_id');
            $table->text('address');
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('nationality')->nullable();
            $table->enum('category', ['SC', 'BC', 'MBC', 'OC'])
                ->comment("	'SC','BC','MBC','OC'");
            $table->text('language_written')->nullable();
            $table->text('language_spoken')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->text('address_proof')->nullable();
            $table->text('birth_certificate')->nullable();
            $table->text('passport_photo')->nullable();
            $table->text('aadhar_card')->nullable();
            $table->text('domicile_certificate')->nullable();
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
        Schema::dropIfExists('teachers');
    }
};
