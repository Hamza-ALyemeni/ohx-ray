<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class TwilioController extends Controller
{
public function sendWhatsAppMessage()
{
    $accountSid = 'AC15e87c1babaa6c3eff5ecdd67ec2cb83';
    $authToken = '4809e02ebe90dd81615936bfe84fd558';
    $twilioPhoneNumber = '+12564190368';
    $recipientPhoneNumber = '+966509192295';
    $message = 'Hello from OH-Xray! by mazin';

    $twilio = new Client($accountSid, $authToken);

    $message = $twilio->messages->create(
        "whatsapp:$recipientPhoneNumber",
        [
            'from' => "whatsapp:$twilioPhoneNumber",
            'body' => $message
        ]
    );

    // Optional: You can log the message SID for reference
    // Log::info("WhatsApp message SID: " . $message->sid);
}
}
