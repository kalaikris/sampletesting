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
        Schema::create('student__parents', function (Blueprint $table) {
            $table->id();
            $table->char('token',20)->unique()->collation('utf8_general_ci');
            $table->char('student_token',20)
                ->collation('utf8_general_ci')
                ->comment('`students`.`token`');
            $table->char('parent_token',20)
                ->collation('utf8_general_ci')
                ->comment('`parents`.`token`');
            $table->tinyInteger('status');
            $table->foreign('student_token')
                ->references('token')
                ->on('students');
            $table->foreign('parent_token')
                ->references('token')
                ->on('parents');
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
        Schema::dropIfExists('student__parents');
    }
};
