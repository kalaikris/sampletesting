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
        Schema::create('school__users', function (Blueprint $table) {
            $table->id();
            $table->char('token',20)->unique()->collation('utf8_general_ci');
            $table->char('school_token',20)
                ->collation('utf8_general_ci')
                ->comment('`schools`.`token`');
            $table->string('school_id', 45);
            $table->string('name');
            $table->string('email_id');
            $table->text('password');
            $table->integer('otp')->nullable();
            $table->string('mobile_number',25);
            $table->char('user_role_token',20)
                ->collation('utf8_general_ci')
                ->comment('`school__user_roles`.`token`');
            $table->tinyInteger('status');

            $table->foreign('school_token')
                ->references('token')
                ->on('schools');
            $table->foreign('user_role_token')
                ->references('token')
                ->on('school__user_roles');
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
        Schema::dropIfExists('school__users');
    }
};
