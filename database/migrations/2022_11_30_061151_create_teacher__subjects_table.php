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
        Schema::create('teacher__subjects', function (Blueprint $table) {
            $table->id();
            $table->char('teacher_token',20)
                ->collation('utf8_general_ci')
                ->comment('`teahcers`.`token`');
            $table->char('subject_token',20)
                ->collation('utf8_general_ci')
                ->comment('`subjects`.`token`');
            $table->tinyInteger('status');
            $table->foreign('teacher_token')
                ->references('token')
                ->on('teachers');
            $table->foreign('subject_token')
                ->references('token')
                ->on('subjects');
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
        Schema::dropIfExists('teacher__subjects');
    }
};
