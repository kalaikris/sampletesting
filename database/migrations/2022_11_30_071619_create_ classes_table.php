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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->char('token',20)->unique()->collation('utf8_general_ci');
            $table->string('class_id', 45);
            $table->char('section_token',20)
                ->collation('utf8_general_ci')
                ->comment('`sections`.`token`');
            $table->char('academic_year_token',20)
                ->collation('utf8_general_ci')
                ->comment('`academic_years`.`token`');
            $table->mediumInteger('capacity')->nullable();
            $table->mediumInteger('total_subject')->nullable();
            $table->mediumInteger('total_student')->nullable();
            $table->mediumInteger('total_teacher')->nullable();
            $table->tinyInteger('status');
            $table->foreign('section_token')
                ->references('token')
                ->on('sections');
            $table->foreign('academic_year_token')
                ->references('token')
                ->on('academic_years');
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
        Schema::dropIfExists('classes');
    }
};
