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
        Schema::create('academic_years', function (Blueprint $table) {
            $table->id();
            $table->char('token',20)->unique()->collation('utf8_general_ci');
            $table->char('school_token',20)
                ->collation('utf8_general_ci')
                ->comment('`school`.`token`');
            $table->year('start_year');
            $table->year('end_year');
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
        Schema::dropIfExists('academic_years');
    }
};
