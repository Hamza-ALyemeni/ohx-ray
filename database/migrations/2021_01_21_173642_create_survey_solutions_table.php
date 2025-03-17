<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveySolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_solutions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('survey_employee_id')->constrained('survey_employees')
                ->onDelete('cascade');
            $table->foreignId('question_id')->constrained('survey_questions')
                ->onDelete('cascade');
            $table->text('answer_id');
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
        Schema::dropIfExists('survey_solutions');
    }
}
