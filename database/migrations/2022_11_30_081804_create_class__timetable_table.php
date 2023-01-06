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
        Schema::create('class__timetable', function (Blueprint $table) {
            $table->id();
            $table->char('token',20)->unique()->collation('utf8_general_ci');
            $table->char('class_token',20)
                ->collation('utf8_general_ci')
                ->comment('`classes`.`token`');
            $table->char('day_token',20)
                ->collation('utf8_general_ci')
                ->comment('`days`.`token`');
            $table->char('class_period_config_token',20)
                ->collation('utf8_general_ci')
                ->comment('`class__period_config`.`token`');
            $table->char('class_subject_teacher_token',20)
                ->collation('utf8_general_ci')
                ->comment('`class__subject_teacher`.`token`');
            $table->tinyInteger('status');
            $table->foreign('class_token')
                ->references('token')
                ->on('classes');
            $table->foreign('day_token')
                ->references('token')
                ->on('days');
            $table->foreign('class_period_config_token')
                ->references('token')
                ->on('class__period_config');
            $table->foreign('class_subject_teacher_token')
                ->references('token')
                ->on('class__subject_teacher');
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
        Schema::dropIfExists('class__timetable');
    }
};
