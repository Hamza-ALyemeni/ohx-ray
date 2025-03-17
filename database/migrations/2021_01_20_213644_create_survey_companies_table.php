<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies')
                ->onDelete('cascade');
            $table->foreignId('survey_id')->constrained('surveys')
                ->onDelete('cascade');
            $table->timestamps();
        });
        Schema::table( "surveys", function( $table )
        {
            $table->dropForeign('surveys_company_id_foreign');
            $table->dropColumn('company_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey_companies');
    }
}
