<?php
namespace App\Imports;

use App\Model\User;
use App\Model\Employee;
use DateTime;
namespace App\Http\Controllers;
use Carbon\Carbon;
use MohamedSabil83\LaravelHijrian\Facades\Hijrian;
use Exception;

class ConvertDate  
{

    public function convertDate($hijri)
    {

        $formattedDate = Carbon::createFromFormat('d/m/Y', $hijri)->format('Y-m-d');
        return Hijrian::gregory($formattedDate)->format('Y-m-d');
       
    } 
}