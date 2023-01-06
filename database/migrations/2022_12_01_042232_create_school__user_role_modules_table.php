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
        Schema::create('school__user_role_modules', function (Blueprint $table) {
            $table->id();
            $table->char('token',20)->unique()->collation('utf8_general_ci');
            $table->char('user_role_token',20)
                ->collation('utf8_general_ci')
                ->comment('`school__user_roles`.`token`');
            $table->char('module_token',20)
                ->collation('utf8_general_ci')
                ->comment('`school__modules`.`token`');
                
            $table->foreign('user_role_token')
                ->references('token')
                ->on('school__user_roles');
            $table->foreign('module_token')
                ->references('token')
                ->on('school__modules');
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
        Schema::dropIfExists('school__user_role_modules');
    }
};
