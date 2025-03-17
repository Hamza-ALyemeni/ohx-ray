<?php

namespace App\Jobs;

use App\Mail\SendEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Illuminate\Support\Facades\Bus;

use App\Model\Answer;
use App\Model\Company;
use App\Model\CompanyType;
use App\Model\Level;
use App\Model\Employee;
use App\Model\Industry;
use App\Model\Survey;
use App\Model\SurveyCompany;
use App\Model\SurveyPhase;
use Illuminate\Support\Str;
use App\Model\SurveyQuestion;
use App\Model\SurveySolution;
use App\Model\SurveyEmployee;

class SendEmailECH implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        
        $survey = Survey::find(1);

        $email['company_name'] = "test";
        $email['company_name_ar'] = "test";
        $email['survey_company_id'] = 91;
        $email['survey'] = $survey;
        $email['to'] = "mazinawadabas@gmail.com";
        $email['token'] = "mmm";

        $email = new SendEmail($email);

        FacadesMail::to($email['to'])->send($email);
    }

    public function process()
    {
        // Schedule the job to run every 2 minutes
        Bus::dispatch($this)->everyTwoMinutes();
    }
}
