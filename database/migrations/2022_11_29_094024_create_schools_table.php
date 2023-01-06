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
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->char('token',20)->unique()->collation('utf8_general_ci');
            $table->string('school_id', 45);
            //$table->string('password');
            $table->string('name')->nullable();
            $table->string('email_id');
            $table->string('logo')->nullable();
            $table->string('affiliation_number')->nullable();
            $table->enum('syllabus', ['CBSE', 'Stateboard', 'Matriculation'])
                ->comment("'CBSE','Stateboard','Matriculation'");
            $table->enum('medium_type', ['English', 'Tamil'])
                ->comment("'English','Tamil'");
            $table->string('contact_name',45)->nullable();
            $table->string('contact_number',25)->nullable();
            $table->string('website')->nullable();
            $table->text('address_line_1')->nullable();
            $table->text('address_line_2')->nullable();

            $table->integer('country_id')->nullable()->index();
            $table->integer('state_id')->nullable()->index();
            $table->integer('city_id')->nullable()->index();

            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();
            $table->integer('total_students')->nullable();
            $table->integer('total_classes')->nullable();
            $table->integer('total_teachers')->nullable();
            $table->tinyInteger('status');
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
        Schema::dropIfExists('schools');
    }
};
