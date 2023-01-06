<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class__config', function (Blueprint $table) {
            $table->id();
            $table->char('token',20)->unique()->collation('utf8_general_ci');
            $table->char('standard_token',20)
                ->collation('utf8_general_ci')
                ->comment('`standards`.`token`');
            $table->char('class_config_group_token',20)
                ->collation('utf8_general_ci')
                ->comment('`class__config_group`.`token`');
            $table->tinyInteger('status');
            $table->foreign('standard_token')
                ->references('token')
                ->on('standards');
            $table->foreign('class_config_group_token')
                ->references('token')
                ->on('class__config_group');
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
        Schema::dropIfExists('class__config');
    }
};
