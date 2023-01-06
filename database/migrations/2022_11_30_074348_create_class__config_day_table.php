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
        Schema::create('class__config_day', function (Blueprint $table) {
            $table->id();
            $table->char('token',20)->unique()->collation('utf8_general_ci');
            $table->char('class_config_group_token',20)
                ->collation('utf8_general_ci')
                ->comment('`class_config_group`.`token`');
            $table->char('day_token',20)
                ->collation('utf8_general_ci')
                ->comment('`days`.`token`');
            $table->foreign('class_config_group_token')
                ->references('token')
                ->on('class__config_group');
            $table->foreign('day_token')
                ->references('token')
                ->on('days');
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
        Schema::dropIfExists('class__configs_day');
    }
};
