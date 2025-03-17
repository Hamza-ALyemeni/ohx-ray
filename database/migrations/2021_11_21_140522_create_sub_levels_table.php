<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_levels', function (Blueprint $table) {
            $table->id();
            $table->string('sub_level');
            $table->foreignId('level_id')->constrained('levels')
                ->onDelete('cascade');
            $table->timestamps();
        });
        DB::statement("INSERT INTO `sub_levels` ( `level_id` ,`sub_level`) VALUES ( 1 , 'Chief'), ( 1 , 'VPs'), ( 1 , 'GMs'), ( 2 , 'Director'), ( 2 , 'Manager'), ( 3 , 'Supervisor'), ( 3 , 'Employees');");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_levels');
    }
}
