<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColValueInAnswers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('answers', function (Blueprint $table) {
            $table->integer('value');
        });

        foreach (\App\Model\Answer::all() as $answer){
            if ($answer->id % 6 == 1 ){
                $x = 100;
            }elseif ($answer->id % 6 == 2 ){
                $x = 80;
            }elseif ($answer->id % 6 == 4 ){
                $x = 60;
            }elseif ($answer->id % 6 == 5 ){
                $x = 40;
            }elseif ($answer->id % 6 == 0 || $answer->id % 6 == 3){
                $x = 20;
            }
            $answer->value = $x;
            $answer->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('answers', function (Blueprint $table) {
            //
        });
    }
}
