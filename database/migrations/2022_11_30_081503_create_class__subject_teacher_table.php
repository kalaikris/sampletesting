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
        Schema::create('class__subject_teacher', function (Blueprint $table) {
            $table->id();
            $table->char('token',20)->unique()->collation('utf8_general_ci');
            $table->char('class_token',20)
                ->collation('utf8_general_ci')
                ->comment('`classes`.`token`');
            $table->char('subject_token',20)
                ->collation('utf8_general_ci')
                ->comment('`subjects`.`token`');
            $table->char('teacher_token',20)
                ->collation('utf8_general_ci')
                ->comment('`teachers`.`token`');    
            $table->tinyInteger('is_class_teacher');
            $table->tinyInteger('status');
            $table->foreign('class_token')
                ->references('token')
                ->on('classes');
            $table->foreign('subject_token')
                ->references('token')
                ->on('subjects');
            $table->foreign('teacher_token')
                ->references('token')
                ->on('teachers');
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
        Schema::dropIfExists('class__subject_teacher');
    }
};
