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
        Schema::create('class__student', function (Blueprint $table) {
            $table->id();
            $table->char('token',20)->unique()->collation('utf8_general_ci');
            $table->char('class_token',20)
                ->collation('utf8_general_ci')
                ->comment('`classes`.`token`');
            $table->char('student_token',20)
                ->collation('utf8_general_ci')
                ->comment('`students`.`token`');
            $table->tinyInteger('status');
            $table->string('reason');
            $table->foreign('class_token')
                ->references('token')
                ->on('classes');
            $table->foreign('student_token')
                ->references('token')
                ->on('students');
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
        Schema::dropIfExists('class__student');
    }
};
