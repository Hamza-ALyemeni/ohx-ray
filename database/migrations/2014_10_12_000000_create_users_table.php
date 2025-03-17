<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('f_name');
            $table->string('l_name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('role')->default(2)->comment('0:Admin,1:Company,2:Employee');
            $table->string('logo')->default('default-user.jpg');
            $table->integer('gender')->comment('1:male , 2:female')->nullable();
            $table->foreignId('country_id')->constrained('countries')
                ->onDelete('cascade');
            $table->string('location')->nullable();
            $table->string('address')->nullable();
            $table->string('phone');
            $table->date('date_of_birth')->nullable();
            $table->rememberToken();
            $table->integer('level_id')->nullable();
            $table->integer('sub_level_id')->nullable();
            $table->integer('section')->nullable();
            $table->integer('sub_section_id')->nullable();
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
        Schema::dropIfExists('users');
    }
}
