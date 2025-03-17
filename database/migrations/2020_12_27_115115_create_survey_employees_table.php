<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('survey_company_id')->constrained('survey_companies')
            ->onDelete('cascade');
            $table->foreignId('employee_id')->constrained('users')
                ->onDelete('cascade');
            $table->foreignId('survey_id')->constrained('surveys')
                ->onDelete('cascade');
            $table->dateTime('survey_time_at');
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
        Schema::dropIfExists('survey_employees');
    }
}
