<?php

namespace App\Jobs;

use App\Mail\SendEmail;
use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Mail;


class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $details;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        
            $email = new SendEmail($this->details);
            FacadesMail::to($this->details['to'])
            //->cc('a.aldawsar@ccsconsulting.com.sa,m.awad@ccsconsulting.com.sa')
           // ->bcc('m.awad@ccsconsulting.com.sa')
            ->send($email);
       
        

        
    }
}
