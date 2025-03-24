<!DOCTYPE html>
<html>
<head>
    <title>Survey Report</title>
    <style>
        /* Page layout styles */
        @page {
            size: A4; /* Paper size */
            margin: 20mm; /* Page margins */
        }
        /* ************************************************** */
        .cover-image {
            width: 1000px;
            height: 800px;
            margin-left: 65px;
        }

        .contents-image, .methodology-image, .OHX-RAY-results-explanation {
            width: 850px;
        }

        .company-name{
            font-size: 45px;
            font-weight: bold;
            position: absolute;
            top: 400px;
            left: 580px;   
            color:white;
            word-wrap: break-word; 
            max-width: 300px;
        }

        .sub-title{
            font-size: 28px; 
            position: absolute; 
            left: 580px; 
            top: 525px;  
            color:white;
        }

        .survey-date{
            font-size: 20px; 
            position: absolute;
            left: 580px; 
            top: 605px;  
            color:white; 
        }      
        .hr-image {
            width: 175px;
            position: absolute;
            top: 550px;
            left: 25px;
        }

        /* ************************************ */

        .contents  {
            
            page-break-after: always; 
            /* Force new page after content */
        }

        .contents-image , .methodology-image , .OHX-RAY-results-explanation{
            width: 1100px;
        }

        /* Container for forcing page breaks after each section */
        .page-container {
            page-break-after: always; /* Forces a break after each container */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh; /* Make sure it takes full page height */
        }



        /* ********************** */

        .left-column-demo-image,
        .right-column-demo-image {
            float: left; /* Use float instead of inline-block */
            box-sizing: border-box; /* Include padding in width */
            height: 1000px;
        }

        .left-column-demo-image {
            width: 17%;
            background-color: rgba(57, 123, 35, 255);
            color: white;
            padding: 20px;
            text-align: center;
            height: 800px;
            
        }

        .right-column-demo-image {
            width: 80%;
            background-color: white;
            padding: 20px;
            text-align: center;
            font-size: 16px;
        }

        .demo-image-container{
            height: 1200px;
            /* margin: auto; */
        }

        /* Clearfix to contain floated elements */
        /* .demo-image-container::after {
            content: "";
            display: table;
            clear: both;
        } */
         #arrows{
            width: 800px;
         }

        .response-rate , .age-stats , .deparments-stats , .geneder-stats {
            width: 170px;
            border: 1px solid black;
            padding: 20px;
            border-radius: 35px;
        }
        .nationlities-stats{
            border: 1px solid black;
            width: 230px;
            padding: 20px;
            border-radius: 35px;
            height: 310px;   
        }
        .local-div{
            position: relative;
            left: -80px;
            top: 50px;
        }
        .expat-div{
            position: relative;
            top: -33px;
        }
        .other-div{
            position: relative;
            top: -116px;
            left: 80px;
        }
        .response-rate{
            position: relative;
            left: 460px;
        }
        .nationlities-stats{
            position: relative;
            left: 770px;
            top: 5px;
        }
        .age-stats{
            position: relative;
            left: 540px;
            top: -350px;
        }
        .min-div{
            position: relative;
            top: 60px;
            left: -50px;
        }
        .max-div{
            position: relative;
            top: -22px;
            left: 50px;
        }
        .deparments-stats{
            position: relative;
            left: 300px;
            top: -650px;
        }
        .geneder-stats{
            position: relative;
            top: -860px;
            left: 40px;
        }

        .male-div{
            position: relative;
            left: -60px;
            top: 60px;
        }

        .female-div{
            position: relative;
            left: 50px;
            top: -85px;
        }

        .rrate{
            color: red;
        }

        .number{
            color: rgba(57, 123, 35, 255);
            font-size: 20px;
        }

        /* **************************** */

        /* @page {
            size: A4;
            margin: 20mm;
        } */
        /* body {
            font-family: Arial, sans-serif;
            text-align: center;
        } */
        .overall-image-container {
            width: 100%;
            text-align: center;
            height: 1200px;
            margin-top: 1200px;
        }
        .right-column-overall{
            margin-right: 320px;
        }
        .title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .subtitle {
            font-size: 24px;
            color: gray;
        }
        .overall-health-score-img{
            width: 480px;
            position: relative;
        }
        .score {
            font-size: 40px;
            font-weight: bold;
            margin-top: 20px;
            position: relative;
            top: -320px;
            -webkit-text-stroke: 1px black; /* حجم ولون الحواف */
        }
        .red-text{
            color:#db0e15;
        }
        .yellow-text{
            color: #ffff00
        }
        .green-text{
            color: #397b23;
        }
        .orange-text{
            color: #ffc000;
        }
        .scale {
            font-size: 18px;
            margin-top: 10px;
            margin-right: 20px;
            margin-left: 0px;
            background-color: #dddd;
        }
        .quadrants {
            margin-top: 20px;
            height: 30px;
        }
        .quadrants div{
            display: inline;
        }
        .quartile{
            width: 150px;
            /* padding: 20px; */
            padding-bottom: 35px;
            border-radius: 35px;
            border: 2px solid rgba(168,168,168,255);
            position: relative;
            left: 1000px;
            top: -480px;
            text-align: center;
        }
        .quartile-first-part{
            font-size: 26px;
        }
        .quartile-second-part{
            font-size: 24px;
        }
        .quadrant {
            display: inline-block;
            width: 10px;
            height: 10px;
            font-size: 20px;
            font-weight: bold;
        }
        .text-for-quartile {
            margin-right: 80px;
            background-color: #dddd;
        }
        /* .top-quartile , .second-quartile , .third-quartile , .bottom-quartile{
            margin-right: 20px;
            width: 40px;
            height: 50px;
        } */
        .top-quartile { 
            background-color: #397b23;
            color: white;
        }
        .second-quartile { 
            background-color: #ffff00;
            color: #397b23;
        }
        .third-quartile { 
            background-color: #ffc000;
            color: rgba(57, 123, 35, 255);
        }
        .bottom-quartile { 
            background-color: #db0e15;
            color: white;
        }

        /* ************************** */
        .margin-auto{
            margin: auto;
        }
        .center-title{
            text-align: center;
        }
        .display-inline{
            display: inline;
        }

        .organization-results{
            margin-top: 1200px; 
            /* border: 1px solid black; for dubging */
        }
     
        .quartile-orgnaztion-details{
            width: 150px;
            /* padding: 20px; */
            border-radius: 35px;
            border: 4px solid rgba(168,168,168,255);
            text-align: center;
        }

        .organization-results-score{
            position: relative;
            left: 300px;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .organization-results-quartile{
            position: relative;
            left: 500px;
            top: -95px;
            font-size: 26px;
        }

        .organization-results-container{
            /* border:1px solid black;  */
            margin-top: 80px;
        }

        .quartile-orgnaztion-details-left-column{
            height: 800px;
            width: 17%;
            background-color: rgb(222,226,221);
            color:#397b23;
            position: relative;
            top: -200px;
        }

        .quartile-orgnaztion-details-right-column{
            width: 80%;
            position: relative;
            left: 290px;
            top: -800px;
            height: 800px;
        }
        .inside-focus-result , .outside-focus-result{
            height: 800px;
        }
      
        .inside-focus-result-header{
            position: relative;
            height: 250px;
            width: 140px;
        }
        .inside-focus-result-header-number{
            position: relative;
            left: 50px;
            top: 65px;
            font-size: 44px;
        }
        .inside-focus-result-header-text{
            position: relative;
            left: 35px;
            top: 65px;
        }
        .inside-focus-result-accountability{
            position: relative;
            height: 122px;
            width: 120px;
            top: -265px;
            left: 150px;
        }
        .inside-focus-result-accountability-text{
            position: relative;
            left: 20px;
            top: 20px;
        }
        .inside-focuse-result-accountability-number{
            position: relative;
            left: 65px;
            top: 30px;
            font-size: 28px;
        }
        .inside-focus-result-leadership{
            position: relative;
            height: 122px;
            width: 120px;
            top: -275px;
            left: 150px;
        }
        .inside-focus-result-leadership-text{
            position: relative;
            left: 20px;
            top: 20px;
        }
        .inside-focus-result-leadership-number{
            position: relative;
            left: 65px;
            top: 30px;
            font-size: 28px;
        }

        .responsibilities{
            position: relative;
            left: 280px;
            top: -540px;
            width: 200px;
            height: 35px;
        }

        .responsibilities-text{
            position: relative;
            top: 5px;
            left: 10px;
        }

        .responsibilities-number{
           margin-left: 60px;
        }

        .trustworthiness{
            position: relative;
            left: 281px;
            top: -550px;
            width: 200px;
            height: 35px;
        }

        .turstworthiness-text{
            position: relative;
            top: 5px;
            left: 10px;
        }

        .turstworthiness-number{
            margin-left: 48px;
        }
        .commitment{
            position: relative;
            left: 282px;
            top: -560px;
            width: 200px;
            height: 35px;
        }
        .commitment-text{
            position: relative;
            top: 5px;
            left: 10px;
        }

        .commitment-number{
            margin-left: 60px;
        }
        .democratic{
            position: relative;
            left: 283px;
            top: -565px;
            width: 200px;
            height: 35px;
        }
        .democratic-text{
            position: relative;
            top: 5px;
            left: 10px;
        }

        .democratic-number{
            margin-left: 65px;
        }
        .autocratic{
            position: relative;
            left: 284px;
            top: -575px;
            width: 200px;
            height: 35px;
        }
        .autocratic-text{
            position: relative;
            top: 5px;
            left: 10px;
        }
        .autocratic-number{
            margin-left: 72px;
        }
        .transformational{
            position: relative;
            left: 284px;
            top: -585px;
            width: 200px;
            height: 35px;
        }
        .transformational-text{
            position: relative;
            top: 5px;
            left: 10px;
        }
        .transformational-number{
            margin-left: 33px;
        }
        .inside-focus-result-working-environment{
            position: relative;
            height: 122px;
            width: 120px;
            top: -847px;
            left: 520px;
        }
        .inside-focus-result-working-environment-text{
            position: relative;
            left: 20px;
            top: 20px;
        }
        .inside-focus-result-working-environment-number{
            position: relative;
            left: 65px;
            top: 15px;
            font-size: 28px;
        }
        .inside-focus-result-motivation{
            position: relative;
            height: 122px;
            width: 120px;
            top: -857px;
            left: 520px;
        }
        .inside-focus-result-motivation-text{
            position: relative;
            left: 20px;
            top: 20px;
        }
        .inside-focus-result-motivation-number{
            position: relative;
            left: 65px;
            top: 30px;
            font-size: 28px;
        }
        .trusting{
            position: relative;
            left: 650px;
            top: -1122px;
            width: 200px;
            height: 35px;
        }
        .trusting-text{
            position: relative;
            top: 5px;
            left: 10px;
        }
        .trusting-number{
            margin-left: 90px;
        }
        .fairness{
            position: relative;
            left: 651px;
            top: -1132px;
            width: 200px;
            height: 35px;
        }
        .fairness-text{
            position: relative;
            top: 5px;
            left: 10px;
        }
        .fairness-number{
            margin-left: 90px;
        }
        .respect{
            position: relative;
            left: 652px;
            top: -1142px;
            width: 200px;
            height: 35px;
        }
        .respect-text{
            position: relative;
            top: 5px;
            left: 10px;
        }
        .respect-number{
            margin-left: 90px;
        }
        .reward{
            position: relative;
            left: 653px;
            top: -1145px;
            width: 200px;
            height: 35px;
        }
        .reward-text{
            position: relative;
            top: 5px;
            left: 10px;
        }
        .reward-number{
            margin-left: 90px;
        }
        .inspire{
            position: relative;
            left: 654px;
            top: -1155px;
            width: 200px;
            height: 35px;
        }
        .inspire-text{
            position: relative;
            top: 5px;
            left: 10px;
        }
        .inspire-number{
            margin-left: 50px;
        }
        .recognition{
            position: relative;
            left: 655px;
            top: -1165px;
            width: 200px;
            height: 35px;
        }  
        .recognition-text{
            position: relative;
            top: 5px;
            left: 10px;
        }
        .recognition-number{
            margin-left: 65px;
        }

        .outside-focus-result{
            position: relative;
            top: -550px;
        }

        /* *************************** */

        /* *************************** */

        .heading{
           background-color: #dddd;
        }

        .final-col{
            list-style-type: none; 
            padding: 0; 
            display: inline-block;
        }

        .final-item{
            padding: 10px;
            margin: 5px;
            width: 250px;
            font-size: 18px;     
         }
        
        .grade{
            margin-left: 5px;
        }

        /* *************************** */

        /* *************************** */
       

        .benchmark-data-company-score{
            -webkit-text-stroke: 1px black; /* حجم ولون الحواف */     
            font-size: 34px;
            position: relative;
            left: 105px;
            top: -127px;
        }

        .benchmark-data-private-score{
            -webkit-text-stroke: 1px black; /* حجم ولون الحواف */     
            font-size: 34px;
        }

        .benchmark-data-public-score{
            -webkit-text-stroke: 1px black; /* حجم ولون الحواف */     
            font-size: 34px;
        }

        .benchmark-data-non-profit-score{
            -webkit-text-stroke: 1px black; /* حجم ولون الحواف */     
            font-size: 34px;
        }


        .benchmark-data h2{
            color: #397b23;
            font-weight: 900;
        }

        .benchmark-data {
            page-break-before: always; /* Force a new page */
            page-break-inside: avoid; /* Prevent content from splitting */
            margin-top: 100px; /* Push it down to the next page */
        }

        .benchmark-data table, .benchmark-data th,.benchmark-data td {
            border: 10px solid white;
            border-collapse: collapse;
        }

        .benchmark-data table{
            height: 550px;
        }

        .benchmark-data th{
            width: 250px;
        }

      
        .benchmark-data td:first-child
        {
            background-color: #eee;
            width: 200px;
        }

        .benchmark-data th{
            background-color: #eee;
            width: 70px;
        }

        .right-column-benchmark{
            position: relative;
            top: -1550px;
            left: 590px;
            width: 800px;
        }

        /* *************************** */

        /* *************************** */

        .ohx-ray-insights{
            /* page-break-before: always;  */
            /* Force a new page */
            /* page-break-inside: avoid;  */
            /* Prevent content from splitting */
            /* margin-top: 100px;  */
            /* Push it down to the next page */
            position: relative;
            top: -200px;
        }

        .ohx-ray-insights-image{
            width: 100%;
            height: 700px;
        }

        /* *************************** */

        /* *************************** */
       
        .ohx-ray-gender-insights{
            display: block;
            position: relative;
            top: 1050px; 
            left: 100px;
        } 

        .ohx-ray-gender-insights-image{
            width: 1100px;
            height: 700px;
        }

        /* *************************** */
        /* *************************** */

        .organization-results-male-health{
            position: relative;
            top: 2310px;        
            display: block; 
        }

        .stats-picture{
           width:220px;
           position: relative;
           top: 40px;
           left: 10px;
        }
        .state-color-image{
            width: 190px;
            position: relative;
            left: 30px;
        }

        /* *************************** */
        /* ******************************* */
        .indicators-by-gender table{
            width: 1250px;
            height: 400px;
        }
        .indicators-by-gender table, .indicators-by-gender th,.indicators-by-gender td {
            border: 10px solid white;
            border-collapse: collapse;
        }
        .indicators-by-gender td:first-child
        {
            background-color: #eee;
        }
        

        .indicators-by-gender th{
            background-color: #eee;
            width: 70px;
        }

        /* ******************************* */

        /* ******************************* */

        .practices-by-gender table{
            width: 1250px;
        }

        .practices-by-gender table, .practices-by-gender th, .practices-by-gender td {
            border: 10px solid white;
            border-collapse: collapse;
        }

        .practices-by-gender th{
            height: 45px;
            width: 50px;
        }

        .practices-by-gender td:first-child,
        .practices-by-gender .practice-1, 
        .practices-by-gender .practice-2,
        .practices-by-gender .practice-3,
        .practices-by-gender th
        {
            background-color: #eee;
        }

        .practice-1 , .practice-2 , .practice-3 , .value-1 , .value-2 , .value-3{
            height: 32%;
        }

        .practices-by-gender td{
            height: 80px;
        }
        
        /* ******************************* */

        /* ******************************* */

        .by-level img{
            width: 1100px;
        }

        /* ******************************* */

        /* ******************************* */

        #by-age img{
            width: 1100px;
        }

        /* ******************************* */

        /* ******************************* */

        .by-nationality img{
            width: 1100px;
        }

        /* ******************************* */

    </style>
</head>
<body>
    <!-- Cover Page -->
    <div class="page-container">
        <img class="cover-image" src="{{ public_path('cover.png') }}" alt="Cover Image">
        <div class="intro">
            <p class="company-name">{{$company->name}}</p>
            <p class="sub-title">OHX-RAY <br> Health Results</p>
            <p class="survey-date">{{$survey_company->created_at}}</p>
        </div>
        <img class="hr-image" src="{{public_path('uploads/companies/' . basename($company->logo)) ?? public_path('uploads/companies/default-logo.png')}}" alt="Company Logo">
    </div>

    <!-- New Page with Image -->
    <div class="page-container">
        <div class="contents">
            <img class="contents-image" src="{{ public_path('contents.png') }}" alt="Contents">
        </div>
    </div>

    <!-- Page for OHX-RAY results explanation -->
    <div class="page-container">
        <div class="contents">
            <img class="OHX-RAY-results-explanation" src="{{ public_path('OHX-RAY results explanation.png') }}" alt="OHX-RAY results explanation">
        </div>
    </div>

    <div class="page-container">
        <div class="contents">
            <img class="methodology-image" src="{{ public_path('methodology-1.png') }}" alt="Methodology">
        </div>
    </div>

    <div class="page-container">
        <div class="contents">
            <img class="methodology-image" src="{{ public_path('methodology-2.png') }}" alt="Methodology">
        </div>
    </div>

    <div class="demo-image-container" >
        <div class="left-column-demo-image">
            <h1 style="font-size: 60px;">02</h1>
            <h4 style="font-size: 20px">{{ $company->name }}</h4>
            <h4 style="font-size: 20px">DEMOGRAPHIC <br> IMAGE</h4>
        </div>
        <div class="right-column-demo-image" >
            <div class="response-rate">
                <img src="{{ public_path('id icon.PNG') }}" alt="">
                <div class="number">{{ $focus_result[0]['count'] }}</div>
                <p>NUMBER OF EMPLOYEES <br> WHO RESPONDED</p>
                <p><span class="rrate">{{ number_format($responseStats->response_rate,0); }}%</span> RESPONSE RATE</p>
            </div>
            <img id="arrows" src="{{ public_path('arrows.png')}}" alt="">
            <div class="nationlities-stats">
                <img src="{{ public_path('nationalties-icon.PNG') }}" alt="">
                <div class="number">{{ $nationalitiesCount->total_nationalities; }}</div>
                <div>
                    <p>NATIONALITIES</p>
                    <div class="local-div">
                        <div>LOCAL</div>
                        <p class="number">{{ $focus_result_local[0]['count'] ?? 0 }}</p>
                    </div>
                    <div class="expat-div">
                        <div>EXPAT</div>
                        <p class="number">{{ $focus_result_expat[0]['count'] ?? 0 }}</p>
                    </div>
                    <div class="other-div">
                        <div>OTHER</div>
                        <p class="number">{{ $focus_result[0]['count'] - ($focus_result_male[0]['count'] + $focus_result_female[0]['count']) }}</p>
                    </div>
                </div>
            </div>
            <div class="age-stats">
                <img src="{{ public_path('age-stats.PNG') }}" alt="">
                <div>AVARAGE AGE</div>
                <div class="number">{{ number_format($ageStats->avg_age ?? 0, 0) }}</div>
                <div class="min-div">
                    <div>MIN</div>
                    <p class="number">{{ $ageStats->min_age ?? '0' }}</p>
                </div>
                <div class="max-div">
                    <div>MAX</div>
                    <p class="number">{{ $ageStats->max_age ?? '0' }}</p>
                </div>
            </div>
            <div class="deparments-stats">
                <img src="{{ public_path('admin-stats.PNG') }}" alt="">
                <div class="number">{{ $adminLevelCount ?? 0 }}</div>
                <p>ADMIN LEVELS</p>
                <p><span class="number">{{ $departmentCount ?? 0 }}</span> DEPARTMENTS</p>
            </div>
            <div class="geneder-stats">
                <div class="male-div">
                    <img src="{{ public_path('male-stats.PNG') }}" alt="">
                    <div class="number">{{ $focus_result_male[0]['count'] ?? 0 }}</div>
                    <p>MALE</p>
                </div>
                <div class="female-div">
                    <img src="{{ public_path('female stats.PNG') }}" alt="">
                    <div class="number">{{ $focus_result_female[0]['count'] ?? 0 }}</div>
                    <p>FEMALE</p>
                </div>
            </div>
        </div>
    </div>

    <div class="overall-image-container">
        <div class="left-column-demo-image">
            <h1 style="font-size: 60px;">03</h1>
            <h4 style="font-size: 20px ">{{ $company->name }}</h4>
            <h4 style="font-size: 20px">OHX-RAY OVERALL <br> IMAGE</h4>
        </div>
        <div class="right-column-overall">
            <p class="title">{{ $company->name }} OVERALL IMAGE</p>
            <p class="subtitle">HEALTH'S SCORE</p>

            @if(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) <= 25)
                <img class="overall-health-score-img" src="{{ public_path('red overall score.png') }}" alt="">
            @elseif(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) <= 50)
                <img class="overall-health-score-img" src="{{ public_path('orange overall score.png') }}" alt="">
            @elseif(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) <= 80)
                <img class="overall-health-score-img" src="{{ public_path('yellow overall score.png') }}" alt="">
            @else
                <img class="overall-health-score-img" src="{{ public_path('top overall score.png') }}" alt="">
            @endif

            @if(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) <= 25)
                <p class="score red-text">{{ number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) }}</p>
            @elseif(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) <= 50)
                <p class="score orange-text">{{ number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) }}</p>
            @elseif(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) <= 80)
                <p class="score yellow-text">{{ number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) }}</p>
            @else
                <p class="score green-text">{{ number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) }}</p>
            @endif
        </div>

        @if(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 2) <= 25)
            <p class="quartile bottom-quartile"><span class=" quartile-first-part">BOTTOM</span> <span class="quartile-second-part">QUARTILE</span></p>
        @elseif(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 2) <= 50)
            <p class="quartile third-quartile"><span class="quartile-first-part">THIRD</span> <span class="quartile-second-part">QUARTILE</span></p>
        @elseif(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 2) <= 80)
            <p class="quartile second-quartile"><span class="quartile-first-part">SECOND</span> <span class="quartile-second-part">QUARTILE</span></p>
        @else
            <p class="quartile top-quartile"><span class="quartile-first-part">TOP</span> <br> <span class="quartile-second-part">QUARTILE</span></p>
        @endif

        <div class="quadrants">
            <span class="scale">Scale:</span>
            <div>
                <span class="quadrant top-quartile"></span>
                <span class="text-for-quartile">TOP QUARTILE</span>
                <span class="quadrant second-quartile"></span>
                <span class="text-for-quartile">SECOND QUARTILE</span>
                <span class="quadrant third-quartile"></span>
                <span class="text-for-quartile">THIRD QUARTILE</span>
                <span class="quadrant bottom-quartile"></span>
                <span class="text-for-quartile">BOTTOM QUARTILE</span>
            </div>
        </div>
    </div>  

    <div class="organization-results">
        <p class="center-title title">{{ $company->name }} OVERALL IMAGE</p>
        <div class="organization-results-container">
            @if(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) <= 25)
                <p class="quartile-orgnaztion-details bottom-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0)}}</span></p>
            @elseif(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) <= 50)
                <p class="quartile-orgnaztion-details third-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0)}}</span></p>
            @elseif(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) <= 80)
                <p class="quartile-orgnaztion-details second-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0)}}</span></p>
            @else
                <p class="quartile-orgnaztion-details top-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0)}}</span></p>
            @endif
    
            @if(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) <= 25)
                <p class="quartile-orgnaztion-details bottom-quartile organization-results-quartile"><span class="quartile-first-part">BOTTOM</span> <span class="quartile-second-part">QUARTILE</span></p>
            @elseif(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) <= 50)
                <p class="quartile-orgnaztion-details third-quartile organization-results-quartile"><span class="quartile-first-part">THIRD</span> <span class="quartile-second-part">QUARTILE</span></p>
            @elseif(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0 ) <= 80)
                <p class="quartile-orgnaztion-details second-quartile organization-results-quartile"><span class="quartile-first-part">SECOND</span> <span class="quartile-second-part">QUARTILE</span></p>
            @else
                <p class="quartile-orgnaztion-details top-quartile organization-results-quartile"><span class="quartile-first-part">TOP</span> <br> <span class="quartile-second-part">QUARTILE</span></p>
            @endif

            <div class="quartile-orgnaztion-details-left-column">
                <h4 style="font-size: 34px; position:relative; top:350px; left:40px; word-wrap: break-word; max-width: 200px;">{{ $company->name }}</h4>
            </div>

                   <!-- Start of External -->
            <div class="quartile-orgnaztion-details-right-column">
                <div class="inside-focus-result">
                    <div class="inside-focus-result-header @if($focus_result[1]['value'] <= 25) bottom-quartile @elseif($focus_result[1]['value'] <= 50) third-quartile @elseif($focus_result[1]['value'] <= 80) second-quartile @else top-quartile @endif">
                        <h3 class="inside-focus-result-header-text">INSIDE</h3>
                        <h3 class="inside-focus-result-header-number">{{number_format($focus_result[1]['value'],0);}}</h3>
                    </div>
                    <div class="inside-focus-result-accountability @if($focus_result[1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result[1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result[1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                        <p class="inside-focus-result-accountability-text">{{ $focus_result[1]['dimensional_results'][0]['key']; }}</p>
                        <p class="inside-focuse-result-accountability-number">{{ number_format($focus_result[1]['dimensional_results'][0]['value'] ,0); }}</p>
                    </div>
                    <div class="inside-focus-result-leadership @if($focus_result[1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result[1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result[1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                        <p class="inside-focus-result-leadership-text">{{ $focus_result[1]['dimensional_results'][1]['key']; }}</p>
                        <p class="inside-focus-result-leadership-number">{{ number_format($focus_result[1]['dimensional_results'][1]['value'] ,0) }}</p>
                    </div>
                    <div>
                        <div class="responsibilities @if($focus_result[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="responsibilities-text">{{ $focus_result[1]['dimensional_results'][0]['dimensional_results'][0]['key']; }}<span class="responsibilities-number">{{ number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</span></p>
                        </div>
                        <div class="trustworthiness @if($focus_result[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="turstworthiness-text">{{ $focus_result[1]['dimensional_results'][0]['dimensional_results'][1]['key']; }}<span class="turstworthiness-number">{{ number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</span></p>
                        </div>
                        <div class="commitment @if($focus_result[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="commitment-text">{{ $focus_result[1]['dimensional_results'][0]['dimensional_results'][2]['key']; }} <span class="commitment-number">{{ number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</span></p>
                        </div>
                    </div>
                    <div>
                        <div class="democratic @if($focus_result[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="democratic-text">{{ $focus_result[1]['dimensional_results'][1]['dimensional_results'][0]['key']; }}  <span class="democratic-number">{{  number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0); }}</span> </p>
                        </div>
                        <div class="autocratic @if($focus_result[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="autocratic-text">{{ $focus_result[1]['dimensional_results'][1]['dimensional_results'][1]['key']; }} <span class="autocratic-number">{{  number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0); }}</span></p>
                        </div>
                        <div class="transformational @if($focus_result[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="transformational-text">{{ $focus_result[1]['dimensional_results'][1]['dimensional_results'][2]['key']; }} <span class="transformational-number">{{  number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0); }}</span></p>
                        </div>
                    </div>
                    <div class="inside-focus-result-working-environment  @if($focus_result[1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result[1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result[1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                        <p class="inside-focus-result-working-environment-text">{{ $focus_result[1]['dimensional_results'][2]['key']; }}</p>
                        <p class="inside-focus-result-working-environment-number">{{ number_format($focus_result[1]['dimensional_results'][2]['value'],0); }}</p>
                    </div>
                    <div class="inside-focus-result-motivation @if($focus_result[1]['dimensional_results'][3]['value'] <= 25) bottom-quartile @elseif($focus_result[1]['dimensional_results'][3]['value'] <= 50) third-quartile @elseif($focus_result[1]['dimensional_results'][3]['value'] <= 80) second-quartile @else top-quartile @endif">
                        <p class="inside-focus-result-motivation-text">{{ $focus_result[1]['dimensional_results'][3]['key']; }}</p>
                        <p class="inside-focus-result-motivation-number">{{ number_format($focus_result[1]['dimensional_results'][3]['value'],0); }}</p>
                    </div>
                    <div>
                        <div class="trusting @if($focus_result[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="trusting-text">{{ $focus_result[1]['dimensional_results'][2]['dimensional_results'][0]['key']; }} <span class="trusting-number">{{ number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0); }}</span></p>
                        </div>
                        <div class="fairness @if($focus_result[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="fairness-text">{{ $focus_result[1]['dimensional_results'][2]['dimensional_results'][1]['key']; }} <span class="fairness-number">{{ number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0); }}</span></p>
                        </div>
                        <div class="respect @if($focus_result[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="respect-text">{{ $focus_result[1]['dimensional_results'][2]['dimensional_results'][2]['key']; }} <span class="respect-number">{{ number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0); }}</span></p>
                        </div>
                    </div>
                    <div>
                        <div class="reward @if($focus_result[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="reward-text">{{ $focus_result[1]['dimensional_results'][3]['dimensional_results'][0]['key']; }} <span class="reward-number">{{ number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</span></p>
                        </div>
                        <div class="inspire @if($focus_result[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inspire-text">{{$focus_result[1]['dimensional_results'][3]['dimensional_results'][1]['key']; }}<span class="inspire-number">{{number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][1]['value'] ,0);}}</span></p>
                        </div>
                        <div class="recognition @if($focus_result[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="recognition-text">{{$focus_result[1]['dimensional_results'][3]['dimensional_results'][2]['key']; }} <span class="recognition-number">{{number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0); }}</span></p>
                        </div>
                    </div>
                </div>
                <div class="outside-focus-result">
                    <div class="inside-focus-result-header @if($focus_result[0]['value'] <= 25) bottom-quartile @elseif($focus_result[0]['value'] <= 50) third-quartile @elseif($focus_result[0]['value'] <= 80) second-quartile @else top-quartile @endif">
                        <h3 class="inside-focus-result-header-text">OUTSIDE</h3>
                        <h3 class="inside-focus-result-header-number">{{ number_format($focus_result[0]['value'],0); }}</h3>
                    </div>
                    <div class="inside-focus-result-accountability @if($focus_result[0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result[0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result[0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                        <p class="inside-focus-result-accountability-text">{{ $focus_result[0]['dimensional_results'][0]['key']; }}</p>
                        <p class="inside-focuse-result-accountability-number">{{ number_format($focus_result[0]['dimensional_results'][0]['value'],0);}}</p>
                    </div>
                    <div class="inside-focus-result-leadership @if($focus_result[0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result[0]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result[0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                        <p class="inside-focus-result-leadership-text">{{ $focus_result[0]['dimensional_results'][1]['key']; }}</p>
                        <p class="inside-focus-result-leadership-number">{{ number_format($focus_result[0]['dimensional_results'][1]['value'],0); }}</p>
                    </div>
                    <div>
                        <div class="responsibilities @if($focus_result[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="responsibilities-text">{{ $focus_result[0]['dimensional_results'][0]['dimensional_results'][0]['key']; }}<span class="responsibilities-number" style="margin-left:110px">{{number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0); }}</span></p>
                        </div>
                        <div class="trustworthiness @if($focus_result[0]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result[0]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="turstworthiness-text">{{ $focus_result[0]['dimensional_results'][0]['dimensional_results'][1]['key']; }}<span class="turstworthiness-number" style="margin-left:110px">{{number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0); }}</span></p>
                        </div>
                        <div class="commitment @if($focus_result[0]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result[0]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="commitment-text">{{ $focus_result[0]['dimensional_results'][0]['dimensional_results'][2]['key']; }} <span class="commitment-number" style="margin-left:90px">{{ number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0); }}</span></p>
                        </div>
                    </div>
                    <div>
                        <div class="democratic @if($focus_result[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="democratic-text">{{ $focus_result[0]['dimensional_results'][1]['dimensional_results'][0]['key']; }}  <span class="democratic-number" style="margin-left:80px">{{ number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0); }}</span> </p>
                        </div>
                        <div class="autocratic @if($focus_result[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="autocratic-text">{{$focus_result[0]['dimensional_results'][1]['dimensional_results'][1]['key'];}} <span class="autocratic-number" style="margin-left:80px">{{ number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0); }}</span></p>
                        </div>
                        <div class="transformational @if($focus_result[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="transformational-text">{{$focus_result[0]['dimensional_results'][1]['dimensional_results'][2]['key'] }}<span class="transformational-number" style="margin-left: 90px;">{{ number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0); }}</span></p>
                        </div>
                    </div>
                    <div class="inside-focus-result-working-environment @if($focus_result[0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result[0]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result[0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                        <p class="inside-focus-result-working-environment-text">External <br> Relation</p>
                        <p class="inside-focus-result-working-environment-number">{{number_format($focus_result[0]['dimensional_results'][2]['value'],0) }}</p>
                    </div>
                    <div class="inside-focus-result-motivation @if($focus_result[0]['dimensional_results'][3]['value'] <= 25) bottom-quartile @elseif($focus_result[0]['dimensional_results'][3]['value'] <= 50) third-quartile @elseif($focus_result[0]['dimensional_results'][3]['value'] <= 80) second-quartile @else top-quartile @endif">
                        <p class="inside-focus-result-motivation-text">{{$focus_result[0]['dimensional_results'][3]['key'] }}</p>
                        <p class="inside-focus-result-motivation-number">{{number_format($focus_result[0]['dimensional_results'][3]['value'],0); }}</p>
                    </div>
                    <div>
                        <div class="trusting @if($focus_result[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="trusting-text">{{ $focus_result[0]['dimensional_results'][2]['dimensional_results'][0]['key']; }}<span class="trusting-number" style="margin-left:90px">{{number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</span></p>
                        </div>
                        <div class="fairness  @if($focus_result[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="fairness-text">{{ $focus_result[0]['dimensional_results'][2]['dimensional_results'][1]['key']; }} <span class="fairness-number" style="margin-left:75px">{{ number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0); }}</span></p>
                        </div>
                        <div class="respect  @if($focus_result[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="respect-text">{{ $focus_result[0]['dimensional_results'][2]['dimensional_results'][2]['key']; }} <span class="respect-number">{{ number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0); }}</span></p>
                        </div>
                    </div>
                    <div>
                        <div class="reward @if($focus_result[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="reward-text">{{ $focus_result[0]['dimensional_results'][3]['dimensional_results'][0]['key'];}} <span class="reward-number" style="margin-left: 110px;">{{ number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0); }}</span></p>
                        </div>
                        <div class="inspire @if($focus_result[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inspire-text">{{ $focus_result[0]['dimensional_results'][3]['dimensional_results'][1]['key']; }} <span class="inspire-number" style="margin-left: 90px;">{{ number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</span></p>
                        </div>
                        <div class="recognition @if($focus_result[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="recognition-text">{{ $focus_result[0]['dimensional_results'][3]['dimensional_results'][2]['key'];}} <span class="recognition-number" style="margin-left: 70px;">{{ number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</span></p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="quadrants" style="position: relative; top: -950px;">
            <span class="scale">Scale:</span>
            <div>
                <span class="quadrant top-quartile"></span>
                <span class="text-for-quartile">TOP QUARTILE</span>
                <span class="quadrant second-quartile"></span>
                <span class="text-for-quartile">SECOND QUARTILE</span>
                <span class="quadrant third-quartile"></span>
                <span class="text-for-quartile">THIRD QUARTILE</span>
                <span class="quadrant bottom-quartile"></span>
                <span class="text-for-quartile">BOTTOM QUARTILE</span>
            </div>
        </div>
    
    </div>  

   

    <div class="center-title" style="position: relative; top:250px;">
        <h2 class="custom-title">HIGHEST AND LOWEST 5 PRACTICES</h2>
        <div class="final-row">
            <h3 class="heading">OVERALL OHX-RAY SCORE</h3>
        </div>
        <div class="center-title">
            <ul class="final-col">
                @for($i = 0; $i < 5;$i++) 
                    <li class="final-item @if($sort_results[$i]['value'] <= 25) bottom-quartile @elseif($sort_results[$i]['value'] <= 50) third-quartile @elseif($sort_results[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                        {{$sort_results[$i]['key']}}
                        <span class="grade">{{number_format($sort_results[$i]['value'],0)}}</span>
                    </li>
                @endfor
            </ul>
        </div>
        <div class="center-title" >
            <ul class="final-col" >
                @for($i = 23; $i>18;$i--)
                <li class="final-item @if($sort_results[$i]['value'] <= 25) bottom-quartile @elseif($sort_results[$i]['value'] <= 50) third-quartile @elseif($sort_results[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                {{$sort_results[$i]['key']}}
                        <span class="grade">{{number_format($sort_results[$i]['value'],0)}}</span>
                    </li>
                @endfor
            </ul>
        </div>

        <div class="quadrants">
        <span class="scale">Scale:</span>
        <div>
            <span class="quadrant top-quartile"></span>
            <span class="text-for-quartile">TOP QUARTILE</span>
            <span class="quadrant second-quartile"></span>
            <span class="text-for-quartile">SECOND QUARTILE</span>
            <span class="quadrant third-quartile"></span>
            <span class="text-for-quartile">THIRD QUARTILE</span>
            <span class="quadrant bottom-quartile"></span>
            <span class="text-for-quartile">BOTTOM QUARTILE</span>
        </div>
    </div>
       
    </div>

   
    
    <div class="benchmark-data">
        @if(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) <= 25)
            <img class="state-color-image" src="{{ public_path('red overall score.png') }}" alt="">
        @elseif(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) <= 50)
            <img class="state-color-image" src="{{ public_path('orange overall score.png') }}" alt="">
        @elseif(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) <= 80)
            <img class="state-color-image" src="{{ public_path('yellow overall score.png') }}" alt="">
        @else
            <img class="state-color-image" src="{{ public_path('top overall score.png') }}" alt="">
        @endif

        <div class="benchmark-data-company-score @if(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) <= 25) red-text @elseif(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) <= 50) orange-text @elseif(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) <= 80) yellow-text @else green-text @endif">
           {{ number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0)}}
        </div>

        <h2 style="font-size:24px; ">{{ $company->name; }}</h2>

        <span class="top-quartile" style="position:relative; left:300px; top:-200px; width:300px; padding:20px; border-radius:10px; font-size:24px;">BenchMark Data</span>

        <div class="private" style="position:relative; left:600px; top:-360px; width:260px; ">
            @if(number_format((($private[0]['value'] + $private[1]['value']) / 2), 0) <= 25)
                <img class="state-color-image" src="{{ public_path('red overall score.png') }}" alt="">
            @elseif(number_format((($private[0]['value'] + $private[1]['value']) / 2), 0) <= 50)
                <img class="state-color-image" src="{{ public_path('orange overall score.png') }}" alt="">
            @elseif(number_format((($private[0]['value'] + $private[1]['value']) / 2), 0) <= 80)
                <img class="state-color-image" src="{{ public_path('yellow overall score.png') }}" alt="">
            @else
                <img class="state-color-image" src="{{ public_path('top overall score.png') }}" alt="" >
            @endif
              <div class="benchmark-data-private-score @if(number_format((($private[0]['value'] + $private[1]['value']) / 2), 0) <= 25) red-text @elseif(number_format((($private[0]['value'] + $private[1]['value']) / 2), 0) <= 50) orange-text @elseif(number_format((($private[0]['value'] + $private[1]['value']) / 2), 0) <= 80) yellow-text @else green-text @endif" style="position: relative; left:105px; top:-130px;" >
                {{ number_format((($private[0]['value'] + $private[1]['value']) / 2), 0)}}
              </div>
             <h4 style="position: relative; left:90px; top:-50px; font-size:24px;">private</h4>
        </div>

      
        <div class="public" style="position:relative; left:870px; top:-710px; width:260px; ">
            @if(number_format((($public[0]['value'] + $public[1]['value']) / 2), 0) <= 25)
                <img class="state-color-image" src="{{ public_path('red overall score.png') }}" alt="">
            @elseif(number_format((($public[0]['value'] + $public[1]['value']) / 2), 0) <= 50)
                <img class="state-color-image" src="{{ public_path('orange overall score.png') }}" alt="">
            @elseif(number_format((($public[0]['value'] + $public[1]['value']) / 2), 0) <= 80)
                <img class="state-color-image" src="{{ public_path('yellow overall score.png') }}" alt="">
            @else
                <img class="state-color-image" src="{{ public_path('top overall score.png') }}" alt="">
            @endif

            <div class="benchmark-data-public-score @if(number_format((($public[0]['value'] + $public[1]['value']) / 2), 0) <= 25) red-text @elseif(number_format((($public[0]['value'] + $public[1]['value']) / 2), 0) <= 50) orange-text @elseif(number_format((($public[0]['value'] + $public[1]['value']) / 2), 0) <= 80) yellow-text @else green-text @endif" style="position: relative; left:105px; top:-130px;">
            {{ number_format((($public[0]['value'] + $public[1]['value']) / 2), 0)}}
            </div>
            <h4 style="position: relative; left:90px; top:-50px; font-size:24px;">public</h4>
        </div>


        <div class="non-profit" style="position:relative; left:1140px; top:-1060px; width:260px; ">
            @if(number_format((($nonprofit[0]['value'] + $nonprofit[1]['value']) / 2), 0) <= 25)
                <img class="state-color-image" src="{{ public_path('red overall score.png') }}" alt="">
            @elseif(number_format((($nonprofit[0]['value'] + $nonprofit[1]['value']) / 2), 0) <= 50)
                <img class="state-color-image" src="{{ public_path('orange overall score.png') }}" alt="">
            @elseif(number_format((($nonprofit[0]['value'] + $nonprofit[1]['value']) / 2), 0) <= 80)
                <img class="state-color-image" src="{{ public_path('yellow overall score.png') }}" alt="">
            @else
                <img class="state-color-image" src="{{ public_path('top overall score.png') }}" alt="">
            @endif

            <div class="benchmark-data-public-score @if(number_format((($nonprofit[0]['value'] + $nonprofit[1]['value']) / 2), 0) <= 25) red-text @elseif(number_format((($nonprofit[0]['value'] + $nonprofit[1]['value']) / 2), 0) <= 50) orange-text @elseif(number_format((($nonprofit[0]['value'] + $nonprofit[1]['value']) / 2), 0) <= 80) yellow-text @else green-text @endif" style="position: relative; left:105px; top:-130px;">
            {{ number_format((($nonprofit[0]['value'] + $nonprofit[1]['value']) / 2), 0)}}
            </div>
            <h4 style="position: relative; left:90px; top:-50px; font-size:24px;">non-profit</h4>
        
        </div>

        <table style="position: relative; top:-1000px; font-size:22px;">
            <tr style="text-align: center;">
                <th>Indicator</th>
                <th>{{ $company->name;}}</th>
                <th>Private</th>
                <th>Public</th>
                <th>non-profit</th>
            </tr>
            <tr style="text-align: center;">
                <td>{{ $focus_result[1]['dimensional_results'][0]['key']; }}</td>
                <td class="@if(number_format($focus_result[1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[1]['dimensional_results'][0]['value'],0); }}</td>
                <td class="@if(number_format($private[1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($private[1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($private[1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($private[1]['dimensional_results'][0]['value'],0); }}</td>
                <td class="@if(number_format($public[1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($public[1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($public[1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($public[1]['dimensional_results'][0]['value'],0); }}</td>
                <td class="@if(number_format($nonprofit[1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($nonprofit[1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($nonprofit[1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($nonprofit[1]['dimensional_results'][0]['value'],0); }}</td>
            </tr>
            <tr style="text-align: center;">
                <td class="">{{ $focus_result[1]['dimensional_results'][1]['key']; }}</td>
                <td class="@if(number_format($focus_result[1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[1]['dimensional_results'][1]['value'],0); }}</td>
                <td class="@if(number_format($private[1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($private[1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($private[1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($private[1]['dimensional_results'][1]['value'],0); }}</td>
                <td class="@if(number_format($public[1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($public[1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($public[1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($public[1]['dimensional_results'][1]['value'],0); }}</td>
                <td class="@if(number_format($nonprofit[1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($nonprofit[1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($nonprofit[1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($nonprofit[1]['dimensional_results'][1]['value'],0); }}</td>
            </tr>
            <tr style="text-align: center;">
                <td class="">{{ $focus_result[1]['dimensional_results'][2]['key']; }}</td>
                <td class="@if(number_format($focus_result[1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[1]['dimensional_results'][2]['value'],0); }}</td>
                <td class="@if(number_format($private[1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($private[1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($private[1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($private[1]['dimensional_results'][2]['value'],0); }}</td>
                <td class="@if(number_format($public[1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($public[1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($public[1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($public[1]['dimensional_results'][2]['value'],0); }}</td>
                <td class="@if(number_format($nonprofit[1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($nonprofit[1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($nonprofit[1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($nonprofit[1]['dimensional_results'][2]['value'],0); }}</td>
            </tr>
            <tr style="text-align: center;">
                <td>{{ $focus_result[1]['dimensional_results'][3]['key']; }}</td>
                <td class="@if(number_format($focus_result[1]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[1]['dimensional_results'][3]['value'],0); }}</td>
                <td class="@if(number_format($private[1]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($private[1]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($private[1]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($private[1]['dimensional_results'][3]['value'],0); }}</td>
                <td class="@if(number_format($public[1]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($public[1]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($public[1]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($public[1]['dimensional_results'][3]['value'],0); }}</td>
                <td class="@if(number_format($nonprofit[1]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($nonprofit[1]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($nonprofit[1]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($nonprofit[1]['dimensional_results'][3]['value'],0); }}</td>
            </tr>
            <tr style="text-align: center;">
                <td>{{ $focus_result[0]['dimensional_results'][0]['key']; }}</td>
                <td class="@if(number_format($focus_result[0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[0]['dimensional_results'][0]['value'],0); }}</td>
                <td class="@if(number_format($private[0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($private[0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($private[0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($private[0]['dimensional_results'][0]['value'],0); }}</td>
                <td class="@if(number_format($public[0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($public[0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($public[0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($public[0]['dimensional_results'][0]['value'],0); }}</td>
                <td class="@if(number_format($nonprofit[0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($nonprofit[0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($nonprofit[0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($nonprofit[0]['dimensional_results'][0]['value'],0); }}</td>
            </tr>
            <tr style="text-align: center;">
                <td class="">{{ $focus_result[0]['dimensional_results'][1]['key']; }}</td>
                <td class="@if(number_format($focus_result[0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[0]['dimensional_results'][1]['value'],0); }}</td>
                <td class="@if(number_format($private[0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($private[0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($private[0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($private[0]['dimensional_results'][1]['value'],0); }}</td>
                <td class="@if(number_format($public[0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($public[0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($public[0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($public[0]['dimensional_results'][1]['value'],0); }}</td>
                <td class="@if(number_format($nonprofit[0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($nonprofit[0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($nonprofit[0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($nonprofit[0]['dimensional_results'][1]['value'],0); }}</td>
            </tr>
            <tr style="text-align: center;">
                <td>{{ $focus_result[0]['dimensional_results'][2]['key']; }}</td>
                <td class="@if(number_format($focus_result[0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[0]['dimensional_results'][2]['value'],0); }}</td>
                <td class="@if(number_format($private[0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($private[0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($private[0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($private[0]['dimensional_results'][2]['value'],0); }}</td>
                <td class="@if(number_format($public[0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($public[0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($public[0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($public[0]['dimensional_results'][2]['value'],0); }}</td>
                <td class="@if(number_format($nonprofit[0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($nonprofit[0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($nonprofit[0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($nonprofit[0]['dimensional_results'][2]['value'],0); }}</td>
            </tr>
            <tr style="text-align: center;">
                <td>{{ $focus_result[0]['dimensional_results'][3]['key']; }}</td>
                <td class="@if(number_format($focus_result[0]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[0]['dimensional_results'][3]['value'],0); }}</td>
                <td class="@if(number_format($private[0]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($private[0]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($private[0]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($private[0]['dimensional_results'][3]['value'],0); }}</td>
                <td class="@if(number_format($public[0]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($public[0]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($public[0]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($public[0]['dimensional_results'][3]['value'],0); }}</td>
                <td class="@if(number_format($nonprofit[0]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($nonprofit[0]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($nonprofit[0]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($nonprofit[0]['dimensional_results'][3]['value'],0); }}</td>
            </tr>
        </table>
        <div class="right-column-benchmark" style="display: table; font-size:20px;">
            <div style="display: table-cell; width: 33%; text-align:center">
                <div>{{$company->name; }} <span style="color: red; font-size: 24px"> VS </span> private</div>
                <div style="margin-top: 60px; width: 90%; background-color: #e0e0e0; border-radius: 5px;">
                    <div class="@if(number_format($focus_result[1]['dimensional_results'][0]['value'],0) > number_format($private[1]['dimensional_results'][0]['value'],0)) top-quartile @else bottom-quartile @endif" style="width: {{ abs(number_format($focus_result[1]['dimensional_results'][0]['value'],0) - number_format($private[1]['dimensional_results'][0]['value'],0)) }}%; height: 24px; border-radius: 5px; text-align: center;">
                    </div>
                </div>
                <div style="margin-top: 37px; width: 90%; background-color: #e0e0e0; border-radius: 5px;">
                    <div class="@if(number_format($focus_result[1]['dimensional_results'][1]['value'],0) > number_format($private[1]['dimensional_results'][1]['value'],0)) top-quartile @else bottom-quartile @endif" style="width: {{ abs(number_format($focus_result[1]['dimensional_results'][1]['value'],0) - number_format($private[1]['dimensional_results'][1]['value'],0)) }}%; height: 24px; border-radius: 5px; text-align: center;">
                    </div>
                </div>
                <div style="margin-top: 37px; width: 90%; background-color: #e0e0e0; border-radius: 5px;">
                    <div class="@if(number_format($focus_result[1]['dimensional_results'][2]['value'],0) > number_format($private[1]['dimensional_results'][2]['value'],0)) top-quartile @else bottom-quartile @endif" style="width: {{ abs(number_format($focus_result[1]['dimensional_results'][2]['value'],0) - number_format($private[1]['dimensional_results'][2]['value'],0)) }}%; height: 24px; border-radius: 5px; text-align: center;">
                    </div>
                </div>
                <div style="margin-top: 37px; width: 90%; background-color: #e0e0e0; border-radius: 5px;">
                    <div class="@if(number_format($focus_result[1]['dimensional_results'][3]['value'],0) > number_format($private[1]['dimensional_results'][3]['value'],0)) top-quartile @else bottom-quartile @endif" style="width: {{ abs(number_format($focus_result[1]['dimensional_results'][3]['value'],0) - number_format($private[1]['dimensional_results'][3]['value'],0)) }}%; height: 24px; border-radius: 5px; text-align: center;">
                    </div>
                </div>
                <div style="margin-top: 37px; width: 90%; background-color: #e0e0e0; border-radius: 5px;">
                    <div class="@if(number_format($focus_result[0]['dimensional_results'][0]['value'],0) > number_format($private[0]['dimensional_results'][0]['value'],0)) top-quartile @else bottom-quartile @endif" style="width: {{ abs(number_format($focus_result[0]['dimensional_results'][0]['value'],0) - number_format($private[0]['dimensional_results'][0]['value'],0)) }}%; height: 24px; border-radius: 5px; text-align: center;">
                    </div>
                </div>
                <div style="margin-top: 37px; width: 90%; background-color: #e0e0e0; border-radius: 5px;">
                    <div class="@if(number_format($focus_result[0]['dimensional_results'][1]['value'],0) > number_format($private[0]['dimensional_results'][1]['value'],0)) top-quartile @else bottom-quartile @endif" style="width: {{ abs(number_format($focus_result[0]['dimensional_results'][1]['value'],0) - number_format($private[0]['dimensional_results'][1]['value'],0)) }}%; height: 24px; border-radius: 5px; text-align: center;">
                    </div>
                </div>
                <div style="margin-top: 37px; width: 90%; background-color: #e0e0e0; border-radius: 5px;">
                    <div class="@if(number_format($focus_result[0]['dimensional_results'][2]['value'],0) > number_format($private[0]['dimensional_results'][2]['value'],0)) top-quartile @else bottom-quartile @endif" style="width: {{ abs(number_format($focus_result[0]['dimensional_results'][2]['value'],0) - number_format($private[0]['dimensional_results'][2]['value'],0)) }}%; height: 24px; border-radius: 5px; text-align: center;">
                    </div>
                </div>
                <div style="margin-top: 37px; width: 90%; background-color: #e0e0e0; border-radius: 5px;">
                    <div class="@if(number_format($focus_result[0]['dimensional_results'][3]['value'],0) > number_format($private[0]['dimensional_results'][3]['value'],0)) top-quartile @else bottom-quartile @endif" style="width: {{ abs(number_format($focus_result[0]['dimensional_results'][3]['value'],0) - number_format($private[0]['dimensional_results'][3]['value'],0)) }}%; height: 24px; border-radius: 5px; text-align: center;">
                    </div>
                </div>
            </div>
            <div style="display: table-cell; width: 33%; text-align:center">
                <div>{{$company->name; }} <span style="color:red; font-size: 24px"> VS </span> public</div>
                <div style="margin-top: 60px; width: 90%; background-color: #e0e0e0; border-radius: 5px;">
                    <div class="@if(number_format($focus_result[1]['dimensional_results'][0]['value'],0) > number_format($public[1]['dimensional_results'][0]['value'],0)) top-quartile @else bottom-quartile @endif" style="width: {{ abs(number_format($focus_result[1]['dimensional_results'][0]['value'],0) - number_format($public[1]['dimensional_results'][0]['value'],0)) }}%; height: 24px; border-radius: 5px; text-align: center;">
                    </div>
                </div>
                <div style="margin-top: 37px; width: 90%; background-color: #e0e0e0; border-radius: 5px;">
                    <div class="@if(number_format($focus_result[1]['dimensional_results'][1]['value'],0) > number_format($public[1]['dimensional_results'][1]['value'],0)) top-quartile @else bottom-quartile @endif" style="width: {{ abs(number_format($focus_result[1]['dimensional_results'][1]['value'],0) - number_format($public[1]['dimensional_results'][1]['value'],0)) }}%; height: 24px; border-radius: 5px; text-align: center;">
                    </div>
                </div>
                <div style="margin-top: 37px; width: 90%; background-color: #e0e0e0; border-radius: 5px;">
                    <div class="@if(number_format($focus_result[1]['dimensional_results'][2]['value'],0) > number_format($public[1]['dimensional_results'][2]['value'],0)) top-quartile @else bottom-quartile @endif" style="width: {{ abs(number_format($focus_result[1]['dimensional_results'][2]['value'],0) - number_format($public[1]['dimensional_results'][2]['value'],0)) }}%; height: 24px; border-radius: 5px; text-align: center;">
                    </div>
                </div>
                <div style="margin-top: 37px; width: 90%; background-color: #e0e0e0; border-radius: 5px;">
                    <div class="@if(number_format($focus_result[1]['dimensional_results'][3]['value'],0) > number_format($public[1]['dimensional_results'][3]['value'],0)) top-quartile @else bottom-quartile @endif" style="width: {{ abs(number_format($focus_result[1]['dimensional_results'][3]['value'],0) - number_format($public[1]['dimensional_results'][3]['value'],0)) }}%; height: 24px; border-radius: 5px; text-align: center;">
                    </div>
                </div>
                <div style="margin-top: 37px; width: 90%; background-color: #e0e0e0; border-radius: 5px;">
                    <div class="@if(number_format($focus_result[0]['dimensional_results'][0]['value'],0) > number_format($public[0]['dimensional_results'][0]['value'],0)) top-quartile @else bottom-quartile @endif" style="width: {{ abs(number_format($focus_result[0]['dimensional_results'][0]['value'],0) - number_format($public[0]['dimensional_results'][0]['value'],0)) }}%; height: 24px; border-radius: 5px; text-align: center;">
                    </div>
                </div>
                <div style="margin-top: 37px; width: 90%; background-color: #e0e0e0; border-radius: 5px;">
                    <div class="@if(number_format($focus_result[0]['dimensional_results'][1]['value'],0) > number_format($public[0]['dimensional_results'][1]['value'],0)) top-quartile @else bottom-quartile @endif" style="width: {{ abs(number_format($focus_result[0]['dimensional_results'][1]['value'],0) - number_format($public[0]['dimensional_results'][1]['value'],0)) }}%; height: 24px; border-radius: 5px; text-align: center;">
                    </div>
                </div>
                <div style="margin-top: 37px; width: 90%; background-color: #e0e0e0; border-radius: 5px;">
                    <div class="@if(number_format($focus_result[0]['dimensional_results'][2]['value'],0) > number_format($public[0]['dimensional_results'][2]['value'],0)) top-quartile @else bottom-quartile @endif" style="width: {{ abs(number_format($focus_result[0]['dimensional_results'][2]['value'],0) - number_format($public[0]['dimensional_results'][2]['value'],0)) }}%; height: 24px; border-radius: 5px; text-align: center;">
                    </div>
                </div>
                <div style="margin-top: 37px; width: 90%; background-color: #e0e0e0; border-radius: 5px;">
                    <div class="@if(number_format($focus_result[0]['dimensional_results'][3]['value'],0) > number_format($public[0]['dimensional_results'][3]['value'],0)) top-quartile @else bottom-quartile @endif" style="width: {{ abs(number_format($focus_result[0]['dimensional_results'][3]['value'],0) - number_format($public[0]['dimensional_results'][3]['value'],0)) }}%; height: 24px; border-radius: 5px; text-align: center;">
                    </div>
                </div>
            </div>
            <div style="display: table-cell; width: 33%; text-align:center">
                <div>{{$company->name; }} <span style="color: red; font-size: 24px;"> VS </span> non-profit</div>
                <div style="margin-top: 60px; width: 90%; background-color: #e0e0e0; border-radius: 5px;">
                    <div class="@if(number_format($focus_result[1]['dimensional_results'][0]['value'],0) > number_format($nonprofit[1]['dimensional_results'][0]['value'],0)) top-quartile @else bottom-quartile @endif" style="width: {{ abs(number_format($focus_result[1]['dimensional_results'][0]['value'],0) - number_format($nonprofit[1]['dimensional_results'][0]['value'],0)) }}%; height: 24px; border-radius: 5px; text-align: center;">
                    </div>
                </div>
                <div style="margin-top: 37px; width: 90%; background-color: #e0e0e0; border-radius: 5px;">
                    <div class="@if(number_format($focus_result[1]['dimensional_results'][1]['value'],0) > number_format($nonprofit[1]['dimensional_results'][1]['value'],0)) top-quartile @else bottom-quartile @endif" style="width: {{ abs(number_format($focus_result[1]['dimensional_results'][1]['value'],0) - number_format($nonprofit[1]['dimensional_results'][1]['value'],0)) }}%; height: 24px; border-radius: 5px; text-align: center;">
                    </div>
                </div>
                <div style="margin-top: 37px; width: 90%; background-color: #e0e0e0; border-radius: 5px;">
                    <div class="@if(number_format($focus_result[1]['dimensional_results'][2]['value'],0) > number_format($nonprofit[1]['dimensional_results'][2]['value'],0)) top-quartile @else bottom-quartile @endif" style="width: {{ abs(number_format($focus_result[1]['dimensional_results'][2]['value'],0) - number_format($nonprofit[1]['dimensional_results'][2]['value'],0)) }}%; height: 24px; border-radius: 5px; text-align: center;">
                    </div>
                </div>
                <div style="margin-top: 37px; width: 90%; background-color: #e0e0e0; border-radius: 5px;">
                    <div class="@if(number_format($focus_result[1]['dimensional_results'][3]['value'],0) > number_format($nonprofit[1]['dimensional_results'][3]['value'],0)) top-quartile @else bottom-quartile @endif" style="width: {{ abs(number_format($focus_result[1]['dimensional_results'][3]['value'],0) - number_format($nonprofit[1]['dimensional_results'][3]['value'],0)) }}%; height: 24px; border-radius: 5px; text-align: center;">
                    </div>
                </div>
                <div style="margin-top: 37px; width: 90%; background-color: #e0e0e0; border-radius: 5px;">
                    <div class="@if(number_format($focus_result[0]['dimensional_results'][0]['value'],0) > number_format($nonprofit[0]['dimensional_results'][0]['value'],0)) top-quartile @else bottom-quartile @endif" style="width: {{ abs(number_format($focus_result[0]['dimensional_results'][0]['value'],0) - number_format($nonprofit[0]['dimensional_results'][0]['value'],0)) }}%; height: 24px; border-radius: 5px; text-align: center;">
                    </div>
                </div>
                <div style="margin-top: 37px; width: 90%; background-color: #e0e0e0; border-radius: 5px;">
                    <div class="@if(number_format($focus_result[0]['dimensional_results'][1]['value'],0) > number_format($nonprofit[0]['dimensional_results'][1]['value'],0)) top-quartile @else bottom-quartile @endif" style="width: {{ abs(number_format($focus_result[0]['dimensional_results'][1]['value'],0) - number_format($nonprofit[0]['dimensional_results'][1]['value'],0)) }}%; height: 24px; border-radius: 5px; text-align: center;">
                    </div>
                </div>
                <div style="margin-top: 37px; width: 90%; background-color: #e0e0e0; border-radius: 5px;">
                    <div class="@if(number_format($focus_result[0]['dimensional_results'][2]['value'],0) > number_format($nonprofit[0]['dimensional_results'][2]['value'],0)) top-quartile @else bottom-quartile @endif" style="width: {{ abs(number_format($focus_result[0]['dimensional_results'][2]['value'],0) - number_format($nonprofit[0]['dimensional_results'][2]['value'],0)) }}%; height: 24px; border-radius: 5px; text-align: center;">
                    </div>
                </div>
                <div style="margin-top: 37px; width: 90%; background-color: #e0e0e0; border-radius: 5px;">
                    <div class="@if(number_format($focus_result[0]['dimensional_results'][3]['value'],0) > number_format($nonprofit[0]['dimensional_results'][3]['value'],0)) top-quartile @else bottom-quartile @endif" style="width: {{ abs(number_format($focus_result[0]['dimensional_results'][3]['value'],0) - number_format($nonprofit[0]['dimensional_results'][3]['value'],0)) }}%; height: 24px; border-radius: 5px; text-align: center;">
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    
        <div class="ohx-ray-insights">
            <div class="left-column-demo-image">
                <h1 style="font-size: 60px;">04</h1>
                <h4 style="font-size: 20px">{{ $company->name }}</h4>
                <h4 style="font-size: 20px">OHX-RAY <br> INSIGHTS</h4>
            </div>
            <div class="right-column-demo-image">
                <img class="ohx-ray-insights-image" src=" {{ public_path('ohx-ray-insights.png') }}" alt="ohx-ray-insights">
            </div>
        </div>

        <div class="ohx-ray-gender-insights">
            <img class="ohx-ray-gender-insights-image" src=" {{ public_path('ohx-ray-gender.png') }}" alt="ohx-ray-insights" >
        </div>

        <div class="organization-results-male-health">
            <p class="center-title title">MALE HEALTH IMAGE</p>
            <div class="organization-results-container">
                @if(number_format((($focus_result_male[0]['value'] + $focus_result_male[1]['value']) / 2), 0) <= 25)
                    <p class="quartile-orgnaztion-details bottom-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_male[0]['value'] + $focus_result_male[1]['value']) / 2), 0)}}</span></p>
                @elseif(number_format((($focus_result_male[0]['value'] + $focus_result_male[1]['value']) / 2), 0) <= 50)
                    <p class="quartile-orgnaztion-details third-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_male[0]['value'] + $focus_result_male[1]['value']) / 2), 0)}}</span></p>
                @elseif(number_format((($focus_result_male[0]['value'] + $focus_result_male[1]['value']) / 2), 0) <= 80)
                    <p class="quartile-orgnaztion-details second-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_male[0]['value'] + $focus_result_male[1]['value']) / 2), 0)}}</span></p>
                @else
                    <p class="quartile-orgnaztion-details top-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_male[0]['value'] + $focus_result_male[1]['value']) / 2), 0)}}</span></p>
                @endif
        
                @if(number_format((($focus_result_male[0]['value'] + $focus_result_male[1]['value']) / 2), 0) <= 25)
                    <p class="quartile-orgnaztion-details bottom-quartile organization-results-quartile"><span class="quartile-first-part">BOTTOM</span> <span class="quartile-second-part">QUARTILE</span></p>
                @elseif(number_format((($focus_result_male[0]['value'] + $focus_result_male[1]['value']) / 2), 0) <= 50)
                    <p class="quartile-orgnaztion-details third-quartile organization-results-quartile"><span class="quartile-first-part">THIRD</span> <span class="quartile-second-part">QUARTILE</span></p>
                @elseif(number_format((($focus_result_male[0]['value'] + $focus_result_male[1]['value']) / 2), 0) <= 80)
                    <p class="quartile-orgnaztion-details second-quartile organization-results-quartile"><span class="quartile-first-part">SECOND</span> <span class="quartile-second-part">QUARTILE</span></p>
                @else
                    <p class="quartile-orgnaztion-details top-quartile organization-results-quartile"><span class="quartile-first-part">TOP</span> <br> <span class="quartile-second-part">QUARTILE</span></p>
                @endif

                <div class="quartile-orgnaztion-details-left-column" style="background-color: white">
                    @if(number_format((($focus_result_male[0]['value'] + $focus_result_male[1]['value']) / 2), 0) <= 25)
                        <img class="state-color-image" src="{{ public_path('red overall score.png') }}" alt="">
                    @elseif(number_format((($focus_result_male[0]['value'] + $focus_result_male[1]['value']) / 2), 0) <= 50)
                        <img class="state-color-image" src="{{ public_path('orange overall score.png') }}" alt="">
                    @elseif(number_format((($focus_result_male[0]['value'] + $focus_result_male[1]['value']) / 2), 0) <= 80)
                        <img class="state-color-image" src="{{ public_path('yellow overall score.png') }}" alt="">
                    @else
                        <img class="state-color-image" src="{{ public_path('top overall score.png') }}" alt="">
                    @endif
                    <img class="stats-picture" src=" {{public_path('male health.png')}}" alt="">
                </div>

                    <!-- Start of External -->
                <div class="quartile-orgnaztion-details-right-column">
                    <div class="inside-focus-result">
                        <div class="inside-focus-result-header @if($focus_result_male[1]['value'] <= 25) bottom-quartile @elseif($focus_result_male[1]['value'] <= 50) third-quartile @elseif($focus_result_male[1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <h3 class="inside-focus-result-header-text">INSIDE</h3>
                            <h3 class="inside-focus-result-header-number">{{number_format($focus_result_male[1]['value'],0);}}</h3>
                        </div>
                        <div class="inside-focus-result-accountability @if($focus_result_male[1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_male[1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_male[1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-accountability-text">{{ $focus_result_male[1]['dimensional_results'][0]['key']; }}</p>
                            <p class="inside-focuse-result-accountability-number">{{ number_format($focus_result_male[1]['dimensional_results'][0]['value'] ,0); }}</p>
                        </div>
                        <div class="inside-focus-result-leadership @if($focus_result_male[1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_male[1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_male[1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-leadership-text">{{ $focus_result_male[1]['dimensional_results'][1]['key']; }}</p>
                            <p class="inside-focus-result-leadership-number">{{ number_format($focus_result_male[1]['dimensional_results'][1]['value'] ,0) }}</p>
                        </div>
                        <div>
                            <div class="responsibilities @if($focus_result_male[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_male[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_male[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="responsibilities-text">{{ $focus_result_male[1]['dimensional_results'][0]['dimensional_results'][0]['key']; }}<span class="responsibilities-number">{{ number_format($focus_result_male[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="trustworthiness @if($focus_result_male[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_male[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_male[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="turstworthiness-text">{{ $focus_result_male[1]['dimensional_results'][0]['dimensional_results'][1]['key']; }}<span class="turstworthiness-number">{{ number_format($focus_result_male[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</span></p>
                            </div>
                            <div class="commitment @if($focus_result_male[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_male[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_male[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="commitment-text">{{ $focus_result_male[1]['dimensional_results'][0]['dimensional_results'][2]['key']; }} <span class="commitment-number">{{ number_format($focus_result_male[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="democratic @if($focus_result_male[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_male[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_male[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="democratic-text">{{ $focus_result_male[1]['dimensional_results'][1]['dimensional_results'][0]['key']; }}  <span class="democratic-number">{{  number_format($focus_result_male[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0); }}</span> </p>
                            </div>
                            <div class="autocratic @if($focus_result_male[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_male[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_male[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="autocratic-text">{{ $focus_result_male[1]['dimensional_results'][1]['dimensional_results'][1]['key']; }} <span class="autocratic-number">{{  number_format($focus_result_male[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="transformational @if($focus_result_male[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_male[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_male[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="transformational-text">{{ $focus_result_male[1]['dimensional_results'][1]['dimensional_results'][2]['key']; }} <span class="transformational-number">{{  number_format($focus_result_male[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div class="inside-focus-result-working-environment  @if($focus_result_male[1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_male[1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_male[1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-working-environment-text">{{ $focus_result_male[1]['dimensional_results'][2]['key']; }}</p>
                            <p class="inside-focus-result-working-environment-number">{{ number_format($focus_result_male[1]['dimensional_results'][2]['value'],0); }}</p>
                        </div>
                        <div class="inside-focus-result-motivation @if($focus_result_male[1]['dimensional_results'][3]['value'] <= 25) bottom-quartile @elseif($focus_result_male[1]['dimensional_results'][3]['value'] <= 50) third-quartile @elseif($focus_result_male[1]['dimensional_results'][3]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-motivation-text">{{ $focus_result_male[1]['dimensional_results'][3]['key']; }}</p>
                            <p class="inside-focus-result-motivation-number">{{ number_format($focus_result_male[1]['dimensional_results'][3]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="trusting @if($focus_result_male[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_male[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_male[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="trusting-text">{{ $focus_result_male[1]['dimensional_results'][2]['dimensional_results'][0]['key']; }} <span class="trusting-number">{{ number_format($focus_result_male[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="fairness @if($focus_result_male[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_male[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_male[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="fairness-text">{{ $focus_result_male[1]['dimensional_results'][2]['dimensional_results'][1]['key']; }} <span class="fairness-number">{{ number_format($focus_result_male[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="respect @if($focus_result_male[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_male[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_male[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="respect-text">{{ $focus_result_male[1]['dimensional_results'][2]['dimensional_results'][2]['key']; }} <span class="respect-number">{{ number_format($focus_result_male[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="reward @if($focus_result_male[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_male[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_male[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="reward-text">{{ $focus_result_male[1]['dimensional_results'][3]['dimensional_results'][0]['key']; }} <span class="reward-number">{{ number_format($focus_result_male[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="inspire @if($focus_result_male[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_male[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_male[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="inspire-text">{{$focus_result_male[1]['dimensional_results'][3]['dimensional_results'][1]['key']; }}<span class="inspire-number">{{number_format($focus_result_male[1]['dimensional_results'][3]['dimensional_results'][1]['value'] ,0);}}</span></p>
                            </div>
                            <div class="recognition @if($focus_result_male[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_male[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_male[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="recognition-text">{{$focus_result_male[1]['dimensional_results'][3]['dimensional_results'][2]['key']; }} <span class="recognition-number">{{number_format($focus_result_male[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="outside-focus-result">
                        <div class="inside-focus-result-header @if($focus_result_male[0]['value'] <= 25) bottom-quartile @elseif($focus_result_male[0]['value'] <= 50) third-quartile @elseif($focus_result_male[0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <h3 class="inside-focus-result-header-text">OUTSIDE</h3>
                            <h3 class="inside-focus-result-header-number">{{ number_format($focus_result_male[0]['value'],0); }}</h3>
                        </div>
                        <div class="inside-focus-result-accountability @if($focus_result_male[0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_male[0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_male[0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-accountability-text">{{ $focus_result_male[0]['dimensional_results'][0]['key']; }}</p>
                            <p class="inside-focuse-result-accountability-number">{{ number_format($focus_result_male[0]['dimensional_results'][0]['value'],0);}}</p>
                        </div>
                        <div class="inside-focus-result-leadership @if($focus_result_male[0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_male[0]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_male[0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-leadership-text">{{ $focus_result_male[0]['dimensional_results'][1]['key']; }}</p>
                            <p class="inside-focus-result-leadership-number">{{ number_format($focus_result_male[0]['dimensional_results'][1]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="responsibilities @if($focus_result_male[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_male[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_male[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="responsibilities-text">{{ $focus_result_male[0]['dimensional_results'][0]['dimensional_results'][0]['key']; }}<span class="responsibilities-number" style="margin-left:110px">{{number_format($focus_result_male[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="trustworthiness @if($focus_result_male[0]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_male[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_male[0]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="turstworthiness-text">{{ $focus_result_male[0]['dimensional_results'][0]['dimensional_results'][1]['key']; }}<span class="turstworthiness-number" style="margin-left:110px">{{number_format($focus_result_male[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="commitment @if($focus_result_male[0]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_male[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_male[0]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="commitment-text">{{ $focus_result_male[0]['dimensional_results'][0]['dimensional_results'][2]['key']; }} <span class="commitment-number" style="margin-left:90px">{{ number_format($focus_result_male[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="democratic @if($focus_result_male[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_male[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_male[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="democratic-text">{{ $focus_result_male[0]['dimensional_results'][1]['dimensional_results'][0]['key']; }}  <span class="democratic-number" style="margin-left:80px">{{ number_format($focus_result_male[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0); }}</span> </p>
                            </div>
                            <div class="autocratic @if($focus_result_male[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_male[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_male[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="autocratic-text">{{$focus_result_male[0]['dimensional_results'][1]['dimensional_results'][1]['key'];}} <span class="autocratic-number" style="margin-left:80px">{{ number_format($focus_result_male[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="transformational @if($focus_result_male[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_male[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_male[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="transformational-text">{{$focus_result_male[0]['dimensional_results'][1]['dimensional_results'][2]['key'] }}<span class="transformational-number" style="margin-left: 90px;">{{ number_format($focus_result_male[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div class="inside-focus-result-working-environment @if($focus_result_male[0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_male[0]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_male[0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-working-environment-text">External <br> Relation</p>
                            <p class="inside-focus-result-working-environment-number">{{number_format($focus_result_male[0]['dimensional_results'][2]['value'],0) }}</p>
                        </div>
                        <div class="inside-focus-result-motivation @if($focus_result_male[0]['dimensional_results'][3]['value'] <= 25) bottom-quartile @elseif($focus_result_male[0]['dimensional_results'][3]['value'] <= 50) third-quartile @elseif($focus_result_male[0]['dimensional_results'][3]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-motivation-text">{{$focus_result_male[0]['dimensional_results'][3]['key'] }}</p>
                            <p class="inside-focus-result-motivation-number">{{number_format($focus_result_male[0]['dimensional_results'][3]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="trusting @if($focus_result_male[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_male[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_male[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="trusting-text">{{ $focus_result_male[0]['dimensional_results'][2]['dimensional_results'][0]['key']; }}<span class="trusting-number" style="margin-left:90px">{{number_format($focus_result_male[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="fairness  @if($focus_result_male[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_male[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_male[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="fairness-text">{{ $focus_result_male[0]['dimensional_results'][2]['dimensional_results'][1]['key']; }} <span class="fairness-number" style="margin-left:75px">{{ number_format($focus_result_male[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="respect  @if($focus_result_male[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_male[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_male[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="respect-text">{{ $focus_result_male[0]['dimensional_results'][2]['dimensional_results'][2]['key']; }} <span class="respect-number">{{ number_format($focus_result_male[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="reward @if($focus_result_male[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_male[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_male[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="reward-text">{{ $focus_result_male[0]['dimensional_results'][3]['dimensional_results'][0]['key'];}} <span class="reward-number" style="margin-left: 110px;">{{ number_format($focus_result_male[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="inspire @if($focus_result_male[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_male[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_male[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="inspire-text">{{ $focus_result_male[0]['dimensional_results'][3]['dimensional_results'][1]['key']; }} <span class="inspire-number" style="margin-left: 90px;">{{ number_format($focus_result_male[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</span></p>
                            </div>
                            <div class="recognition @if($focus_result_male[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_male[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_male[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="recognition-text">{{ $focus_result_male[0]['dimensional_results'][3]['dimensional_results'][2]['key'];}} <span class="recognition-number" style="margin-left: 70px;">{{ number_format($focus_result_male[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</span></p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="quadrants" style="position: relative; top: -950px;">
                <span class="scale">Scale:</span>
                <div>
                    <span class="quadrant top-quartile"></span>
                    <span class="text-for-quartile">TOP QUARTILE</span>
                    <span class="quadrant second-quartile"></span>
                    <span class="text-for-quartile">SECOND QUARTILE</span>
                    <span class="quadrant third-quartile"></span>
                    <span class="text-for-quartile">THIRD QUARTILE</span>
                    <span class="quadrant bottom-quartile"></span>
                    <span class="text-for-quartile">BOTTOM QUARTILE</span>
                </div>
            </div>
        
        </div>  

        <div class="organization-results-male-health" style="position: relative; top: 2500px;">
            <p class="center-title title">FEMALE HEALTH IMAGE</p>
            <div class="organization-results-container">
                @if(number_format((($focus_result_female[0]['value'] + $focus_result_female[1]['value']) / 2), 0) <= 25)
                    <p class="quartile-orgnaztion-details bottom-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_female[0]['value'] + $focus_result_female[1]['value']) / 2), 0)}}</span></p>
                @elseif(number_format((($focus_result_female[0]['value'] + $focus_result_female[1]['value']) / 2), 0) <= 50)
                    <p class="quartile-orgnaztion-details third-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_female[0]['value'] + $focus_result_female[1]['value']) / 2), 0)}}</span></p>
                @elseif(number_format((($focus_result_female[0]['value'] + $focus_result_female[1]['value']) / 2), 0) <= 80)
                    <p class="quartile-orgnaztion-details second-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_female[0]['value'] + $focus_result_female[1]['value']) / 2), 0)}}</span></p>
                @else
                    <p class="quartile-orgnaztion-details top-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_female[0]['value'] + $focus_result_female[1]['value']) / 2), 0)}}</span></p>
                @endif
        
                @if(number_format((($focus_result_female[0]['value'] + $focus_result_female[1]['value']) / 2), 0) <= 25)
                    <p class="quartile-orgnaztion-details bottom-quartile organization-results-quartile"><span class="quartile-first-part">BOTTOM</span> <span class="quartile-second-part">QUARTILE</span></p>
                @elseif(number_format((($focus_result_female[0]['value'] + $focus_result_female[1]['value']) / 2), 0) <= 50)
                    <p class="quartile-orgnaztion-details third-quartile organization-results-quartile"><span class="quartile-first-part">THIRD</span> <span class="quartile-second-part">QUARTILE</span></p>
                @elseif(number_format((($focus_result_female[0]['value'] + $focus_result_female[1]['value']) / 2), 0) <= 80)
                    <p class="quartile-orgnaztion-details second-quartile organization-results-quartile"><span class="quartile-first-part">SECOND</span> <span class="quartile-second-part">QUARTILE</span></p>
                @else
                    <p class="quartile-orgnaztion-details top-quartile organization-results-quartile"><span class="quartile-first-part">TOP</span> <br> <span class="quartile-second-part">QUARTILE</span></p>
                @endif

                <div class="quartile-orgnaztion-details-left-column" style="background-color: white">
                    @if(number_format((($focus_result_female[0]['value'] + $focus_result_female[1]['value']) / 2), 0) <= 25)
                        <img class="state-color-image" src="{{ public_path('red overall score.png') }}" alt="">
                    @elseif(number_format((($focus_result_female[0]['value'] + $focus_result_female[1]['value']) / 2), 0) <= 50)
                        <img class="state-color-image" src="{{ public_path('orange overall score.png') }}" alt="">
                    @elseif(number_format((($focus_result_female[0]['value'] + $focus_result_female[1]['value']) / 2), 0) <= 80)
                        <img class="state-color-image" src="{{ public_path('yellow overall score.png') }}" alt="">
                    @else
                        <img class="state-color-image" src="{{ public_path('top overall score.png') }}" alt="">
                    @endif
                    <img class="stats-picture" src=" {{public_path('female health.png')}}" alt="">
                </div>

                    <!-- Start of External -->
                <div class="quartile-orgnaztion-details-right-column">
                    <div class="inside-focus-result">
                        <div class="inside-focus-result-header @if($focus_result_female[1]['value'] <= 25) bottom-quartile @elseif($focus_result_female[1]['value'] <= 50) third-quartile @elseif($focus_result_female[1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <h3 class="inside-focus-result-header-text">INSIDE</h3>
                            <h3 class="inside-focus-result-header-number">{{number_format($focus_result_female[1]['value'],0);}}</h3>
                        </div>
                        <div class="inside-focus-result-accountability @if($focus_result_female[1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_female[1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_female[1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-accountability-text">{{ $focus_result_female[1]['dimensional_results'][0]['key']; }}</p>
                            <p class="inside-focuse-result-accountability-number">{{ number_format($focus_result_female[1]['dimensional_results'][0]['value'] ,0); }}</p>
                        </div>
                        <div class="inside-focus-result-leadership @if($focus_result_female[1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_female[1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_female[1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-leadership-text">{{ $focus_result_female[1]['dimensional_results'][1]['key']; }}</p>
                            <p class="inside-focus-result-leadership-number">{{ number_format($focus_result_female[1]['dimensional_results'][1]['value'] ,0) }}</p>
                        </div>
                        <div>
                            <div class="responsibilities @if($focus_result_female[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_female[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_female[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="responsibilities-text">{{ $focus_result_female[1]['dimensional_results'][0]['dimensional_results'][0]['key']; }}<span class="responsibilities-number">{{ number_format($focus_result_female[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="trustworthiness @if($focus_result_female[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_female[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_female[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="turstworthiness-text">{{ $focus_result_female[1]['dimensional_results'][0]['dimensional_results'][1]['key']; }}<span class="turstworthiness-number">{{ number_format($focus_result_female[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</span></p>
                            </div>
                            <div class="commitment @if($focus_result_female[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_female[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_female[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="commitment-text">{{ $focus_result_female[1]['dimensional_results'][0]['dimensional_results'][2]['key']; }} <span class="commitment-number">{{ number_format($focus_result_female[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="democratic @if($focus_result_female[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_female[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_female[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="democratic-text">{{ $focus_result_female[1]['dimensional_results'][1]['dimensional_results'][0]['key']; }}  <span class="democratic-number">{{  number_format($focus_result_female[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0); }}</span> </p>
                            </div>
                            <div class="autocratic @if($focus_result_female[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_female[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_female[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="autocratic-text">{{ $focus_result_female[1]['dimensional_results'][1]['dimensional_results'][1]['key']; }} <span class="autocratic-number">{{  number_format($focus_result_female[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="transformational @if($focus_result_female[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_female[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_female[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="transformational-text">{{ $focus_result_female[1]['dimensional_results'][1]['dimensional_results'][2]['key']; }} <span class="transformational-number">{{  number_format($focus_result_female[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div class="inside-focus-result-working-environment  @if($focus_result_female[1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_female[1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_female[1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-working-environment-text">{{ $focus_result_female[1]['dimensional_results'][2]['key']; }}</p>
                            <p class="inside-focus-result-working-environment-number">{{ number_format($focus_result_female[1]['dimensional_results'][2]['value'],0); }}</p>
                        </div>
                        <div class="inside-focus-result-motivation @if($focus_result_female[1]['dimensional_results'][3]['value'] <= 25) bottom-quartile @elseif($focus_result_female[1]['dimensional_results'][3]['value'] <= 50) third-quartile @elseif($focus_result_female[1]['dimensional_results'][3]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-motivation-text">{{ $focus_result_female[1]['dimensional_results'][3]['key']; }}</p>
                            <p class="inside-focus-result-motivation-number">{{ number_format($focus_result_female[1]['dimensional_results'][3]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="trusting @if($focus_result_female[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_female[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_female[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="trusting-text">{{ $focus_result_female[1]['dimensional_results'][2]['dimensional_results'][0]['key']; }} <span class="trusting-number">{{ number_format($focus_result_female[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="fairness @if($focus_result_female[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_female[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_female[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="fairness-text">{{ $focus_result_female[1]['dimensional_results'][2]['dimensional_results'][1]['key']; }} <span class="fairness-number">{{ number_format($focus_result_female[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="respect @if($focus_result_female[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_female[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_female[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="respect-text">{{ $focus_result_female[1]['dimensional_results'][2]['dimensional_results'][2]['key']; }} <span class="respect-number">{{ number_format($focus_result_female[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="reward @if($focus_result_female[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_female[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_female[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="reward-text">{{ $focus_result_female[1]['dimensional_results'][3]['dimensional_results'][0]['key']; }} <span class="reward-number">{{ number_format($focus_result_female[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="inspire @if($focus_result_female[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_female[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_female[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="inspire-text">{{$focus_result_female[1]['dimensional_results'][3]['dimensional_results'][1]['key']; }}<span class="inspire-number">{{number_format($focus_result_female[1]['dimensional_results'][3]['dimensional_results'][1]['value'] ,0);}}</span></p>
                            </div>
                            <div class="recognition @if($focus_result_female[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_female[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_female[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="recognition-text">{{$focus_result_female[1]['dimensional_results'][3]['dimensional_results'][2]['key']; }} <span class="recognition-number">{{number_format($focus_result_female[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="outside-focus-result">
                        <div class="inside-focus-result-header @if($focus_result_female[0]['value'] <= 25) bottom-quartile @elseif($focus_result_female[0]['value'] <= 50) third-quartile @elseif($focus_result_female[0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <h3 class="inside-focus-result-header-text">OUTSIDE</h3>
                            <h3 class="inside-focus-result-header-number">{{ number_format($focus_result_female[0]['value'],0); }}</h3>
                        </div>
                        <div class="inside-focus-result-accountability @if($focus_result_female[0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_female[0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_female[0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-accountability-text">{{ $focus_result_female[0]['dimensional_results'][0]['key']; }}</p>
                            <p class="inside-focuse-result-accountability-number">{{ number_format($focus_result_female[0]['dimensional_results'][0]['value'],0);}}</p>
                        </div>
                        <div class="inside-focus-result-leadership @if($focus_result_female[0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_female[0]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_female[0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-leadership-text">{{ $focus_result_female[0]['dimensional_results'][1]['key']; }}</p>
                            <p class="inside-focus-result-leadership-number">{{ number_format($focus_result_female[0]['dimensional_results'][1]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="responsibilities @if($focus_result_female[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_female[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_female[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="responsibilities-text">{{ $focus_result_female[0]['dimensional_results'][0]['dimensional_results'][0]['key']; }}<span class="responsibilities-number" style="margin-left:110px">{{number_format($focus_result_female[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="trustworthiness @if($focus_result_female[0]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_female[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_female[0]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="turstworthiness-text">{{ $focus_result_female[0]['dimensional_results'][0]['dimensional_results'][1]['key']; }}<span class="turstworthiness-number" style="margin-left:110px">{{number_format($focus_result_female[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="commitment @if($focus_result_female[0]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_female[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_female[0]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="commitment-text">{{ $focus_result_female[0]['dimensional_results'][0]['dimensional_results'][2]['key']; }} <span class="commitment-number" style="margin-left:90px">{{ number_format($focus_result_female[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="democratic @if($focus_result_female[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_female[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_female[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="democratic-text">{{ $focus_result_female[0]['dimensional_results'][1]['dimensional_results'][0]['key']; }}  <span class="democratic-number" style="margin-left:80px">{{ number_format($focus_result_female[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0); }}</span> </p>
                            </div>
                            <div class="autocratic @if($focus_result_female[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_female[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_female[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="autocratic-text">{{$focus_result_female[0]['dimensional_results'][1]['dimensional_results'][1]['key'];}} <span class="autocratic-number" style="margin-left:80px">{{ number_format($focus_result_female[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="transformational @if($focus_result_female[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_female[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_female[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="transformational-text">{{$focus_result_female[0]['dimensional_results'][1]['dimensional_results'][2]['key'] }}<span class="transformational-number" style="margin-left: 90px;">{{ number_format($focus_result_female[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div class="inside-focus-result-working-environment @if($focus_result_female[0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_female[0]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_female[0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-working-environment-text">External <br> Relation</p>
                            <p class="inside-focus-result-working-environment-number">{{number_format($focus_result_female[0]['dimensional_results'][2]['value'],0) }}</p>
                        </div>
                        <div class="inside-focus-result-motivation @if($focus_result_female[0]['dimensional_results'][3]['value'] <= 25) bottom-quartile @elseif($focus_result_female[0]['dimensional_results'][3]['value'] <= 50) third-quartile @elseif($focus_result_female[0]['dimensional_results'][3]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-motivation-text">{{$focus_result_female[0]['dimensional_results'][3]['key'] }}</p>
                            <p class="inside-focus-result-motivation-number">{{number_format($focus_result_female[0]['dimensional_results'][3]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="trusting @if($focus_result_female[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_female[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_female[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="trusting-text">{{ $focus_result_female[0]['dimensional_results'][2]['dimensional_results'][0]['key']; }}<span class="trusting-number" style="margin-left:90px">{{number_format($focus_result_female[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="fairness  @if($focus_result_female[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_female[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_female[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="fairness-text">{{ $focus_result_female[0]['dimensional_results'][2]['dimensional_results'][1]['key']; }} <span class="fairness-number" style="margin-left:75px">{{ number_format($focus_result_female[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="respect  @if($focus_result_female[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_female[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_female[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="respect-text">{{ $focus_result_female[0]['dimensional_results'][2]['dimensional_results'][2]['key']; }} <span class="respect-number">{{ number_format($focus_result_female[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="reward @if($focus_result_female[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_female[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_female[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="reward-text">{{ $focus_result_female[0]['dimensional_results'][3]['dimensional_results'][0]['key'];}} <span class="reward-number" style="margin-left: 110px;">{{ number_format($focus_result_female[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="inspire @if($focus_result_female[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_female[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_female[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="inspire-text">{{ $focus_result_female[0]['dimensional_results'][3]['dimensional_results'][1]['key']; }} <span class="inspire-number" style="margin-left: 90px;">{{ number_format($focus_result_female[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</span></p>
                            </div>
                            <div class="recognition @if($focus_result_female[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_female[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_female[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="recognition-text">{{ $focus_result_female[0]['dimensional_results'][3]['dimensional_results'][2]['key'];}} <span class="recognition-number" style="margin-left: 70px;">{{ number_format($focus_result_female[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</span></p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="quadrants" style="position: relative; top: -950px;">
                <span class="scale">Scale:</span>
                <div>
                    <span class="quadrant top-quartile"></span>
                    <span class="text-for-quartile">TOP QUARTILE</span>
                    <span class="quadrant second-quartile"></span>
                    <span class="text-for-quartile">SECOND QUARTILE</span>
                    <span class="quadrant third-quartile"></span>
                    <span class="text-for-quartile">THIRD QUARTILE</span>
                    <span class="quadrant bottom-quartile"></span>
                    <span class="text-for-quartile">BOTTOM QUARTILE</span>
                </div>
            </div>
        
        </div>  

     
        <div class="indicators-by-gender" style="position: relative; top: 2850px;">
            <p class="center-title title"> INDICATORS BY GENDER </p>
    
            <table>
                <tr>
                    <th style="background-color: white;"> </th>
                    <th>OVERALL SCORE</th>
                    <th>{{ $focus_result[1]['dimensional_results'][0]['key']; }}</th>
                    <th>{{ $focus_result[1]['dimensional_results'][1]['key']; }}</th>
                    <th>{{ $focus_result[1]['dimensional_results'][2]['key']; }}</th>
                    <th>{{ $focus_result[1]['dimensional_results'][3]['key']; }}</th>
                    <th>{{ $focus_result[0]['dimensional_results'][0]['key']; }}</th>
                    <th>{{ $focus_result[0]['dimensional_results'][1]['key']; }}</th>
                    <th>{{ $focus_result[0]['dimensional_results'][2]['key']; }}</th>
                    <th>{{ $focus_result[0]['dimensional_results'][3]['key']; }}</th>
                </tr>
                <tr style="text-align: center;">
                    <td>OVERALL</td>
                    <td class="@if(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) <= 25) bottom-quartile @elseif(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) <= 50) third-quartile @elseif(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) <= 80) second-quartile @else top-quartile @endif">{{ number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0); }}</td>
                    <td class="@if(number_format($focus_result[1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[1]['dimensional_results'][0]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result[1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[1]['dimensional_results'][1]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result[1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[1]['dimensional_results'][2]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result[1]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[1]['dimensional_results'][3]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result[0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[0]['dimensional_results'][0]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result[0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[0]['dimensional_results'][1]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result[0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[0]['dimensional_results'][2]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result[0]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[0]['dimensional_results'][3]['value'],0); }}</td>
                </tr>
                <tr style="text-align: center;">
                    <td>MALE</td>
                    <td class="@if(number_format((($focus_result_male[0]['value'] + $focus_result_male[1]['value']) / 2), 0) <= 25) bottom-quartile @elseif(number_format((($focus_result_male[0]['value'] + $focus_result_male[1]['value']) / 2), 0) <= 50) third-quartile @elseif(number_format((($focus_result_male[0]['value'] + $focus_result_male[1]['value']) / 2), 0) <= 80) second-quartile @else top-quartile @endif">{{ number_format((($focus_result_male[0]['value'] + $focus_result_male[1]['value']) / 2), 0); }}</td>
                    <td class="@if(number_format($focus_result_male[1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_male[1]['dimensional_results'][0]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_male[1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_male[1]['dimensional_results'][1]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_male[1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_male[1]['dimensional_results'][2]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_male[1]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_male[1]['dimensional_results'][3]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_male[0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_male[0]['dimensional_results'][0]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_male[0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_male[0]['dimensional_results'][1]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_male[0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_male[0]['dimensional_results'][2]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_male[0]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_male[0]['dimensional_results'][3]['value'],0); }}</td>
                </tr>
                <tr style="text-align: center;">
                    <td>FEMALE</td>
                    <td class="@if(number_format((($focus_result_female[0]['value'] + $focus_result_female[1]['value']) / 2), 0) <= 25) bottom-quartile @elseif(number_format((($focus_result_female[0]['value'] + $focus_result_female[1]['value']) / 2), 0) <= 50) third-quartile @elseif(number_format((($focus_result_female[0]['value'] + $focus_result_female[1]['value']) / 2), 0) <= 80) second-quartile @else top-quartile @endif">{{ number_format((($focus_result_female[0]['value'] + $focus_result_female[1]['value']) / 2), 0); }}</td>
                    <td class="@if(number_format($focus_result_female[1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_female[1]['dimensional_results'][0]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_female[1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_female[1]['dimensional_results'][1]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_female[1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_female[1]['dimensional_results'][2]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_female[1]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_female[1]['dimensional_results'][3]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_female[0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_female[0]['dimensional_results'][0]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_female[0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_female[0]['dimensional_results'][1]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_female[0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_female[0]['dimensional_results'][2]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_female[0]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_female[0]['dimensional_results'][3]['value'],0); }}</td>
                </tr>
            </table>        
          
            <div class="quadrants">
                <span class="scale">Scale:</span>
                <div>
                    <span class="quadrant top-quartile"></span>
                    <span class="text-for-quartile">TOP QUARTILE</span>
                    <span class="quadrant second-quartile"></span>
                    <span class="text-for-quartile">SECOND QUARTILE</span>
                    <span class="quadrant third-quartile"></span>
                    <span class="text-for-quartile">THIRD QUARTILE</span>
                    <span class="quadrant bottom-quartile"></span>
                    <span class="text-for-quartile">BOTTOM QUARTILE</span>
                </div>
            </div>
        </div>

        <div class="practices-by-gender" style="position: relative; top: 4350px;">
            <p class="center-title title"> PRACTICES BY GENDER </p>
            <table>
                <tr>
                    <th>INDICATOR</th>
                    <th>PRACTICE</th>
                    <th>OVERALL SCORE</th>
                    <th>MALE</th>
                    <th>FEMALE</th>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[1]['dimensional_results'][0]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[1]['dimensional_results'][0]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[1]['dimensional_results'][0]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[1]['dimensional_results'][0]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_male[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_male[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_male[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_male[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_male[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_male[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_female[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_female[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_female[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_female[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_female[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_female[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[1]['dimensional_results'][1]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[1]['dimensional_results'][1]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[1]['dimensional_results'][1]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[1]['dimensional_results'][1]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_male[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_male[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_male[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_male[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_male[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_male[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_female[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_female[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_female[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_female[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_female[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_female[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[1]['dimensional_results'][2]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[1]['dimensional_results'][2]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[1]['dimensional_results'][2]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[1]['dimensional_results'][2]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_male[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_male[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_male[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_male[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_male[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_male[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_female[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_female[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_female[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_female[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_female[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_female[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[1]['dimensional_results'][3]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[1]['dimensional_results'][3]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[1]['dimensional_results'][3]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[1]['dimensional_results'][3]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_male[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_male[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_male[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_male[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_male[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_male[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_female[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_female[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_female[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_female[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_female[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_female[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[0]['dimensional_results'][0]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[0]['dimensional_results'][0]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[0]['dimensional_results'][0]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[0]['dimensional_results'][0]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_male[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_male[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_male[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_male[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_male[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_male[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_female[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_female[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_female[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_female[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_female[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_female[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[0]['dimensional_results'][1]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[0]['dimensional_results'][1]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[0]['dimensional_results'][1]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[0]['dimensional_results'][1]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_male[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_male[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_male[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_male[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_male[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_male[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_female[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_female[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_female[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_female[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_female[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_female[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[0]['dimensional_results'][2]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[0]['dimensional_results'][2]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[0]['dimensional_results'][2]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[0]['dimensional_results'][2]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_male[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_male[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_male[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_male[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_male[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_male[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_female[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_female[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_female[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_female[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_female[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_female[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[0]['dimensional_results'][3]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[0]['dimensional_results'][3]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[0]['dimensional_results'][3]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[0]['dimensional_results'][3]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_male[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_male[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_male[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_male[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_male[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_male[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_male[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_female[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_female[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_female[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_female[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_female[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_female[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_female[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
            </table>
            <div class="quadrants">
                <span class="scale">Scale:</span>
                <div>
                    <span class="quadrant top-quartile"></span>
                    <span class="text-for-quartile">TOP QUARTILE</span>
                    <span class="quadrant second-quartile"></span>
                    <span class="text-for-quartile">SECOND QUARTILE</span>
                    <span class="quadrant third-quartile"></span>
                    <span class="text-for-quartile">THIRD QUARTILE</span>
                    <span class="quadrant bottom-quartile"></span>
                    <span class="text-for-quartile">BOTTOM QUARTILE</span>
                </div>
            </div>
        </div>

        <div class="center-title" style="position: relative; top: 5700px;">
            <h1 class="custom-title">HIGHEST AND LOWEST 5 PRACTICES</h1>
                <h3 class="heading" style="position: relative; left:-400px; top:80px">OVERALL OHX-RAY <br> SCORE</h3>
                <h3 class="heading" style="position: relative; top:40px;">Male Level</h3>
                <h3 class="heading" style="position: relative; left:990px; width:180px;">Female Level</h3>
            <div class="final-row" style="margin-bottom: 100px;">
                <ul class="final-col" style="margin-right: 100px;">
                    @for($i = 0; $i < 5;$i++) 
                        <li class="final-item @if($sort_results[$i]['value'] <= 25) bottom-quartile @elseif($sort_results[$i]['value'] <= 50) third-quartile @elseif($sort_results[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                            {{$sort_results[$i]['key']}}
                            <span class="grade">{{ number_format($sort_results[$i]['value'],0); }}</span>
                        </li>
                    @endfor
                </ul>
                <ul class="final-col" style="margin-right: 100px;">
                    @for($i = 0; $i < 5;$i++) 
                        <li class="final-item @if($sort_results_male[$i]['value'] <= 25) bottom-quartile @elseif($sort_results_male[$i]['value'] <= 50) third-quartile @elseif($sort_results_male[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                            {{$sort_results_male[$i]['key']}}
                            <span class="grade">{{ number_format($sort_results_male[$i]['value'],0); }}</span>
                        </li>
                    @endfor
                </ul>
                <ul class="final-col">
                    @for($i = 0; $i < 5;$i++) 
                        <li class="final-item @if($sort_results_female[$i]['value'] <= 25) bottom-quartile @elseif($sort_results_female[$i]['value'] <= 50) third-quartile @elseif($sort_results_female[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                            {{$sort_results_female[$i]['key']}}
                            <span class="grade">{{ number_format($sort_results_female[$i]['value'],0); }}</span>
                        </li>
                    @endfor
                </ul>
            </div>
            <div class="final-row" >
                <ul class="final-col" style="margin-right: 100px;">
                    @for($i = 23; $i>18;$i--)
                        <li class="final-item @if($sort_results[$i]['value'] <= 25) bottom-quartile @elseif($sort_results[$i]['value'] <= 50) third-quartile @elseif($sort_results[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                            {{$sort_results[$i]['key']}}
                            <span class="grade">{{ number_format($sort_results[$i]['value'],0); }}</span>
                        </li>
                    @endfor
                </ul>
                <ul class="final-col" style="margin-right: 100px;">
                    @for($i = 23; $i>18;$i--)
                        <li class="final-item @if($sort_results_male[$i]['value'] <= 25) bottom-quartile @elseif($sort_results_male[$i]['value'] <= 50) third-quartile @elseif($sort_results_male[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                            {{$sort_results_male[$i]['key']}}
                            <span class="grade">{{ number_format($sort_results_male[$i]['value'],0); }}</span>
                        </li>
                    @endfor
                </ul>
                <ul class="final-col">
                    @for($i = 23; $i>18;$i--)
                        <li class="final-item @if($sort_results_female[$i]['value'] <= 25) bottom-quartile @elseif($sort_results_female[$i]['value'] <= 50) third-quartile @elseif($sort_results_female[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                            {{$sort_results_female[$i]['key']}}
                            <span class="grade">{{ number_format($sort_results_female[$i]['value'],0); }}</span>
                        </li>
                    @endfor
                </ul>
            </div>
            <div class="quadrants">
                <span class="scale">Scale:</span>
                <div>
                    <span class="quadrant top-quartile"></span>
                    <span class="text-for-quartile">TOP QUARTILE</span>
                    <span class="quadrant second-quartile"></span>
                    <span class="text-for-quartile">SECOND QUARTILE</span>
                    <span class="quadrant third-quartile"></span>
                    <span class="text-for-quartile">THIRD QUARTILE</span>
                    <span class="quadrant bottom-quartile"></span>
                    <span class="text-for-quartile">BOTTOM QUARTILE</span>
                </div>
            </div>
        </div>

        <div class="by-level" style="position: relative; top:6800px; left:40px;">
            <img src="{{ public_path('by-level.png')}}" alt="">
        </div>

        <div class="" style="position: relative; top:7400px; left:40px;">
            <p class="center-title title">TOP MANAGEMENT HEALTH IMAGE</p>
            <div class="organization-results-container">
                @if(number_format((($focus_result_top[0]['value'] + $focus_result_top[1]['value']) / 2), 0) <= 25)
                    <p class="quartile-orgnaztion-details bottom-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_top[0]['value'] + $focus_result_top[1]['value']) / 2), 0)}}</span></p>
                @elseif(number_format((($focus_result_top[0]['value'] + $focus_result_top[1]['value']) / 2), 0) <= 50)
                    <p class="quartile-orgnaztion-details third-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_top[0]['value'] + $focus_result_top[1]['value']) / 2), 0)}}</span></p>
                @elseif(number_format((($focus_result_top[0]['value'] + $focus_result_top[1]['value']) / 2), 0) <= 80)
                    <p class="quartile-orgnaztion-details second-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_top[0]['value'] + $focus_result_top[1]['value']) / 2), 0)}}</span></p>
                @else
                    <p class="quartile-orgnaztion-details top-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_top[0]['value'] + $focus_result_top[1]['value']) / 2), 0)}}</span></p>
                @endif
        
                @if(number_format((($focus_result_top[0]['value'] + $focus_result_top[1]['value']) / 2), 0) <= 25)
                    <p class="quartile-orgnaztion-details bottom-quartile organization-results-quartile"><span class="quartile-first-part">BOTTOM</span> <span class="quartile-second-part">QUARTILE</span></p>
                @elseif(number_format((($focus_result_top[0]['value'] + $focus_result_top[1]['value']) / 2), 0) <= 50)
                    <p class="quartile-orgnaztion-details third-quartile organization-results-quartile"><span class="quartile-first-part">THIRD</span> <span class="quartile-second-part">QUARTILE</span></p>
                @elseif(number_format((($focus_result_top[0]['value'] + $focus_result_top[1]['value']) / 2), 0) <= 80)
                    <p class="quartile-orgnaztion-details second-quartile organization-results-quartile"><span class="quartile-first-part">SECOND</span> <span class="quartile-second-part">QUARTILE</span></p>
                @else
                    <p class="quartile-orgnaztion-details top-quartile organization-results-quartile"><span class="quartile-first-part">TOP</span> <br> <span class="quartile-second-part">QUARTILE</span></p>
                @endif

                <div class="quartile-orgnaztion-details-left-column" style="background-color: white">
                    @if(number_format((($focus_result_top[0]['value'] + $focus_result_top[1]['value']) / 2), 0) <= 25)
                        <img class="state-color-image" src="{{ public_path('red overall score.png') }}" alt="">
                    @elseif(number_format((($focus_result_top[0]['value'] + $focus_result_top[1]['value']) / 2), 0) <= 50)
                        <img class="state-color-image" src="{{ public_path('orange overall score.png') }}" alt="">
                    @elseif(number_format((($focus_result_top[0]['value'] + $focus_result_top[1]['value']) / 2), 0) <= 80)
                        <img class="state-color-image" src="{{ public_path('yellow overall score.png') }}" alt="">
                    @else
                        <img class="state-color-image" src="{{ public_path('top overall score.png') }}" alt="">
                    @endif
                    <img class="stats-picture" src=" {{public_path('top managment.png')}}" alt="">
                </div>

                    <!-- Start of External -->
                <div class="quartile-orgnaztion-details-right-column">
                    <div class="inside-focus-result">
                        <div class="inside-focus-result-header @if($focus_result_top[1]['value'] <= 25) bottom-quartile @elseif($focus_result_top[1]['value'] <= 50) third-quartile @elseif($focus_result_top[1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <h3 class="inside-focus-result-header-text">INSIDE</h3>
                            <h3 class="inside-focus-result-header-number">{{number_format($focus_result_top[1]['value'],0);}}</h3>
                        </div>
                        <div class="inside-focus-result-accountability @if($focus_result_top[1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_top[1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_top[1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-accountability-text">{{ $focus_result_top[1]['dimensional_results'][0]['key']; }}</p>
                            <p class="inside-focuse-result-accountability-number">{{ number_format($focus_result_top[1]['dimensional_results'][0]['value'] ,0); }}</p>
                        </div>
                        <div class="inside-focus-result-leadership @if($focus_result_top[1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_top[1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_top[1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-leadership-text">{{ $focus_result_top[1]['dimensional_results'][1]['key']; }}</p>
                            <p class="inside-focus-result-leadership-number">{{ number_format($focus_result_top[1]['dimensional_results'][1]['value'] ,0) }}</p>
                        </div>
                        <div>
                            <div class="responsibilities @if($focus_result_top[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_top[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_top[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="responsibilities-text">{{ $focus_result_top[1]['dimensional_results'][0]['dimensional_results'][0]['key']; }}<span class="responsibilities-number">{{ number_format($focus_result_top[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="trustworthiness @if($focus_result_top[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_top[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_top[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="turstworthiness-text">{{ $focus_result_top[1]['dimensional_results'][0]['dimensional_results'][1]['key']; }}<span class="turstworthiness-number">{{ number_format($focus_result_top[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</span></p>
                            </div>
                            <div class="commitment @if($focus_result_top[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_top[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_top[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="commitment-text">{{ $focus_result_top[1]['dimensional_results'][0]['dimensional_results'][2]['key']; }} <span class="commitment-number">{{ number_format($focus_result_top[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="democratic @if($focus_result_top[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_top[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_top[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="democratic-text">{{ $focus_result_top[1]['dimensional_results'][1]['dimensional_results'][0]['key']; }}  <span class="democratic-number">{{  number_format($focus_result_top[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0); }}</span> </p>
                            </div>
                            <div class="autocratic @if($focus_result_top[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_top[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_top[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="autocratic-text">{{ $focus_result_top[1]['dimensional_results'][1]['dimensional_results'][1]['key']; }} <span class="autocratic-number">{{  number_format($focus_result_top[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="transformational @if($focus_result_top[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_top[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_top[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="transformational-text">{{ $focus_result_top[1]['dimensional_results'][1]['dimensional_results'][2]['key']; }} <span class="transformational-number">{{  number_format($focus_result_top[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div class="inside-focus-result-working-environment  @if($focus_result_top[1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_top[1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_top[1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-working-environment-text">{{ $focus_result_top[1]['dimensional_results'][2]['key']; }}</p>
                            <p class="inside-focus-result-working-environment-number">{{ number_format($focus_result_top[1]['dimensional_results'][2]['value'],0); }}</p>
                        </div>
                        <div class="inside-focus-result-motivation @if($focus_result_top[1]['dimensional_results'][3]['value'] <= 25) bottom-quartile @elseif($focus_result_top[1]['dimensional_results'][3]['value'] <= 50) third-quartile @elseif($focus_result_top[1]['dimensional_results'][3]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-motivation-text">{{ $focus_result_top[1]['dimensional_results'][3]['key']; }}</p>
                            <p class="inside-focus-result-motivation-number">{{ number_format($focus_result_top[1]['dimensional_results'][3]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="trusting @if($focus_result_top[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_top[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_top[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="trusting-text">{{ $focus_result_top[1]['dimensional_results'][2]['dimensional_results'][0]['key']; }} <span class="trusting-number">{{ number_format($focus_result_top[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="fairness @if($focus_result_top[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_top[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_top[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="fairness-text">{{ $focus_result_top[1]['dimensional_results'][2]['dimensional_results'][1]['key']; }} <span class="fairness-number">{{ number_format($focus_result_top[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="respect @if($focus_result_top[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_top[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_top[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="respect-text">{{ $focus_result_top[1]['dimensional_results'][2]['dimensional_results'][2]['key']; }} <span class="respect-number">{{ number_format($focus_result_top[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="reward @if($focus_result_top[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_top[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_top[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="reward-text">{{ $focus_result_top[1]['dimensional_results'][3]['dimensional_results'][0]['key']; }} <span class="reward-number">{{ number_format($focus_result_top[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="inspire @if($focus_result_top[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_top[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_top[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="inspire-text">{{$focus_result_top[1]['dimensional_results'][3]['dimensional_results'][1]['key']; }}<span class="inspire-number">{{number_format($focus_result_top[1]['dimensional_results'][3]['dimensional_results'][1]['value'] ,0);}}</span></p>
                            </div>
                            <div class="recognition @if($focus_result_top[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_top[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_top[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="recognition-text">{{$focus_result_top[1]['dimensional_results'][3]['dimensional_results'][2]['key']; }} <span class="recognition-number">{{number_format($focus_result_top[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="outside-focus-result">
                        <div class="inside-focus-result-header @if($focus_result_top[0]['value'] <= 25) bottom-quartile @elseif($focus_result_top[0]['value'] <= 50) third-quartile @elseif($focus_result_top[0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <h3 class="inside-focus-result-header-text">OUTSIDE</h3>
                            <h3 class="inside-focus-result-header-number">{{ number_format($focus_result_top[0]['value'],0); }}</h3>
                        </div>
                        <div class="inside-focus-result-accountability @if($focus_result_top[0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_top[0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_top[0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-accountability-text">{{ $focus_result_top[0]['dimensional_results'][0]['key']; }}</p>
                            <p class="inside-focuse-result-accountability-number">{{ number_format($focus_result_top[0]['dimensional_results'][0]['value'],0);}}</p>
                        </div>
                        <div class="inside-focus-result-leadership @if($focus_result_top[0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_top[0]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_top[0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-leadership-text">{{ $focus_result_top[0]['dimensional_results'][1]['key']; }}</p>
                            <p class="inside-focus-result-leadership-number">{{ number_format($focus_result_top[0]['dimensional_results'][1]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="responsibilities @if($focus_result_top[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_top[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_top[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="responsibilities-text">{{ $focus_result_top[0]['dimensional_results'][0]['dimensional_results'][0]['key']; }}<span class="responsibilities-number" style="margin-left:110px">{{number_format($focus_result_top[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="trustworthiness @if($focus_result_top[0]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_top[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_top[0]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="turstworthiness-text">{{ $focus_result_top[0]['dimensional_results'][0]['dimensional_results'][1]['key']; }}<span class="turstworthiness-number" style="margin-left:110px">{{number_format($focus_result_top[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="commitment @if($focus_result_top[0]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_top[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_top[0]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="commitment-text">{{ $focus_result_top[0]['dimensional_results'][0]['dimensional_results'][2]['key']; }} <span class="commitment-number" style="margin-left:90px">{{ number_format($focus_result_top[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="democratic @if($focus_result_top[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_top[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_top[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="democratic-text">{{ $focus_result_top[0]['dimensional_results'][1]['dimensional_results'][0]['key']; }}  <span class="democratic-number" style="margin-left:80px">{{ number_format($focus_result_top[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0); }}</span> </p>
                            </div>
                            <div class="autocratic @if($focus_result_top[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_top[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_top[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="autocratic-text">{{$focus_result_top[0]['dimensional_results'][1]['dimensional_results'][1]['key'];}} <span class="autocratic-number" style="margin-left:80px">{{ number_format($focus_result_top[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="transformational @if($focus_result_top[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_top[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_top[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="transformational-text">{{$focus_result_top[0]['dimensional_results'][1]['dimensional_results'][2]['key'] }}<span class="transformational-number" style="margin-left: 90px;">{{ number_format($focus_result_top[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div class="inside-focus-result-working-environment @if($focus_result_top[0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_top[0]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_top[0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-working-environment-text">External <br> Relation</p>
                            <p class="inside-focus-result-working-environment-number">{{number_format($focus_result_top[0]['dimensional_results'][2]['value'],0) }}</p>
                        </div>
                        <div class="inside-focus-result-motivation @if($focus_result_top[0]['dimensional_results'][3]['value'] <= 25) bottom-quartile @elseif($focus_result_top[0]['dimensional_results'][3]['value'] <= 50) third-quartile @elseif($focus_result_top[0]['dimensional_results'][3]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-motivation-text">{{$focus_result_top[0]['dimensional_results'][3]['key'] }}</p>
                            <p class="inside-focus-result-motivation-number">{{number_format($focus_result_top[0]['dimensional_results'][3]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="trusting @if($focus_result_top[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_top[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_top[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="trusting-text">{{ $focus_result_top[0]['dimensional_results'][2]['dimensional_results'][0]['key']; }}<span class="trusting-number" style="margin-left:90px">{{number_format($focus_result_top[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="fairness  @if($focus_result_top[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_top[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_top[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="fairness-text">{{ $focus_result_top[0]['dimensional_results'][2]['dimensional_results'][1]['key']; }} <span class="fairness-number" style="margin-left:75px">{{ number_format($focus_result_top[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="respect  @if($focus_result_top[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_top[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_top[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="respect-text">{{ $focus_result_top[0]['dimensional_results'][2]['dimensional_results'][2]['key']; }} <span class="respect-number">{{ number_format($focus_result_top[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="reward @if($focus_result_top[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_top[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_top[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="reward-text">{{ $focus_result_top[0]['dimensional_results'][3]['dimensional_results'][0]['key'];}} <span class="reward-number" style="margin-left: 110px;">{{ number_format($focus_result_top[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="inspire @if($focus_result_top[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_top[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_top[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="inspire-text">{{ $focus_result_top[0]['dimensional_results'][3]['dimensional_results'][1]['key']; }} <span class="inspire-number" style="margin-left: 90px;">{{ number_format($focus_result_top[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</span></p>
                            </div>
                            <div class="recognition @if($focus_result_top[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_top[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_top[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="recognition-text">{{ $focus_result_top[0]['dimensional_results'][3]['dimensional_results'][2]['key'];}} <span class="recognition-number" style="margin-left: 70px;">{{ number_format($focus_result_top[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</span></p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="quadrants" style="position: relative; top: -950px;">
                <span class="scale">Scale:</span>
                <div>
                    <span class="quadrant top-quartile"></span>
                    <span class="text-for-quartile">TOP QUARTILE</span>
                    <span class="quadrant second-quartile"></span>
                    <span class="text-for-quartile">SECOND QUARTILE</span>
                    <span class="quadrant third-quartile"></span>
                    <span class="text-for-quartile">THIRD QUARTILE</span>
                    <span class="quadrant bottom-quartile"></span>
                    <span class="text-for-quartile">BOTTOM QUARTILE</span>
                </div>
            </div>
        
        </div>  


        <div class="" style="position: relative; top:7400px; left:40px;">
            <p class="center-title title">MIDDLE MANAGEMENT HEALTH IMAGE</p>
            <div class="organization-results-container">
                @if(number_format((($focus_result_middle[0]['value'] + $focus_result_middle[1]['value']) / 2), 0) <= 25)
                    <p class="quartile-orgnaztion-details bottom-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_middle[0]['value'] + $focus_result_middle[1]['value']) / 2), 0)}}</span></p>
                @elseif(number_format((($focus_result_middle[0]['value'] + $focus_result_middle[1]['value']) / 2), 0) <= 50)
                    <p class="quartile-orgnaztion-details third-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_middle[0]['value'] + $focus_result_middle[1]['value']) / 2), 0)}}</span></p>
                @elseif(number_format((($focus_result_middle[0]['value'] + $focus_result_middle[1]['value']) / 2), 0) <= 80)
                    <p class="quartile-orgnaztion-details second-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_middle[0]['value'] + $focus_result_middle[1]['value']) / 2), 0)}}</span></p>
                @else
                    <p class="quartile-orgnaztion-details top-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_middle[0]['value'] + $focus_result_middle[1]['value']) / 2), 0)}}</span></p>
                @endif
        
                @if(number_format((($focus_result_middle[0]['value'] + $focus_result_middle[1]['value']) / 2), 0) <= 25)
                    <p class="quartile-orgnaztion-details bottom-quartile organization-results-quartile"><span class="quartile-first-part">BOTTOM</span> <span class="quartile-second-part">QUARTILE</span></p>
                @elseif(number_format((($focus_result_middle[0]['value'] + $focus_result_middle[1]['value']) / 2), 0) <= 50)
                    <p class="quartile-orgnaztion-details third-quartile organization-results-quartile"><span class="quartile-first-part">THIRD</span> <span class="quartile-second-part">QUARTILE</span></p>
                @elseif(number_format((($focus_result_middle[0]['value'] + $focus_result_middle[1]['value']) / 2), 0) <= 80)
                    <p class="quartile-orgnaztion-details second-quartile organization-results-quartile"><span class="quartile-first-part">SECOND</span> <span class="quartile-second-part">QUARTILE</span></p>
                @else
                    <p class="quartile-orgnaztion-details top-quartile organization-results-quartile"><span class="quartile-first-part">TOP</span> <br> <span class="quartile-second-part">QUARTILE</span></p>
                @endif

                <div class="quartile-orgnaztion-details-left-column" style="background-color: white">
                    @if(number_format((($focus_result_middle[0]['value'] + $focus_result_middle[1]['value']) / 2), 0) <= 25)
                        <img class="state-color-image" src="{{ public_path('red overall score.png') }}" alt="">
                    @elseif(number_format((($focus_result_middle[0]['value'] + $focus_result_middle[1]['value']) / 2), 0) <= 50)
                        <img class="state-color-image" src="{{ public_path('orange overall score.png') }}" alt="">
                    @elseif(number_format((($focus_result_middle[0]['value'] + $focus_result_middle[1]['value']) / 2), 0) <= 80)
                        <img class="state-color-image" src="{{ public_path('yellow overall score.png') }}" alt="">
                    @else
                        <img class="state-color-image" src="{{ public_path('top overall score.png') }}" alt="">
                    @endif
                    <img class="stats-picture" src=" {{public_path('middle managment.png')}}" alt="">
                </div>

                    <!-- Start of External -->
                <div class="quartile-orgnaztion-details-right-column">
                    <div class="inside-focus-result">
                        <div class="inside-focus-result-header @if($focus_result_middle[1]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[1]['value'] <= 50) third-quartile @elseif($focus_result_middle[1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <h3 class="inside-focus-result-header-text">INSIDE</h3>
                            <h3 class="inside-focus-result-header-number">{{number_format($focus_result_middle[1]['value'],0);}}</h3>
                        </div>
                        <div class="inside-focus-result-accountability @if($focus_result_middle[1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_middle[1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-accountability-text">{{ $focus_result_middle[1]['dimensional_results'][0]['key']; }}</p>
                            <p class="inside-focuse-result-accountability-number">{{ number_format($focus_result_middle[1]['dimensional_results'][0]['value'] ,0); }}</p>
                        </div>
                        <div class="inside-focus-result-leadership @if($focus_result_middle[1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_middle[1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-leadership-text">{{ $focus_result_middle[1]['dimensional_results'][1]['key']; }}</p>
                            <p class="inside-focus-result-leadership-number">{{ number_format($focus_result_middle[1]['dimensional_results'][1]['value'] ,0) }}</p>
                        </div>
                        <div>
                            <div class="responsibilities @if($focus_result_middle[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_middle[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="responsibilities-text">{{ $focus_result_middle[1]['dimensional_results'][0]['dimensional_results'][0]['key']; }}<span class="responsibilities-number">{{ number_format($focus_result_middle[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="trustworthiness @if($focus_result_middle[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_middle[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="turstworthiness-text">{{ $focus_result_middle[1]['dimensional_results'][0]['dimensional_results'][1]['key']; }}<span class="turstworthiness-number">{{ number_format($focus_result_middle[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</span></p>
                            </div>
                            <div class="commitment @if($focus_result_middle[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_middle[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="commitment-text">{{ $focus_result_middle[1]['dimensional_results'][0]['dimensional_results'][2]['key']; }} <span class="commitment-number">{{ number_format($focus_result_middle[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="democratic @if($focus_result_middle[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_middle[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="democratic-text">{{ $focus_result_middle[1]['dimensional_results'][1]['dimensional_results'][0]['key']; }}  <span class="democratic-number">{{  number_format($focus_result_middle[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0); }}</span> </p>
                            </div>
                            <div class="autocratic @if($focus_result_middle[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_middle[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="autocratic-text">{{ $focus_result_middle[1]['dimensional_results'][1]['dimensional_results'][1]['key']; }} <span class="autocratic-number">{{  number_format($focus_result_middle[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="transformational @if($focus_result_middle[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_middle[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="transformational-text">{{ $focus_result_middle[1]['dimensional_results'][1]['dimensional_results'][2]['key']; }} <span class="transformational-number">{{  number_format($focus_result_middle[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div class="inside-focus-result-working-environment  @if($focus_result_middle[1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_middle[1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-working-environment-text">{{ $focus_result_middle[1]['dimensional_results'][2]['key']; }}</p>
                            <p class="inside-focus-result-working-environment-number">{{ number_format($focus_result_middle[1]['dimensional_results'][2]['value'],0); }}</p>
                        </div>
                        <div class="inside-focus-result-motivation @if($focus_result_middle[1]['dimensional_results'][3]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[1]['dimensional_results'][3]['value'] <= 50) third-quartile @elseif($focus_result_middle[1]['dimensional_results'][3]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-motivation-text">{{ $focus_result_middle[1]['dimensional_results'][3]['key']; }}</p>
                            <p class="inside-focus-result-motivation-number">{{ number_format($focus_result_middle[1]['dimensional_results'][3]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="trusting @if($focus_result_middle[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_middle[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="trusting-text">{{ $focus_result_middle[1]['dimensional_results'][2]['dimensional_results'][0]['key']; }} <span class="trusting-number">{{ number_format($focus_result_middle[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="fairness @if($focus_result_middle[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_middle[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="fairness-text">{{ $focus_result_middle[1]['dimensional_results'][2]['dimensional_results'][1]['key']; }} <span class="fairness-number">{{ number_format($focus_result_middle[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="respect @if($focus_result_middle[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_middle[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="respect-text">{{ $focus_result_middle[1]['dimensional_results'][2]['dimensional_results'][2]['key']; }} <span class="respect-number">{{ number_format($focus_result_middle[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="reward @if($focus_result_middle[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_middle[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="reward-text">{{ $focus_result_middle[1]['dimensional_results'][3]['dimensional_results'][0]['key']; }} <span class="reward-number">{{ number_format($focus_result_middle[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="inspire @if($focus_result_middle[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_middle[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="inspire-text">{{$focus_result_middle[1]['dimensional_results'][3]['dimensional_results'][1]['key']; }}<span class="inspire-number">{{number_format($focus_result_middle[1]['dimensional_results'][3]['dimensional_results'][1]['value'] ,0);}}</span></p>
                            </div>
                            <div class="recognition @if($focus_result_middle[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_middle[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="recognition-text">{{$focus_result_middle[1]['dimensional_results'][3]['dimensional_results'][2]['key']; }} <span class="recognition-number">{{number_format($focus_result_middle[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="outside-focus-result">
                        <div class="inside-focus-result-header @if($focus_result_middle[0]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[0]['value'] <= 50) third-quartile @elseif($focus_result_middle[0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <h3 class="inside-focus-result-header-text">OUTSIDE</h3>
                            <h3 class="inside-focus-result-header-number">{{ number_format($focus_result_middle[0]['value'],0); }}</h3>
                        </div>
                        <div class="inside-focus-result-accountability @if($focus_result_middle[0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_middle[0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-accountability-text">{{ $focus_result_middle[0]['dimensional_results'][0]['key']; }}</p>
                            <p class="inside-focuse-result-accountability-number">{{ number_format($focus_result_middle[0]['dimensional_results'][0]['value'],0);}}</p>
                        </div>
                        <div class="inside-focus-result-leadership @if($focus_result_middle[0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[0]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_middle[0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-leadership-text">{{ $focus_result_middle[0]['dimensional_results'][1]['key']; }}</p>
                            <p class="inside-focus-result-leadership-number">{{ number_format($focus_result_middle[0]['dimensional_results'][1]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="responsibilities @if($focus_result_middle[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_middle[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="responsibilities-text">{{ $focus_result_middle[0]['dimensional_results'][0]['dimensional_results'][0]['key']; }}<span class="responsibilities-number" style="margin-left:110px">{{number_format($focus_result_middle[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="trustworthiness @if($focus_result_middle[0]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_middle[0]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="turstworthiness-text">{{ $focus_result_middle[0]['dimensional_results'][0]['dimensional_results'][1]['key']; }}<span class="turstworthiness-number" style="margin-left:110px">{{number_format($focus_result_middle[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="commitment @if($focus_result_middle[0]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_middle[0]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="commitment-text">{{ $focus_result_middle[0]['dimensional_results'][0]['dimensional_results'][2]['key']; }} <span class="commitment-number" style="margin-left:90px">{{ number_format($focus_result_middle[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="democratic @if($focus_result_middle[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_middle[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="democratic-text">{{ $focus_result_middle[0]['dimensional_results'][1]['dimensional_results'][0]['key']; }}  <span class="democratic-number" style="margin-left:80px">{{ number_format($focus_result_middle[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0); }}</span> </p>
                            </div>
                            <div class="autocratic @if($focus_result_middle[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_middle[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="autocratic-text">{{$focus_result_middle[0]['dimensional_results'][1]['dimensional_results'][1]['key'];}} <span class="autocratic-number" style="margin-left:80px">{{ number_format($focus_result_middle[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="transformational @if($focus_result_middle[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_middle[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="transformational-text">{{$focus_result_middle[0]['dimensional_results'][1]['dimensional_results'][2]['key'] }}<span class="transformational-number" style="margin-left: 90px;">{{ number_format($focus_result_middle[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div class="inside-focus-result-working-environment @if($focus_result_middle[0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[0]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_middle[0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-working-environment-text">External <br> Relation</p>
                            <p class="inside-focus-result-working-environment-number">{{number_format($focus_result_middle[0]['dimensional_results'][2]['value'],0) }}</p>
                        </div>
                        <div class="inside-focus-result-motivation @if($focus_result_middle[0]['dimensional_results'][3]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[0]['dimensional_results'][3]['value'] <= 50) third-quartile @elseif($focus_result_middle[0]['dimensional_results'][3]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-motivation-text">{{$focus_result_middle[0]['dimensional_results'][3]['key'] }}</p>
                            <p class="inside-focus-result-motivation-number">{{number_format($focus_result_middle[0]['dimensional_results'][3]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="trusting @if($focus_result_middle[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_middle[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="trusting-text">{{ $focus_result_middle[0]['dimensional_results'][2]['dimensional_results'][0]['key']; }}<span class="trusting-number" style="margin-left:90px">{{number_format($focus_result_middle[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="fairness  @if($focus_result_middle[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_middle[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="fairness-text">{{ $focus_result_middle[0]['dimensional_results'][2]['dimensional_results'][1]['key']; }} <span class="fairness-number" style="margin-left:75px">{{ number_format($focus_result_middle[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="respect  @if($focus_result_middle[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_middle[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="respect-text">{{ $focus_result_middle[0]['dimensional_results'][2]['dimensional_results'][2]['key']; }} <span class="respect-number">{{ number_format($focus_result_middle[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="reward @if($focus_result_middle[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_middle[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="reward-text">{{ $focus_result_middle[0]['dimensional_results'][3]['dimensional_results'][0]['key'];}} <span class="reward-number" style="margin-left: 110px;">{{ number_format($focus_result_middle[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="inspire @if($focus_result_middle[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_middle[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="inspire-text">{{ $focus_result_middle[0]['dimensional_results'][3]['dimensional_results'][1]['key']; }} <span class="inspire-number" style="margin-left: 90px;">{{ number_format($focus_result_middle[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</span></p>
                            </div>
                            <div class="recognition @if($focus_result_middle[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_middle[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_middle[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="recognition-text">{{ $focus_result_middle[0]['dimensional_results'][3]['dimensional_results'][2]['key'];}} <span class="recognition-number" style="margin-left: 70px;">{{ number_format($focus_result_middle[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</span></p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="quadrants" style="position: relative; top: -950px;">
                <span class="scale">Scale:</span>
                <div>
                    <span class="quadrant top-quartile"></span>
                    <span class="text-for-quartile">TOP QUARTILE</span>
                    <span class="quadrant second-quartile"></span>
                    <span class="text-for-quartile">SECOND QUARTILE</span>
                    <span class="quadrant third-quartile"></span>
                    <span class="text-for-quartile">THIRD QUARTILE</span>
                    <span class="quadrant bottom-quartile"></span>
                    <span class="text-for-quartile">BOTTOM QUARTILE</span>
                </div>
            </div>
        
        </div>  


        <div class="" style="position: relative; top:7400px; left:40px;">
            <p class="center-title title">EMPLOYEES HEALTH IMAGE</p>
            <div class="organization-results-container">
                @if(number_format((($focus_result_employee[0]['value'] + $focus_result_employee[1]['value']) / 2), 0) <= 25)
                    <p class="quartile-orgnaztion-details bottom-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_employee[0]['value'] + $focus_result_employee[1]['value']) / 2), 0)}}</span></p>
                @elseif(number_format((($focus_result_employee[0]['value'] + $focus_result_employee[1]['value']) / 2), 0) <= 50)
                    <p class="quartile-orgnaztion-details third-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_employee[0]['value'] + $focus_result_employee[1]['value']) / 2), 0)}}</span></p>
                @elseif(number_format((($focus_result_employee[0]['value'] + $focus_result_employee[1]['value']) / 2), 0) <= 80)
                    <p class="quartile-orgnaztion-details second-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_employee[0]['value'] + $focus_result_employee[1]['value']) / 2), 0)}}</span></p>
                @else
                    <p class="quartile-orgnaztion-details top-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_employee[0]['value'] + $focus_result_employee[1]['value']) / 2), 0)}}</span></p>
                @endif
        
                @if(number_format((($focus_result_employee[0]['value'] + $focus_result_employee[1]['value']) / 2), 0) <= 25)
                    <p class="quartile-orgnaztion-details bottom-quartile organization-results-quartile"><span class="quartile-first-part">BOTTOM</span> <span class="quartile-second-part">QUARTILE</span></p>
                @elseif(number_format((($focus_result_employee[0]['value'] + $focus_result_employee[1]['value']) / 2), 0) <= 50)
                    <p class="quartile-orgnaztion-details third-quartile organization-results-quartile"><span class="quartile-first-part">THIRD</span> <span class="quartile-second-part">QUARTILE</span></p>
                @elseif(number_format((($focus_result_employee[0]['value'] + $focus_result_employee[1]['value']) / 2), 0) <= 80)
                    <p class="quartile-orgnaztion-details second-quartile organization-results-quartile"><span class="quartile-first-part">SECOND</span> <span class="quartile-second-part">QUARTILE</span></p>
                @else
                    <p class="quartile-orgnaztion-details top-quartile organization-results-quartile"><span class="quartile-first-part">TOP</span> <br> <span class="quartile-second-part">QUARTILE</span></p>
                @endif

                <div class="quartile-orgnaztion-details-left-column" style="background-color: white">
                    @if(number_format((($focus_result_employee[0]['value'] + $focus_result_employee[1]['value']) / 2), 0) <= 25)
                        <img class="state-color-image" src="{{ public_path('red overall score.png') }}" alt="">
                    @elseif(number_format((($focus_result_employee[0]['value'] + $focus_result_employee[1]['value']) / 2), 0) <= 50)
                        <img class="state-color-image" src="{{ public_path('orange overall score.png') }}" alt="">
                    @elseif(number_format((($focus_result_employee[0]['value'] + $focus_result_employee[1]['value']) / 2), 0) <= 80)
                        <img class="state-color-image" src="{{ public_path('yellow overall score.png') }}" alt="">
                    @else
                        <img class="state-color-image" src="{{ public_path('top overall score.png') }}" alt="">
                    @endif
                    <img class="stats-picture" src=" {{public_path('employee.png')}}" alt="">
                </div>

                    <!-- Start of External -->
                <div class="quartile-orgnaztion-details-right-column">
                    <div class="inside-focus-result">
                        <div class="inside-focus-result-header @if($focus_result_employee[1]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[1]['value'] <= 50) third-quartile @elseif($focus_result_employee[1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <h3 class="inside-focus-result-header-text">INSIDE</h3>
                            <h3 class="inside-focus-result-header-number">{{number_format($focus_result_employee[1]['value'],0);}}</h3>
                        </div>
                        <div class="inside-focus-result-accountability @if($focus_result_employee[1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_employee[1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-accountability-text">{{ $focus_result_employee[1]['dimensional_results'][0]['key']; }}</p>
                            <p class="inside-focuse-result-accountability-number">{{ number_format($focus_result_employee[1]['dimensional_results'][0]['value'] ,0); }}</p>
                        </div>
                        <div class="inside-focus-result-leadership @if($focus_result_employee[1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_employee[1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-leadership-text">{{ $focus_result_employee[1]['dimensional_results'][1]['key']; }}</p>
                            <p class="inside-focus-result-leadership-number">{{ number_format($focus_result_employee[1]['dimensional_results'][1]['value'] ,0) }}</p>
                        </div>
                        <div>
                            <div class="responsibilities @if($focus_result_employee[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_employee[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="responsibilities-text">{{ $focus_result_employee[1]['dimensional_results'][0]['dimensional_results'][0]['key']; }}<span class="responsibilities-number">{{ number_format($focus_result_employee[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="trustworthiness @if($focus_result_employee[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_employee[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="turstworthiness-text">{{ $focus_result_employee[1]['dimensional_results'][0]['dimensional_results'][1]['key']; }}<span class="turstworthiness-number">{{ number_format($focus_result_employee[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</span></p>
                            </div>
                            <div class="commitment @if($focus_result_employee[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_employee[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="commitment-text">{{ $focus_result_employee[1]['dimensional_results'][0]['dimensional_results'][2]['key']; }} <span class="commitment-number">{{ number_format($focus_result_employee[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="democratic @if($focus_result_employee[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_employee[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="democratic-text">{{ $focus_result_employee[1]['dimensional_results'][1]['dimensional_results'][0]['key']; }}  <span class="democratic-number">{{  number_format($focus_result_employee[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0); }}</span> </p>
                            </div>
                            <div class="autocratic @if($focus_result_employee[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_employee[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="autocratic-text">{{ $focus_result_employee[1]['dimensional_results'][1]['dimensional_results'][1]['key']; }} <span class="autocratic-number">{{  number_format($focus_result_employee[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="transformational @if($focus_result_employee[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_employee[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="transformational-text">{{ $focus_result_employee[1]['dimensional_results'][1]['dimensional_results'][2]['key']; }} <span class="transformational-number">{{  number_format($focus_result_employee[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div class="inside-focus-result-working-environment  @if($focus_result_employee[1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_employee[1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-working-environment-text">{{ $focus_result_employee[1]['dimensional_results'][2]['key']; }}</p>
                            <p class="inside-focus-result-working-environment-number">{{ number_format($focus_result_employee[1]['dimensional_results'][2]['value'],0); }}</p>
                        </div>
                        <div class="inside-focus-result-motivation @if($focus_result_employee[1]['dimensional_results'][3]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[1]['dimensional_results'][3]['value'] <= 50) third-quartile @elseif($focus_result_employee[1]['dimensional_results'][3]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-motivation-text">{{ $focus_result_employee[1]['dimensional_results'][3]['key']; }}</p>
                            <p class="inside-focus-result-motivation-number">{{ number_format($focus_result_employee[1]['dimensional_results'][3]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="trusting @if($focus_result_employee[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_employee[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="trusting-text">{{ $focus_result_employee[1]['dimensional_results'][2]['dimensional_results'][0]['key']; }} <span class="trusting-number">{{ number_format($focus_result_employee[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="fairness @if($focus_result_employee[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_employee[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="fairness-text">{{ $focus_result_employee[1]['dimensional_results'][2]['dimensional_results'][1]['key']; }} <span class="fairness-number">{{ number_format($focus_result_employee[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="respect @if($focus_result_employee[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_employee[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="respect-text">{{ $focus_result_employee[1]['dimensional_results'][2]['dimensional_results'][2]['key']; }} <span class="respect-number">{{ number_format($focus_result_employee[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="reward @if($focus_result_employee[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_employee[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="reward-text">{{ $focus_result_employee[1]['dimensional_results'][3]['dimensional_results'][0]['key']; }} <span class="reward-number">{{ number_format($focus_result_employee[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="inspire @if($focus_result_employee[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_employee[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="inspire-text">{{$focus_result_employee[1]['dimensional_results'][3]['dimensional_results'][1]['key']; }}<span class="inspire-number">{{number_format($focus_result_employee[1]['dimensional_results'][3]['dimensional_results'][1]['value'] ,0);}}</span></p>
                            </div>
                            <div class="recognition @if($focus_result_employee[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_employee[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="recognition-text">{{$focus_result_employee[1]['dimensional_results'][3]['dimensional_results'][2]['key']; }} <span class="recognition-number">{{number_format($focus_result_employee[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="outside-focus-result">
                        <div class="inside-focus-result-header @if($focus_result_employee[0]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[0]['value'] <= 50) third-quartile @elseif($focus_result_employee[0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <h3 class="inside-focus-result-header-text">OUTSIDE</h3>
                            <h3 class="inside-focus-result-header-number">{{ number_format($focus_result_employee[0]['value'],0); }}</h3>
                        </div>
                        <div class="inside-focus-result-accountability @if($focus_result_employee[0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_employee[0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-accountability-text">{{ $focus_result_employee[0]['dimensional_results'][0]['key']; }}</p>
                            <p class="inside-focuse-result-accountability-number">{{ number_format($focus_result_employee[0]['dimensional_results'][0]['value'],0);}}</p>
                        </div>
                        <div class="inside-focus-result-leadership @if($focus_result_employee[0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[0]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_employee[0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-leadership-text">{{ $focus_result_employee[0]['dimensional_results'][1]['key']; }}</p>
                            <p class="inside-focus-result-leadership-number">{{ number_format($focus_result_employee[0]['dimensional_results'][1]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="responsibilities @if($focus_result_employee[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_employee[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="responsibilities-text">{{ $focus_result_employee[0]['dimensional_results'][0]['dimensional_results'][0]['key']; }}<span class="responsibilities-number" style="margin-left:110px">{{number_format($focus_result_employee[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="trustworthiness @if($focus_result_employee[0]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_employee[0]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="turstworthiness-text">{{ $focus_result_employee[0]['dimensional_results'][0]['dimensional_results'][1]['key']; }}<span class="turstworthiness-number" style="margin-left:110px">{{number_format($focus_result_employee[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="commitment @if($focus_result_employee[0]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_employee[0]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="commitment-text">{{ $focus_result_employee[0]['dimensional_results'][0]['dimensional_results'][2]['key']; }} <span class="commitment-number" style="margin-left:90px">{{ number_format($focus_result_employee[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="democratic @if($focus_result_employee[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_employee[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="democratic-text">{{ $focus_result_employee[0]['dimensional_results'][1]['dimensional_results'][0]['key']; }}  <span class="democratic-number" style="margin-left:80px">{{ number_format($focus_result_employee[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0); }}</span> </p>
                            </div>
                            <div class="autocratic @if($focus_result_employee[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_employee[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="autocratic-text">{{$focus_result_employee[0]['dimensional_results'][1]['dimensional_results'][1]['key'];}} <span class="autocratic-number" style="margin-left:80px">{{ number_format($focus_result_employee[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="transformational @if($focus_result_employee[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_employee[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="transformational-text">{{$focus_result_employee[0]['dimensional_results'][1]['dimensional_results'][2]['key'] }}<span class="transformational-number" style="margin-left: 90px;">{{ number_format($focus_result_employee[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div class="inside-focus-result-working-environment @if($focus_result_employee[0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[0]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_employee[0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-working-environment-text">External <br> Relation</p>
                            <p class="inside-focus-result-working-environment-number">{{number_format($focus_result_employee[0]['dimensional_results'][2]['value'],0) }}</p>
                        </div>
                        <div class="inside-focus-result-motivation @if($focus_result_employee[0]['dimensional_results'][3]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[0]['dimensional_results'][3]['value'] <= 50) third-quartile @elseif($focus_result_employee[0]['dimensional_results'][3]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-motivation-text">{{$focus_result_employee[0]['dimensional_results'][3]['key'] }}</p>
                            <p class="inside-focus-result-motivation-number">{{number_format($focus_result_employee[0]['dimensional_results'][3]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="trusting @if($focus_result_employee[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_employee[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="trusting-text">{{ $focus_result_employee[0]['dimensional_results'][2]['dimensional_results'][0]['key']; }}<span class="trusting-number" style="margin-left:90px">{{number_format($focus_result_employee[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="fairness  @if($focus_result_employee[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_employee[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="fairness-text">{{ $focus_result_employee[0]['dimensional_results'][2]['dimensional_results'][1]['key']; }} <span class="fairness-number" style="margin-left:75px">{{ number_format($focus_result_employee[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="respect  @if($focus_result_employee[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_employee[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="respect-text">{{ $focus_result_employee[0]['dimensional_results'][2]['dimensional_results'][2]['key']; }} <span class="respect-number">{{ number_format($focus_result_employee[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="reward @if($focus_result_employee[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_employee[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="reward-text">{{ $focus_result_employee[0]['dimensional_results'][3]['dimensional_results'][0]['key'];}} <span class="reward-number" style="margin-left: 110px;">{{ number_format($focus_result_employee[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="inspire @if($focus_result_employee[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_employee[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="inspire-text">{{ $focus_result_employee[0]['dimensional_results'][3]['dimensional_results'][1]['key']; }} <span class="inspire-number" style="margin-left: 90px;">{{ number_format($focus_result_employee[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</span></p>
                            </div>
                            <div class="recognition @if($focus_result_employee[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_employee[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_employee[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="recognition-text">{{ $focus_result_employee[0]['dimensional_results'][3]['dimensional_results'][2]['key'];}} <span class="recognition-number" style="margin-left: 70px;">{{ number_format($focus_result_employee[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</span></p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="quadrants" style="position: relative; top: -950px;">
                <span class="scale">Scale:</span>
                <div>
                    <span class="quadrant top-quartile"></span>
                    <span class="text-for-quartile">TOP QUARTILE</span>
                    <span class="quadrant second-quartile"></span>
                    <span class="text-for-quartile">SECOND QUARTILE</span>
                    <span class="quadrant third-quartile"></span>
                    <span class="text-for-quartile">THIRD QUARTILE</span>
                    <span class="quadrant bottom-quartile"></span>
                    <span class="text-for-quartile">BOTTOM QUARTILE</span>
                </div>
            </div>
        
        </div>  

        <div class="indicators-by-gender" style="position: relative; top: 7600px;">
            <p class="center-title title"> INDICATORS BY LEVEL </p>
    
            <table>
                <tr>
                    <th style="background-color: white;"> </th>
                    <th>OVERALL SCORE</th>
                    <th>{{ $focus_result[1]['dimensional_results'][0]['key']; }}</th>
                    <th>{{ $focus_result[1]['dimensional_results'][1]['key']; }}</th>
                    <th>{{ $focus_result[1]['dimensional_results'][2]['key']; }}</th>
                    <th>{{ $focus_result[1]['dimensional_results'][3]['key']; }}</th>
                    <th>{{ $focus_result[0]['dimensional_results'][0]['key']; }}</th>
                    <th>{{ $focus_result[0]['dimensional_results'][1]['key']; }}</th>
                    <th>{{ $focus_result[0]['dimensional_results'][2]['key']; }}</th>
                    <th>{{ $focus_result[0]['dimensional_results'][3]['key']; }}</th>
                </tr>
                <tr style="text-align: center;">
                    <td>OVERALL</td>
                    <td class="@if(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) <= 25) bottom-quartile @elseif(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) <= 50) third-quartile @elseif(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) <= 80) second-quartile @else top-quartile @endif">{{ number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0); }}</td>
                    <td class="@if(number_format($focus_result[1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[1]['dimensional_results'][0]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result[1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[1]['dimensional_results'][1]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result[1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[1]['dimensional_results'][2]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result[1]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[1]['dimensional_results'][3]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result[0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[0]['dimensional_results'][0]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result[0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[0]['dimensional_results'][1]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result[0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[0]['dimensional_results'][2]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result[0]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[0]['dimensional_results'][3]['value'],0); }}</td>
                </tr>
                <tr style="text-align: center;">
                    <td>TOP <br>
                    MANAGEMENT</td>
                    <td class="@if(number_format((($focus_result_top[0]['value'] + $focus_result_top[1]['value']) / 2), 0) <= 25) bottom-quartile @elseif(number_format((($focus_result_top[0]['value'] + $focus_result_top[1]['value']) / 2), 0) <= 50) third-quartile @elseif(number_format((($focus_result_top[0]['value'] + $focus_result_top[1]['value']) / 2), 0) <= 80) second-quartile @else top-quartile @endif">{{ number_format((($focus_result_top[0]['value'] + $focus_result_top[1]['value']) / 2), 0); }}</td>
                    <td class="@if(number_format($focus_result_top[1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_top[1]['dimensional_results'][0]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_top[1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_top[1]['dimensional_results'][1]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_top[1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_top[1]['dimensional_results'][2]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_top[1]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_top[1]['dimensional_results'][3]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_top[0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_top[0]['dimensional_results'][0]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_top[0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_top[0]['dimensional_results'][1]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_top[0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_top[0]['dimensional_results'][2]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_top[0]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_top[0]['dimensional_results'][3]['value'],0); }}</td>
                </tr>
                <tr style="text-align: center;">
                    <td>MIDDLE <br> 
                    MANAGEMENT</td>
                    <td class="@if(number_format((($focus_result_middle[0]['value'] + $focus_result_middle[1]['value']) / 2), 0) <= 25) bottom-quartile @elseif(number_format((($focus_result_middle[0]['value'] + $focus_result_middle[1]['value']) / 2), 0) <= 50) third-quartile @elseif(number_format((($focus_result_middle[0]['value'] + $focus_result_middle[1]['value']) / 2), 0) <= 80) second-quartile @else top-quartile @endif">{{ number_format((($focus_result_middle[0]['value'] + $focus_result_middle[1]['value']) / 2), 0); }}</td>
                    <td class="@if(number_format($focus_result_middle[1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_middle[1]['dimensional_results'][0]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_middle[1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_middle[1]['dimensional_results'][1]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_middle[1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_middle[1]['dimensional_results'][2]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_middle[1]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_middle[1]['dimensional_results'][3]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_middle[0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_middle[0]['dimensional_results'][0]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_middle[0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_middle[0]['dimensional_results'][1]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_middle[0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_middle[0]['dimensional_results'][2]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_middle[0]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_middle[0]['dimensional_results'][3]['value'],0); }}</td>
                </tr>
                <tr style="text-align: center;">
                    <td>EMPLOYEES</td>
                    <td class="@if(number_format((($focus_result_employee[0]['value'] + $focus_result_employee[1]['value']) / 2), 0) <= 25) bottom-quartile @elseif(number_format((($focus_result_employee[0]['value'] + $focus_result_employee[1]['value']) / 2), 0) <= 50) third-quartile @elseif(number_format((($focus_result_employee[0]['value'] + $focus_result_employee[1]['value']) / 2), 0) <= 80) second-quartile @else top-quartile @endif">{{ number_format((($focus_result_employee[0]['value'] + $focus_result_employee[1]['value']) / 2), 0); }}</td>
                    <td class="@if(number_format($focus_result_employee[1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_employee[1]['dimensional_results'][0]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_employee[1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_employee[1]['dimensional_results'][1]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_employee[1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_employee[1]['dimensional_results'][2]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_employee[1]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_employee[1]['dimensional_results'][3]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_employee[0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_employee[0]['dimensional_results'][0]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_employee[0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_employee[0]['dimensional_results'][1]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_employee[0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_employee[0]['dimensional_results'][2]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_employee[0]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_employee[0]['dimensional_results'][3]['value'],0); }}</td>
                </tr>
            </table>        
          
            <div class="quadrants">
                <span class="scale">Scale:</span>
                <div>
                    <span class="quadrant top-quartile"></span>
                    <span class="text-for-quartile">TOP QUARTILE</span>
                    <span class="quadrant second-quartile"></span>
                    <span class="text-for-quartile">SECOND QUARTILE</span>
                    <span class="quadrant third-quartile"></span>
                    <span class="text-for-quartile">THIRD QUARTILE</span>
                    <span class="quadrant bottom-quartile"></span>
                    <span class="text-for-quartile">BOTTOM QUARTILE</span>
                </div>
            </div>
        </div>


        <div class="practices-by-gender" style="position: relative; top: 9000px;">
            <p class="center-title title"> PRACTICES BY LEVEL </p>
            <table>
                <tr>
                    <th>INDICATOR</th>
                    <th>PRACTICE</th>
                    <th>OVERALL SCORE</th>
                    <th>TOP <br>MANAGEMENT</th>
                    <th>MIDDLE <br> MANAGEMENT</th>
                    <th>EMPLOYEES </th>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[1]['dimensional_results'][0]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[1]['dimensional_results'][0]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[1]['dimensional_results'][0]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[1]['dimensional_results'][0]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_top[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_top[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_top[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_top[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_top[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_top[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_middle[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_middle[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_middle[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_middle[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_middle[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_middle[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_employee[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_employee[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_employee[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_employee[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_employee[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_employee[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[1]['dimensional_results'][1]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[1]['dimensional_results'][1]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[1]['dimensional_results'][1]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[1]['dimensional_results'][1]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_top[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_top[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_top[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_top[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_top[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_top[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_middle[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_middle[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_middle[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_middle[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_middle[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_middle[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_employee[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_employee[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_employee[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_employee[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_employee[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_employee[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[1]['dimensional_results'][2]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[1]['dimensional_results'][2]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[1]['dimensional_results'][2]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[1]['dimensional_results'][2]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_top[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_top[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_top[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_top[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_top[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_top[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_middle[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_middle[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_middle[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_middle[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_middle[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_middle[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_employee[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_employee[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_employee[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_employee[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_employee[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_employee[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[1]['dimensional_results'][3]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[1]['dimensional_results'][3]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[1]['dimensional_results'][3]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[1]['dimensional_results'][3]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_top[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_top[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_top[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_top[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_top[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_top[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_middle[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_middle[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_middle[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_middle[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_middle[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_middle[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_employee[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_employee[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_employee[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_employee[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_employee[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_employee[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[0]['dimensional_results'][0]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[0]['dimensional_results'][0]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[0]['dimensional_results'][0]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[0]['dimensional_results'][0]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_top[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_top[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_top[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_top[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_top[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_top[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_middle[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_middle[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_middle[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_middle[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_middle[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_middle[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_employee[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_employee[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_employee[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_employee[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_employee[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_employee[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[0]['dimensional_results'][1]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[0]['dimensional_results'][1]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[0]['dimensional_results'][1]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[0]['dimensional_results'][1]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_top[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_top[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_top[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_top[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_top[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_top[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_middle[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_middle[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_middle[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_middle[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_middle[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_middle[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_employee[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_employee[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_employee[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_employee[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_employee[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_employee[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[0]['dimensional_results'][2]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[0]['dimensional_results'][2]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[0]['dimensional_results'][2]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[0]['dimensional_results'][2]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_top[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_top[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_top[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_top[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_top[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_top[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_middle[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_middle[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_middle[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_middle[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_middle[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_middle[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_employee[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_employee[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_employee[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_employee[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_employee[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_employee[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[0]['dimensional_results'][3]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[0]['dimensional_results'][3]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[0]['dimensional_results'][3]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[0]['dimensional_results'][3]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_top[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_top[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_top[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_top[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_top[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_top[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_top[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_middle[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_middle[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_middle[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_middle[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_middle[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_middle[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_middle[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_employee[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_employee[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_employee[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_employee[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_employee[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_employee[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_employee[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
            </table>
            <div class="quadrants">
                <span class="scale">Scale:</span>
                <div>
                    <span class="quadrant top-quartile"></span>
                    <span class="text-for-quartile">TOP QUARTILE</span>
                    <span class="quadrant second-quartile"></span>
                    <span class="text-for-quartile">SECOND QUARTILE</span>
                    <span class="quadrant third-quartile"></span>
                    <span class="text-for-quartile">THIRD QUARTILE</span>
                    <span class="quadrant bottom-quartile"></span>
                    <span class="text-for-quartile">BOTTOM QUARTILE</span>
                </div>
            </div>
        </div>

        <div class="center-title" style="position: relative; top: 10000px;">
            <h1 class="custom-title">HIGHEST AND LOWEST 5 PRACTICES</h1>
                <h3 class="heading" style="position: relative; left:-440px; top:170px">OVERALL OHX-RAY <br> SCORE</h3>
                <h3 class="heading" style="position: relative; left:-140px; top:110px;">TOP <br> MANAGEMENT</h3>
                <h3 class="heading" style="position: relative; left:750px; top:50px; width:180px;">MDDLE MANAGMEMENT</h3> 
                <h3 class="heading" style="position: relative; left:1010px; width:180px;">EMPLOYEES</h3> 
            <div class="final-row" style="margin-bottom: 100px;">
                <ul class="final-col" >
                    @for($i = 0; $i < 5;$i++) 
                        <li class="final-item @if($sort_results[$i]['value'] <= 25) bottom-quartile @elseif($sort_results[$i]['value'] <= 50) third-quartile @elseif($sort_results[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                            {{$sort_results[$i]['key']}}
                            <span class="grade">{{ number_format($sort_results[$i]['value'],0); }}</span>
                        </li>
                    @endfor
                </ul>
                <ul class="final-col" >
                    @for($i = 0; $i < 5;$i++) 
                        <li class="final-item @if($sort_results_top[$i]['value'] <= 25) bottom-quartile @elseif($sort_results_top[$i]['value'] <= 50) third-quartile @elseif($sort_results_top[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                            {{$sort_results_top[$i]['key']}}
                            <span class="grade">{{ number_format($sort_results_top[$i]['value'],0); }}</span>
                        </li>
                    @endfor
                </ul>
                <ul class="final-col">
                    @for($i = 0; $i < 5;$i++) 
                        <li class="final-item @if($sort_results_middle[$i]['value'] <= 25) bottom-quartile @elseif($sort_results_middle[$i]['value'] <= 50) third-quartile @elseif($sort_results_middle[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                            {{$sort_results_middle[$i]['key']}}
                            <span class="grade">{{ number_format($sort_results_middle[$i]['value'],0); }}</span>
                        </li>
                    @endfor
                </ul>
                <ul class="final-col">
                    @for($i = 0; $i < 5;$i++) 
                        <li class="final-item @if($sort_results_employee[$i]['value'] <= 25) bottom-quartile @elseif($sort_results_employee[$i]['value'] <= 50) third-quartile @elseif($sort_results_employee[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                            {{$sort_results_employee[$i]['key']}}
                            <span class="grade">{{ number_format($sort_results_employee[$i]['value'],0); }}</span>
                        </li>
                    @endfor
                </ul>
            </div>
            <div class="final-row" >
                <ul class="final-col">
                    @for($i = 23; $i>18;$i--)
                        <li class="final-item @if($sort_results[$i]['value'] <= 25) bottom-quartile @elseif($sort_results[$i]['value'] <= 50) third-quartile @elseif($sort_results[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                            {{$sort_results[$i]['key']}}
                            <span class="grade">{{ number_format($sort_results[$i]['value'],0); }}</span>
                        </li>
                    @endfor
                </ul>
                <ul class="final-col">
                    @for($i = 23; $i>18;$i--)
                        <li class="final-item @if($sort_results_top[$i]['value'] <= 25) bottom-quartile @elseif($sort_results_top[$i]['value'] <= 50) third-quartile @elseif($sort_results_top[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                            {{$sort_results_top[$i]['key']}}
                            <span class="grade">{{ number_format($sort_results_top[$i]['value'],0); }}</span>
                        </li>
                    @endfor
                </ul>
                <ul class="final-col">
                    @for($i = 23; $i>18;$i--)
                        <li class="final-item @if($sort_results_middle[$i]['value'] <= 25) bottom-quartile @elseif($sort_results_middle[$i]['value'] <= 50) third-quartile @elseif($sort_results_middle[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                            {{$sort_results_middle[$i]['key']}}
                            <span class="grade">{{ number_format($sort_results_middle[$i]['value'],0); }}</span>
                        </li>
                    @endfor
                </ul>
                <ul class="final-col">
                    @for($i = 23; $i>18;$i--)
                        <li class="final-item @if($sort_results_employee[$i]['value'] <= 25) bottom-quartile @elseif($sort_results_employee[$i]['value'] <= 50) third-quartile @elseif($sort_results_employee[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                            {{$sort_results_employee[$i]['key']}}
                            <span class="grade">{{ number_format($sort_results_employee[$i]['value'],0); }}</span>
                        </li>
                    @endfor
                </ul>
            </div>
            <div class="quadrants">
                <span class="scale">Scale:</span>
                <div>
                    <span class="quadrant top-quartile"></span>
                    <span class="text-for-quartile">TOP QUARTILE</span>
                    <span class="quadrant second-quartile"></span>
                    <span class="text-for-quartile">SECOND QUARTILE</span>
                    <span class="quadrant third-quartile"></span>
                    <span class="text-for-quartile">THIRD QUARTILE</span>
                    <span class="quadrant bottom-quartile"></span>
                    <span class="text-for-quartile">BOTTOM QUARTILE</span>
                </div>
            </div>
        </div>

        <div id="by-age" style="position: relative; top:13000px; left:40px;">
            <img src="{{ public_path('by-age.png')}}" alt="">
        </div>

        <div class="" style="position: relative; top:14380px; left:40px;">
            <p class="center-title title">AGE<= 25 YEARS HEALTH IMAGE</p>
            <div class="organization-results-container">
                @if(number_format((($focus_result_25[0]['value'] + $focus_result_25[1]['value']) / 2), 0) <= 25)
                    <p class="quartile-orgnaztion-details bottom-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_25[0]['value'] + $focus_result_25[1]['value']) / 2), 0)}}</span></p>
                @elseif(number_format((($focus_result_25[0]['value'] + $focus_result_25[1]['value']) / 2), 0) <= 50)
                    <p class="quartile-orgnaztion-details third-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_25[0]['value'] + $focus_result_25[1]['value']) / 2), 0)}}</span></p>
                @elseif(number_format((($focus_result_25[0]['value'] + $focus_result_25[1]['value']) / 2), 0) <= 80)
                    <p class="quartile-orgnaztion-details second-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_25[0]['value'] + $focus_result_25[1]['value']) / 2), 0)}}</span></p>
                @else
                    <p class="quartile-orgnaztion-details top-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_25[0]['value'] + $focus_result_25[1]['value']) / 2), 0)}}</span></p>
                @endif
        
                @if(number_format((($focus_result_25[0]['value'] + $focus_result_25[1]['value']) / 2), 0) <= 25)
                    <p class="quartile-orgnaztion-details bottom-quartile organization-results-quartile"><span class="quartile-first-part">BOTTOM</span> <span class="quartile-second-part">QUARTILE</span></p>
                @elseif(number_format((($focus_result_25[0]['value'] + $focus_result_25[1]['value']) / 2), 0) <= 50)
                    <p class="quartile-orgnaztion-details third-quartile organization-results-quartile"><span class="quartile-first-part">THIRD</span> <span class="quartile-second-part">QUARTILE</span></p>
                @elseif(number_format((($focus_result_25[0]['value'] + $focus_result_25[1]['value']) / 2), 0) <= 80)
                    <p class="quartile-orgnaztion-details second-quartile organization-results-quartile"><span class="quartile-first-part">SECOND</span> <span class="quartile-second-part">QUARTILE</span></p>
                @else
                    <p class="quartile-orgnaztion-details top-quartile organization-results-quartile"><span class="quartile-first-part">TOP</span> <br> <span class="quartile-second-part">QUARTILE</span></p>
                @endif

                <div class="quartile-orgnaztion-details-left-column" style="background-color: white">
                    @if(number_format((($focus_result_25[0]['value'] + $focus_result_25[1]['value']) / 2), 0) <= 25)
                        <img class="state-color-image" src="{{ public_path('red overall score.png') }}" alt="">
                    @elseif(number_format((($focus_result_25[0]['value'] + $focus_result_25[1]['value']) / 2), 0) <= 50)
                        <img class="state-color-image" src="{{ public_path('orange overall score.png') }}" alt="">
                    @elseif(number_format((($focus_result_25[0]['value'] + $focus_result_25[1]['value']) / 2), 0) <= 80)
                        <img class="state-color-image" src="{{ public_path('yellow overall score.png') }}" alt="">
                    @else
                        <img class="state-color-image" src="{{ public_path('top overall score.png') }}" alt="">
                    @endif
                    <img class="stats-picture" src=" {{public_path('age 25.png')}}" alt="">
                </div>

                    <!-- Start of External -->
                <div class="quartile-orgnaztion-details-right-column">
                    <div class="inside-focus-result">
                        <div class="inside-focus-result-header @if($focus_result_25[1]['value'] <= 25) bottom-quartile @elseif($focus_result_25[1]['value'] <= 50) third-quartile @elseif($focus_result_25[1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <h3 class="inside-focus-result-header-text">INSIDE</h3>
                            <h3 class="inside-focus-result-header-number">{{number_format($focus_result_25[1]['value'],0);}}</h3>
                        </div>
                        <div class="inside-focus-result-accountability @if($focus_result_25[1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_25[1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_25[1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-accountability-text">{{ $focus_result_25[1]['dimensional_results'][0]['key']; }}</p>
                            <p class="inside-focuse-result-accountability-number">{{ number_format($focus_result_25[1]['dimensional_results'][0]['value'] ,0); }}</p>
                        </div>
                        <div class="inside-focus-result-leadership @if($focus_result_25[1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_25[1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_25[1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-leadership-text">{{ $focus_result_25[1]['dimensional_results'][1]['key']; }}</p>
                            <p class="inside-focus-result-leadership-number">{{ number_format($focus_result_25[1]['dimensional_results'][1]['value'] ,0) }}</p>
                        </div>
                        <div>
                            <div class="responsibilities @if($focus_result_25[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_25[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_25[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="responsibilities-text">{{ $focus_result_25[1]['dimensional_results'][0]['dimensional_results'][0]['key']; }}<span class="responsibilities-number">{{ number_format($focus_result_25[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="trustworthiness @if($focus_result_25[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_25[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_25[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="turstworthiness-text">{{ $focus_result_25[1]['dimensional_results'][0]['dimensional_results'][1]['key']; }}<span class="turstworthiness-number">{{ number_format($focus_result_25[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</span></p>
                            </div>
                            <div class="commitment @if($focus_result_25[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_25[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_25[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="commitment-text">{{ $focus_result_25[1]['dimensional_results'][0]['dimensional_results'][2]['key']; }} <span class="commitment-number">{{ number_format($focus_result_25[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="democratic @if($focus_result_25[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_25[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_25[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="democratic-text">{{ $focus_result_25[1]['dimensional_results'][1]['dimensional_results'][0]['key']; }}  <span class="democratic-number">{{  number_format($focus_result_25[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0); }}</span> </p>
                            </div>
                            <div class="autocratic @if($focus_result_25[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_25[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_25[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="autocratic-text">{{ $focus_result_25[1]['dimensional_results'][1]['dimensional_results'][1]['key']; }} <span class="autocratic-number">{{  number_format($focus_result_25[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="transformational @if($focus_result_25[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_25[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_25[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="transformational-text">{{ $focus_result_25[1]['dimensional_results'][1]['dimensional_results'][2]['key']; }} <span class="transformational-number">{{  number_format($focus_result_25[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div class="inside-focus-result-working-environment  @if($focus_result_25[1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_25[1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_25[1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-working-environment-text">{{ $focus_result_25[1]['dimensional_results'][2]['key']; }}</p>
                            <p class="inside-focus-result-working-environment-number">{{ number_format($focus_result_25[1]['dimensional_results'][2]['value'],0); }}</p>
                        </div>
                        <div class="inside-focus-result-motivation @if($focus_result_25[1]['dimensional_results'][3]['value'] <= 25) bottom-quartile @elseif($focus_result_25[1]['dimensional_results'][3]['value'] <= 50) third-quartile @elseif($focus_result_25[1]['dimensional_results'][3]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-motivation-text">{{ $focus_result_25[1]['dimensional_results'][3]['key']; }}</p>
                            <p class="inside-focus-result-motivation-number">{{ number_format($focus_result_25[1]['dimensional_results'][3]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="trusting @if($focus_result_25[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_25[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_25[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="trusting-text">{{ $focus_result_25[1]['dimensional_results'][2]['dimensional_results'][0]['key']; }} <span class="trusting-number">{{ number_format($focus_result_25[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="fairness @if($focus_result_25[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_25[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_25[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="fairness-text">{{ $focus_result_25[1]['dimensional_results'][2]['dimensional_results'][1]['key']; }} <span class="fairness-number">{{ number_format($focus_result_25[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="respect @if($focus_result_25[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_25[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_25[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="respect-text">{{ $focus_result_25[1]['dimensional_results'][2]['dimensional_results'][2]['key']; }} <span class="respect-number">{{ number_format($focus_result_25[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="reward @if($focus_result_25[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_25[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_25[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="reward-text">{{ $focus_result_25[1]['dimensional_results'][3]['dimensional_results'][0]['key']; }} <span class="reward-number">{{ number_format($focus_result_25[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="inspire @if($focus_result_25[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_25[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_25[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="inspire-text">{{$focus_result_25[1]['dimensional_results'][3]['dimensional_results'][1]['key']; }}<span class="inspire-number">{{number_format($focus_result_25[1]['dimensional_results'][3]['dimensional_results'][1]['value'] ,0);}}</span></p>
                            </div>
                            <div class="recognition @if($focus_result_25[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_25[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_25[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="recognition-text">{{$focus_result_25[1]['dimensional_results'][3]['dimensional_results'][2]['key']; }} <span class="recognition-number">{{number_format($focus_result_25[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="outside-focus-result">
                        <div class="inside-focus-result-header @if($focus_result_25[0]['value'] <= 25) bottom-quartile @elseif($focus_result_25[0]['value'] <= 50) third-quartile @elseif($focus_result_25[0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <h3 class="inside-focus-result-header-text">OUTSIDE</h3>
                            <h3 class="inside-focus-result-header-number">{{ number_format($focus_result_25[0]['value'],0); }}</h3>
                        </div>
                        <div class="inside-focus-result-accountability @if($focus_result_25[0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_25[0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_25[0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-accountability-text">{{ $focus_result_25[0]['dimensional_results'][0]['key']; }}</p>
                            <p class="inside-focuse-result-accountability-number">{{ number_format($focus_result_25[0]['dimensional_results'][0]['value'],0);}}</p>
                        </div>
                        <div class="inside-focus-result-leadership @if($focus_result_25[0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_25[0]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_25[0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-leadership-text">{{ $focus_result_25[0]['dimensional_results'][1]['key']; }}</p>
                            <p class="inside-focus-result-leadership-number">{{ number_format($focus_result_25[0]['dimensional_results'][1]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="responsibilities @if($focus_result_25[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_25[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_25[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="responsibilities-text">{{ $focus_result_25[0]['dimensional_results'][0]['dimensional_results'][0]['key']; }}<span class="responsibilities-number" style="margin-left:110px">{{number_format($focus_result_25[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="trustworthiness @if($focus_result_25[0]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_25[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_25[0]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="turstworthiness-text">{{ $focus_result_25[0]['dimensional_results'][0]['dimensional_results'][1]['key']; }}<span class="turstworthiness-number" style="margin-left:110px">{{number_format($focus_result_25[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="commitment @if($focus_result_25[0]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_25[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_25[0]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="commitment-text">{{ $focus_result_25[0]['dimensional_results'][0]['dimensional_results'][2]['key']; }} <span class="commitment-number" style="margin-left:90px">{{ number_format($focus_result_25[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="democratic @if($focus_result_25[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_25[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_25[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="democratic-text">{{ $focus_result_25[0]['dimensional_results'][1]['dimensional_results'][0]['key']; }}  <span class="democratic-number" style="margin-left:80px">{{ number_format($focus_result_25[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0); }}</span> </p>
                            </div>
                            <div class="autocratic @if($focus_result_25[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_25[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_25[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="autocratic-text">{{$focus_result_25[0]['dimensional_results'][1]['dimensional_results'][1]['key'];}} <span class="autocratic-number" style="margin-left:80px">{{ number_format($focus_result_25[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="transformational @if($focus_result_25[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_25[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_25[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="transformational-text">{{$focus_result_25[0]['dimensional_results'][1]['dimensional_results'][2]['key'] }}<span class="transformational-number" style="margin-left: 90px;">{{ number_format($focus_result_25[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div class="inside-focus-result-working-environment @if($focus_result_25[0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_25[0]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_25[0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-working-environment-text">External <br> Relation</p>
                            <p class="inside-focus-result-working-environment-number">{{number_format($focus_result_25[0]['dimensional_results'][2]['value'],0) }}</p>
                        </div>
                        <div class="inside-focus-result-motivation @if($focus_result_25[0]['dimensional_results'][3]['value'] <= 25) bottom-quartile @elseif($focus_result_25[0]['dimensional_results'][3]['value'] <= 50) third-quartile @elseif($focus_result_25[0]['dimensional_results'][3]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-motivation-text">{{$focus_result_25[0]['dimensional_results'][3]['key'] }}</p>
                            <p class="inside-focus-result-motivation-number">{{number_format($focus_result_25[0]['dimensional_results'][3]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="trusting @if($focus_result_25[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_25[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_25[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="trusting-text">{{ $focus_result_25[0]['dimensional_results'][2]['dimensional_results'][0]['key']; }}<span class="trusting-number" style="margin-left:90px">{{number_format($focus_result_25[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="fairness  @if($focus_result_25[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_25[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_25[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="fairness-text">{{ $focus_result_25[0]['dimensional_results'][2]['dimensional_results'][1]['key']; }} <span class="fairness-number" style="margin-left:75px">{{ number_format($focus_result_25[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="respect  @if($focus_result_25[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_25[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_25[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="respect-text">{{ $focus_result_25[0]['dimensional_results'][2]['dimensional_results'][2]['key']; }} <span class="respect-number">{{ number_format($focus_result_25[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="reward @if($focus_result_25[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_25[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_25[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="reward-text">{{ $focus_result_25[0]['dimensional_results'][3]['dimensional_results'][0]['key'];}} <span class="reward-number" style="margin-left: 110px;">{{ number_format($focus_result_25[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="inspire @if($focus_result_25[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_25[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_25[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="inspire-text">{{ $focus_result_25[0]['dimensional_results'][3]['dimensional_results'][1]['key']; }} <span class="inspire-number" style="margin-left: 90px;">{{ number_format($focus_result_25[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</span></p>
                            </div>
                            <div class="recognition @if($focus_result_25[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_25[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_25[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="recognition-text">{{ $focus_result_25[0]['dimensional_results'][3]['dimensional_results'][2]['key'];}} <span class="recognition-number" style="margin-left: 70px;">{{ number_format($focus_result_25[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</span></p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="quadrants" style="position: relative; top: -950px;">
                <span class="scale">Scale:</span>
                <div>
                    <span class="quadrant top-quartile"></span>
                    <span class="text-for-quartile">TOP QUARTILE</span>
                    <span class="quadrant second-quartile"></span>
                    <span class="text-for-quartile">SECOND QUARTILE</span>
                    <span class="quadrant third-quartile"></span>
                    <span class="text-for-quartile">THIRD QUARTILE</span>
                    <span class="quadrant bottom-quartile"></span>
                    <span class="text-for-quartile">BOTTOM QUARTILE</span>
                </div>
            </div>
        
        </div>  


        <div class="" style="position: relative; top:14600px; left:40px;">
            <p class="center-title title">26-34 AGE HEALTH IMAGE</p>
            <div class="organization-results-container">
                @if(number_format((($focus_result_26_34[0]['value'] + $focus_result_26_34[1]['value']) / 2), 0) <= 25)
                    <p class="quartile-orgnaztion-details bottom-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_26_34[0]['value'] + $focus_result_26_34[1]['value']) / 2), 0)}}</span></p>
                @elseif(number_format((($focus_result_26_34[0]['value'] + $focus_result_26_34[1]['value']) / 2), 0) <= 50)
                    <p class="quartile-orgnaztion-details third-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_26_34[0]['value'] + $focus_result_26_34[1]['value']) / 2), 0)}}</span></p>
                @elseif(number_format((($focus_result_26_34[0]['value'] + $focus_result_26_34[1]['value']) / 2), 0) <= 80)
                    <p class="quartile-orgnaztion-details second-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_26_34[0]['value'] + $focus_result_26_34[1]['value']) / 2), 0)}}</span></p>
                @else
                    <p class="quartile-orgnaztion-details top-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_26_34[0]['value'] + $focus_result_26_34[1]['value']) / 2), 0)}}</span></p>
                @endif
        
                @if(number_format((($focus_result_26_34[0]['value'] + $focus_result_26_34[1]['value']) / 2), 0) <= 25)
                    <p class="quartile-orgnaztion-details bottom-quartile organization-results-quartile"><span class="quartile-first-part">BOTTOM</span> <span class="quartile-second-part">QUARTILE</span></p>
                @elseif(number_format((($focus_result_26_34[0]['value'] + $focus_result_26_34[1]['value']) / 2), 0) <= 50)
                    <p class="quartile-orgnaztion-details third-quartile organization-results-quartile"><span class="quartile-first-part">THIRD</span> <span class="quartile-second-part">QUARTILE</span></p>
                @elseif(number_format((($focus_result_26_34[0]['value'] + $focus_result_26_34[1]['value']) / 2), 0) <= 80)
                    <p class="quartile-orgnaztion-details second-quartile organization-results-quartile"><span class="quartile-first-part">SECOND</span> <span class="quartile-second-part">QUARTILE</span></p>
                @else
                    <p class="quartile-orgnaztion-details top-quartile organization-results-quartile"><span class="quartile-first-part">TOP</span> <br> <span class="quartile-second-part">QUARTILE</span></p>
                @endif

                <div class="quartile-orgnaztion-details-left-column" style="background-color: white">
                    @if(number_format((($focus_result_26_34[0]['value'] + $focus_result_26_34[1]['value']) / 2), 0) <= 25)
                        <img class="state-color-image" src="{{ public_path('red overall score.png') }}" alt="">
                    @elseif(number_format((($focus_result_26_34[0]['value'] + $focus_result_26_34[1]['value']) / 2), 0) <= 50)
                        <img class="state-color-image" src="{{ public_path('orange overall score.png') }}" alt="">
                    @elseif(number_format((($focus_result_26_34[0]['value'] + $focus_result_26_34[1]['value']) / 2), 0) <= 80)
                        <img class="state-color-image" src="{{ public_path('yellow overall score.png') }}" alt="">
                    @else
                        <img class="state-color-image" src="{{ public_path('top overall score.png') }}" alt="">
                    @endif
                    <img class="stats-picture" src=" {{public_path('age 26-34.png')}}" alt="">
                </div>

                    <!-- Start of External -->
                <div class="quartile-orgnaztion-details-right-column">
                    <div class="inside-focus-result">
                        <div class="inside-focus-result-header @if($focus_result_26_34[1]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[1]['value'] <= 50) third-quartile @elseif($focus_result_26_34[1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <h3 class="inside-focus-result-header-text">INSIDE</h3>
                            <h3 class="inside-focus-result-header-number">{{number_format($focus_result_26_34[1]['value'],0);}}</h3>
                        </div>
                        <div class="inside-focus-result-accountability @if($focus_result_26_34[1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_26_34[1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-accountability-text">{{ $focus_result_26_34[1]['dimensional_results'][0]['key']; }}</p>
                            <p class="inside-focuse-result-accountability-number">{{ number_format($focus_result_26_34[1]['dimensional_results'][0]['value'] ,0); }}</p>
                        </div>
                        <div class="inside-focus-result-leadership @if($focus_result_26_34[1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_26_34[1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-leadership-text">{{ $focus_result_26_34[1]['dimensional_results'][1]['key']; }}</p>
                            <p class="inside-focus-result-leadership-number">{{ number_format($focus_result_26_34[1]['dimensional_results'][1]['value'] ,0) }}</p>
                        </div>
                        <div>
                            <div class="responsibilities @if($focus_result_26_34[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_26_34[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="responsibilities-text">{{ $focus_result_26_34[1]['dimensional_results'][0]['dimensional_results'][0]['key']; }}<span class="responsibilities-number">{{ number_format($focus_result_26_34[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="trustworthiness @if($focus_result_26_34[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_26_34[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="turstworthiness-text">{{ $focus_result_26_34[1]['dimensional_results'][0]['dimensional_results'][1]['key']; }}<span class="turstworthiness-number">{{ number_format($focus_result_26_34[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</span></p>
                            </div>
                            <div class="commitment @if($focus_result_26_34[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_26_34[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="commitment-text">{{ $focus_result_26_34[1]['dimensional_results'][0]['dimensional_results'][2]['key']; }} <span class="commitment-number">{{ number_format($focus_result_26_34[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="democratic @if($focus_result_26_34[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_26_34[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="democratic-text">{{ $focus_result_26_34[1]['dimensional_results'][1]['dimensional_results'][0]['key']; }}  <span class="democratic-number">{{  number_format($focus_result_26_34[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0); }}</span> </p>
                            </div>
                            <div class="autocratic @if($focus_result_26_34[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_26_34[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="autocratic-text">{{ $focus_result_26_34[1]['dimensional_results'][1]['dimensional_results'][1]['key']; }} <span class="autocratic-number">{{  number_format($focus_result_26_34[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="transformational @if($focus_result_26_34[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_26_34[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="transformational-text">{{ $focus_result_26_34[1]['dimensional_results'][1]['dimensional_results'][2]['key']; }} <span class="transformational-number">{{  number_format($focus_result_26_34[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div class="inside-focus-result-working-environment  @if($focus_result_26_34[1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_26_34[1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-working-environment-text">{{ $focus_result_26_34[1]['dimensional_results'][2]['key']; }}</p>
                            <p class="inside-focus-result-working-environment-number">{{ number_format($focus_result_26_34[1]['dimensional_results'][2]['value'],0); }}</p>
                        </div>
                        <div class="inside-focus-result-motivation @if($focus_result_26_34[1]['dimensional_results'][3]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[1]['dimensional_results'][3]['value'] <= 50) third-quartile @elseif($focus_result_26_34[1]['dimensional_results'][3]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-motivation-text">{{ $focus_result_26_34[1]['dimensional_results'][3]['key']; }}</p>
                            <p class="inside-focus-result-motivation-number">{{ number_format($focus_result_26_34[1]['dimensional_results'][3]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="trusting @if($focus_result_26_34[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_26_34[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="trusting-text">{{ $focus_result_26_34[1]['dimensional_results'][2]['dimensional_results'][0]['key']; }} <span class="trusting-number">{{ number_format($focus_result_26_34[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="fairness @if($focus_result_26_34[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_26_34[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="fairness-text">{{ $focus_result_26_34[1]['dimensional_results'][2]['dimensional_results'][1]['key']; }} <span class="fairness-number">{{ number_format($focus_result_26_34[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="respect @if($focus_result_26_34[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_26_34[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="respect-text">{{ $focus_result_26_34[1]['dimensional_results'][2]['dimensional_results'][2]['key']; }} <span class="respect-number">{{ number_format($focus_result_26_34[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="reward @if($focus_result_26_34[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_26_34[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="reward-text">{{ $focus_result_26_34[1]['dimensional_results'][3]['dimensional_results'][0]['key']; }} <span class="reward-number">{{ number_format($focus_result_26_34[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="inspire @if($focus_result_26_34[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_26_34[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="inspire-text">{{$focus_result_26_34[1]['dimensional_results'][3]['dimensional_results'][1]['key']; }}<span class="inspire-number">{{number_format($focus_result_26_34[1]['dimensional_results'][3]['dimensional_results'][1]['value'] ,0);}}</span></p>
                            </div>
                            <div class="recognition @if($focus_result_26_34[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_26_34[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="recognition-text">{{$focus_result_26_34[1]['dimensional_results'][3]['dimensional_results'][2]['key']; }} <span class="recognition-number">{{number_format($focus_result_26_34[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="outside-focus-result">
                        <div class="inside-focus-result-header @if($focus_result_26_34[0]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[0]['value'] <= 50) third-quartile @elseif($focus_result_26_34[0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <h3 class="inside-focus-result-header-text">OUTSIDE</h3>
                            <h3 class="inside-focus-result-header-number">{{ number_format($focus_result_26_34[0]['value'],0); }}</h3>
                        </div>
                        <div class="inside-focus-result-accountability @if($focus_result_26_34[0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_26_34[0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-accountability-text">{{ $focus_result_26_34[0]['dimensional_results'][0]['key']; }}</p>
                            <p class="inside-focuse-result-accountability-number">{{ number_format($focus_result_26_34[0]['dimensional_results'][0]['value'],0);}}</p>
                        </div>
                        <div class="inside-focus-result-leadership @if($focus_result_26_34[0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[0]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_26_34[0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-leadership-text">{{ $focus_result_26_34[0]['dimensional_results'][1]['key']; }}</p>
                            <p class="inside-focus-result-leadership-number">{{ number_format($focus_result_26_34[0]['dimensional_results'][1]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="responsibilities @if($focus_result_26_34[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_26_34[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="responsibilities-text">{{ $focus_result_26_34[0]['dimensional_results'][0]['dimensional_results'][0]['key']; }}<span class="responsibilities-number" style="margin-left:110px">{{number_format($focus_result_26_34[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="trustworthiness @if($focus_result_26_34[0]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_26_34[0]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="turstworthiness-text">{{ $focus_result_26_34[0]['dimensional_results'][0]['dimensional_results'][1]['key']; }}<span class="turstworthiness-number" style="margin-left:110px">{{number_format($focus_result_26_34[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="commitment @if($focus_result_26_34[0]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_26_34[0]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="commitment-text">{{ $focus_result_26_34[0]['dimensional_results'][0]['dimensional_results'][2]['key']; }} <span class="commitment-number" style="margin-left:90px">{{ number_format($focus_result_26_34[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="democratic @if($focus_result_26_34[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_26_34[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="democratic-text">{{ $focus_result_26_34[0]['dimensional_results'][1]['dimensional_results'][0]['key']; }}  <span class="democratic-number" style="margin-left:80px">{{ number_format($focus_result_26_34[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0); }}</span> </p>
                            </div>
                            <div class="autocratic @if($focus_result_26_34[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_26_34[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="autocratic-text">{{$focus_result_26_34[0]['dimensional_results'][1]['dimensional_results'][1]['key'];}} <span class="autocratic-number" style="margin-left:80px">{{ number_format($focus_result_26_34[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="transformational @if($focus_result_26_34[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_26_34[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="transformational-text">{{$focus_result_26_34[0]['dimensional_results'][1]['dimensional_results'][2]['key'] }}<span class="transformational-number" style="margin-left: 90px;">{{ number_format($focus_result_26_34[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div class="inside-focus-result-working-environment @if($focus_result_26_34[0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[0]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_26_34[0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-working-environment-text">External <br> Relation</p>
                            <p class="inside-focus-result-working-environment-number">{{number_format($focus_result_26_34[0]['dimensional_results'][2]['value'],0) }}</p>
                        </div>
                        <div class="inside-focus-result-motivation @if($focus_result_26_34[0]['dimensional_results'][3]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[0]['dimensional_results'][3]['value'] <= 50) third-quartile @elseif($focus_result_26_34[0]['dimensional_results'][3]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-motivation-text">{{$focus_result_26_34[0]['dimensional_results'][3]['key'] }}</p>
                            <p class="inside-focus-result-motivation-number">{{number_format($focus_result_26_34[0]['dimensional_results'][3]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="trusting @if($focus_result_26_34[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_26_34[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="trusting-text">{{ $focus_result_26_34[0]['dimensional_results'][2]['dimensional_results'][0]['key']; }}<span class="trusting-number" style="margin-left:90px">{{number_format($focus_result_26_34[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="fairness  @if($focus_result_26_34[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_26_34[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="fairness-text">{{ $focus_result_26_34[0]['dimensional_results'][2]['dimensional_results'][1]['key']; }} <span class="fairness-number" style="margin-left:75px">{{ number_format($focus_result_26_34[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="respect  @if($focus_result_26_34[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_26_34[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="respect-text">{{ $focus_result_26_34[0]['dimensional_results'][2]['dimensional_results'][2]['key']; }} <span class="respect-number">{{ number_format($focus_result_26_34[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="reward @if($focus_result_26_34[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_26_34[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="reward-text">{{ $focus_result_26_34[0]['dimensional_results'][3]['dimensional_results'][0]['key'];}} <span class="reward-number" style="margin-left: 110px;">{{ number_format($focus_result_26_34[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="inspire @if($focus_result_26_34[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_26_34[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="inspire-text">{{ $focus_result_26_34[0]['dimensional_results'][3]['dimensional_results'][1]['key']; }} <span class="inspire-number" style="margin-left: 90px;">{{ number_format($focus_result_26_34[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</span></p>
                            </div>
                            <div class="recognition @if($focus_result_26_34[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_26_34[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_26_34[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="recognition-text">{{ $focus_result_26_34[0]['dimensional_results'][3]['dimensional_results'][2]['key'];}} <span class="recognition-number" style="margin-left: 70px;">{{ number_format($focus_result_26_34[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</span></p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="quadrants" style="position: relative; top: -950px;">
                <span class="scale">Scale:</span>
                <div>
                    <span class="quadrant top-quartile"></span>
                    <span class="text-for-quartile">TOP QUARTILE</span>
                    <span class="quadrant second-quartile"></span>
                    <span class="text-for-quartile">SECOND QUARTILE</span>
                    <span class="quadrant third-quartile"></span>
                    <span class="text-for-quartile">THIRD QUARTILE</span>
                    <span class="quadrant bottom-quartile"></span>
                    <span class="text-for-quartile">BOTTOM QUARTILE</span>
                </div>
            </div>
        
        </div> 

        <div class="" style="position: relative; top:14700px; left:40px;">
            <p class="center-title title">35-44 AGE HEALTH IMAGE</p>
            <div class="organization-results-container">
                @if(number_format((($focus_result_35_44[0]['value'] + $focus_result_35_44[1]['value']) / 2), 0) <= 25)
                    <p class="quartile-orgnaztion-details bottom-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_35_44[0]['value'] + $focus_result_35_44[1]['value']) / 2), 0)}}</span></p>
                @elseif(number_format((($focus_result_35_44[0]['value'] + $focus_result_35_44[1]['value']) / 2), 0) <= 50)
                    <p class="quartile-orgnaztion-details third-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_35_44[0]['value'] + $focus_result_35_44[1]['value']) / 2), 0)}}</span></p>
                @elseif(number_format((($focus_result_35_44[0]['value'] + $focus_result_35_44[1]['value']) / 2), 0) <= 80)
                    <p class="quartile-orgnaztion-details second-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_35_44[0]['value'] + $focus_result_35_44[1]['value']) / 2), 0)}}</span></p>
                @else
                    <p class="quartile-orgnaztion-details top-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_35_44[0]['value'] + $focus_result_35_44[1]['value']) / 2), 0)}}</span></p>
                @endif
        
                @if(number_format((($focus_result_35_44[0]['value'] + $focus_result_35_44[1]['value']) / 2), 0) <= 25)
                    <p class="quartile-orgnaztion-details bottom-quartile organization-results-quartile"><span class="quartile-first-part">BOTTOM</span> <span class="quartile-second-part">QUARTILE</span></p>
                @elseif(number_format((($focus_result_35_44[0]['value'] + $focus_result_35_44[1]['value']) / 2), 0) <= 50)
                    <p class="quartile-orgnaztion-details third-quartile organization-results-quartile"><span class="quartile-first-part">THIRD</span> <span class="quartile-second-part">QUARTILE</span></p>
                @elseif(number_format((($focus_result_35_44[0]['value'] + $focus_result_35_44[1]['value']) / 2), 0) <= 80)
                    <p class="quartile-orgnaztion-details second-quartile organization-results-quartile"><span class="quartile-first-part">SECOND</span> <span class="quartile-second-part">QUARTILE</span></p>
                @else
                    <p class="quartile-orgnaztion-details top-quartile organization-results-quartile"><span class="quartile-first-part">TOP</span> <br> <span class="quartile-second-part">QUARTILE</span></p>
                @endif

                <div class="quartile-orgnaztion-details-left-column" style="background-color: white">
                    @if(number_format((($focus_result_35_44[0]['value'] + $focus_result_35_44[1]['value']) / 2), 0) <= 25)
                        <img class="state-color-image" src="{{ public_path('red overall score.png') }}" alt="">
                    @elseif(number_format((($focus_result_35_44[0]['value'] + $focus_result_35_44[1]['value']) / 2), 0) <= 50)
                        <img class="state-color-image" src="{{ public_path('orange overall score.png') }}" alt="">
                    @elseif(number_format((($focus_result_35_44[0]['value'] + $focus_result_35_44[1]['value']) / 2), 0) <= 80)
                        <img class="state-color-image" src="{{ public_path('yellow overall score.png') }}" alt="">
                    @else
                        <img class="state-color-image" src="{{ public_path('top overall score.png') }}" alt="">
                    @endif
                    <img class="stats-picture" src=" {{public_path('age 35-44.png')}}" alt="">
                </div>

                    <!-- Start of External -->
                <div class="quartile-orgnaztion-details-right-column">
                    <div class="inside-focus-result">
                        <div class="inside-focus-result-header @if($focus_result_35_44[1]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[1]['value'] <= 50) third-quartile @elseif($focus_result_35_44[1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <h3 class="inside-focus-result-header-text">INSIDE</h3>
                            <h3 class="inside-focus-result-header-number">{{number_format($focus_result_35_44[1]['value'],0);}}</h3>
                        </div>
                        <div class="inside-focus-result-accountability @if($focus_result_35_44[1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_35_44[1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-accountability-text">{{ $focus_result_35_44[1]['dimensional_results'][0]['key']; }}</p>
                            <p class="inside-focuse-result-accountability-number">{{ number_format($focus_result_35_44[1]['dimensional_results'][0]['value'] ,0); }}</p>
                        </div>
                        <div class="inside-focus-result-leadership @if($focus_result_35_44[1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_35_44[1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-leadership-text">{{ $focus_result_35_44[1]['dimensional_results'][1]['key']; }}</p>
                            <p class="inside-focus-result-leadership-number">{{ number_format($focus_result_35_44[1]['dimensional_results'][1]['value'] ,0) }}</p>
                        </div>
                        <div>
                            <div class="responsibilities @if($focus_result_35_44[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_35_44[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="responsibilities-text">{{ $focus_result_35_44[1]['dimensional_results'][0]['dimensional_results'][0]['key']; }}<span class="responsibilities-number">{{ number_format($focus_result_35_44[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="trustworthiness @if($focus_result_35_44[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_35_44[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="turstworthiness-text">{{ $focus_result_35_44[1]['dimensional_results'][0]['dimensional_results'][1]['key']; }}<span class="turstworthiness-number">{{ number_format($focus_result_35_44[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</span></p>
                            </div>
                            <div class="commitment @if($focus_result_35_44[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_35_44[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="commitment-text">{{ $focus_result_35_44[1]['dimensional_results'][0]['dimensional_results'][2]['key']; }} <span class="commitment-number">{{ number_format($focus_result_35_44[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="democratic @if($focus_result_35_44[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_35_44[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="democratic-text">{{ $focus_result_35_44[1]['dimensional_results'][1]['dimensional_results'][0]['key']; }}  <span class="democratic-number">{{  number_format($focus_result_35_44[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0); }}</span> </p>
                            </div>
                            <div class="autocratic @if($focus_result_35_44[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_35_44[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="autocratic-text">{{ $focus_result_35_44[1]['dimensional_results'][1]['dimensional_results'][1]['key']; }} <span class="autocratic-number">{{  number_format($focus_result_35_44[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="transformational @if($focus_result_35_44[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_35_44[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="transformational-text">{{ $focus_result_35_44[1]['dimensional_results'][1]['dimensional_results'][2]['key']; }} <span class="transformational-number">{{  number_format($focus_result_35_44[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div class="inside-focus-result-working-environment  @if($focus_result_35_44[1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_35_44[1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-working-environment-text">{{ $focus_result_35_44[1]['dimensional_results'][2]['key']; }}</p>
                            <p class="inside-focus-result-working-environment-number">{{ number_format($focus_result_35_44[1]['dimensional_results'][2]['value'],0); }}</p>
                        </div>
                        <div class="inside-focus-result-motivation @if($focus_result_35_44[1]['dimensional_results'][3]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[1]['dimensional_results'][3]['value'] <= 50) third-quartile @elseif($focus_result_35_44[1]['dimensional_results'][3]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-motivation-text">{{ $focus_result_35_44[1]['dimensional_results'][3]['key']; }}</p>
                            <p class="inside-focus-result-motivation-number">{{ number_format($focus_result_35_44[1]['dimensional_results'][3]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="trusting @if($focus_result_35_44[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_35_44[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="trusting-text">{{ $focus_result_35_44[1]['dimensional_results'][2]['dimensional_results'][0]['key']; }} <span class="trusting-number">{{ number_format($focus_result_35_44[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="fairness @if($focus_result_35_44[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_35_44[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="fairness-text">{{ $focus_result_35_44[1]['dimensional_results'][2]['dimensional_results'][1]['key']; }} <span class="fairness-number">{{ number_format($focus_result_35_44[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="respect @if($focus_result_35_44[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_35_44[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="respect-text">{{ $focus_result_35_44[1]['dimensional_results'][2]['dimensional_results'][2]['key']; }} <span class="respect-number">{{ number_format($focus_result_35_44[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="reward @if($focus_result_35_44[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_35_44[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="reward-text">{{ $focus_result_35_44[1]['dimensional_results'][3]['dimensional_results'][0]['key']; }} <span class="reward-number">{{ number_format($focus_result_35_44[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="inspire @if($focus_result_35_44[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_35_44[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="inspire-text">{{$focus_result_35_44[1]['dimensional_results'][3]['dimensional_results'][1]['key']; }}<span class="inspire-number">{{number_format($focus_result_35_44[1]['dimensional_results'][3]['dimensional_results'][1]['value'] ,0);}}</span></p>
                            </div>
                            <div class="recognition @if($focus_result_35_44[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_35_44[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="recognition-text">{{$focus_result_35_44[1]['dimensional_results'][3]['dimensional_results'][2]['key']; }} <span class="recognition-number">{{number_format($focus_result_35_44[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="outside-focus-result">
                        <div class="inside-focus-result-header @if($focus_result_35_44[0]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[0]['value'] <= 50) third-quartile @elseif($focus_result_35_44[0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <h3 class="inside-focus-result-header-text">OUTSIDE</h3>
                            <h3 class="inside-focus-result-header-number">{{ number_format($focus_result_35_44[0]['value'],0); }}</h3>
                        </div>
                        <div class="inside-focus-result-accountability @if($focus_result_35_44[0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_35_44[0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-accountability-text">{{ $focus_result_35_44[0]['dimensional_results'][0]['key']; }}</p>
                            <p class="inside-focuse-result-accountability-number">{{ number_format($focus_result_35_44[0]['dimensional_results'][0]['value'],0);}}</p>
                        </div>
                        <div class="inside-focus-result-leadership @if($focus_result_35_44[0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[0]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_35_44[0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-leadership-text">{{ $focus_result_35_44[0]['dimensional_results'][1]['key']; }}</p>
                            <p class="inside-focus-result-leadership-number">{{ number_format($focus_result_35_44[0]['dimensional_results'][1]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="responsibilities @if($focus_result_35_44[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_35_44[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="responsibilities-text">{{ $focus_result_35_44[0]['dimensional_results'][0]['dimensional_results'][0]['key']; }}<span class="responsibilities-number" style="margin-left:110px">{{number_format($focus_result_35_44[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="trustworthiness @if($focus_result_35_44[0]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_35_44[0]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="turstworthiness-text">{{ $focus_result_35_44[0]['dimensional_results'][0]['dimensional_results'][1]['key']; }}<span class="turstworthiness-number" style="margin-left:110px">{{number_format($focus_result_35_44[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="commitment @if($focus_result_35_44[0]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_35_44[0]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="commitment-text">{{ $focus_result_35_44[0]['dimensional_results'][0]['dimensional_results'][2]['key']; }} <span class="commitment-number" style="margin-left:90px">{{ number_format($focus_result_35_44[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="democratic @if($focus_result_35_44[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_35_44[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="democratic-text">{{ $focus_result_35_44[0]['dimensional_results'][1]['dimensional_results'][0]['key']; }}  <span class="democratic-number" style="margin-left:80px">{{ number_format($focus_result_35_44[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0); }}</span> </p>
                            </div>
                            <div class="autocratic @if($focus_result_35_44[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_35_44[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="autocratic-text">{{$focus_result_35_44[0]['dimensional_results'][1]['dimensional_results'][1]['key'];}} <span class="autocratic-number" style="margin-left:80px">{{ number_format($focus_result_35_44[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="transformational @if($focus_result_35_44[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_35_44[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="transformational-text">{{$focus_result_35_44[0]['dimensional_results'][1]['dimensional_results'][2]['key'] }}<span class="transformational-number" style="margin-left: 90px;">{{ number_format($focus_result_35_44[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div class="inside-focus-result-working-environment @if($focus_result_35_44[0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[0]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_35_44[0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-working-environment-text">External <br> Relation</p>
                            <p class="inside-focus-result-working-environment-number">{{number_format($focus_result_35_44[0]['dimensional_results'][2]['value'],0) }}</p>
                        </div>
                        <div class="inside-focus-result-motivation @if($focus_result_35_44[0]['dimensional_results'][3]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[0]['dimensional_results'][3]['value'] <= 50) third-quartile @elseif($focus_result_35_44[0]['dimensional_results'][3]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-motivation-text">{{$focus_result_35_44[0]['dimensional_results'][3]['key'] }}</p>
                            <p class="inside-focus-result-motivation-number">{{number_format($focus_result_35_44[0]['dimensional_results'][3]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="trusting @if($focus_result_35_44[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_35_44[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="trusting-text">{{ $focus_result_35_44[0]['dimensional_results'][2]['dimensional_results'][0]['key']; }}<span class="trusting-number" style="margin-left:90px">{{number_format($focus_result_35_44[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="fairness  @if($focus_result_35_44[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_35_44[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="fairness-text">{{ $focus_result_35_44[0]['dimensional_results'][2]['dimensional_results'][1]['key']; }} <span class="fairness-number" style="margin-left:75px">{{ number_format($focus_result_35_44[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="respect  @if($focus_result_35_44[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_35_44[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="respect-text">{{ $focus_result_35_44[0]['dimensional_results'][2]['dimensional_results'][2]['key']; }} <span class="respect-number">{{ number_format($focus_result_35_44[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="reward @if($focus_result_35_44[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_35_44[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="reward-text">{{ $focus_result_35_44[0]['dimensional_results'][3]['dimensional_results'][0]['key'];}} <span class="reward-number" style="margin-left: 110px;">{{ number_format($focus_result_35_44[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="inspire @if($focus_result_35_44[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_35_44[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="inspire-text">{{ $focus_result_35_44[0]['dimensional_results'][3]['dimensional_results'][1]['key']; }} <span class="inspire-number" style="margin-left: 90px;">{{ number_format($focus_result_35_44[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</span></p>
                            </div>
                            <div class="recognition @if($focus_result_35_44[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_35_44[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_35_44[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="recognition-text">{{ $focus_result_35_44[0]['dimensional_results'][3]['dimensional_results'][2]['key'];}} <span class="recognition-number" style="margin-left: 70px;">{{ number_format($focus_result_35_44[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</span></p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="quadrants" style="position: relative; top: -950px;">
                <span class="scale">Scale:</span>
                <div>
                    <span class="quadrant top-quartile"></span>
                    <span class="text-for-quartile">TOP QUARTILE</span>
                    <span class="quadrant second-quartile"></span>
                    <span class="text-for-quartile">SECOND QUARTILE</span>
                    <span class="quadrant third-quartile"></span>
                    <span class="text-for-quartile">THIRD QUARTILE</span>
                    <span class="quadrant bottom-quartile"></span>
                    <span class="text-for-quartile">BOTTOM QUARTILE</span>
                </div>
            </div>
        
        </div> 

        <div class="" style="position: relative; top:14850px; left:40px;">
            <p class="center-title title">AGE >= 45 YEARS HEALTH IMAGE</p>
            <div class="organization-results-container">
                @if(number_format((($focus_result_45[0]['value'] + $focus_result_45[1]['value']) / 2), 0) <= 25)
                    <p class="quartile-orgnaztion-details bottom-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_45[0]['value'] + $focus_result_45[1]['value']) / 2), 0)}}</span></p>
                @elseif(number_format((($focus_result_45[0]['value'] + $focus_result_45[1]['value']) / 2), 0) <= 50)
                    <p class="quartile-orgnaztion-details third-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_45[0]['value'] + $focus_result_45[1]['value']) / 2), 0)}}</span></p>
                @elseif(number_format((($focus_result_45[0]['value'] + $focus_result_45[1]['value']) / 2), 0) <= 80)
                    <p class="quartile-orgnaztion-details second-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_45[0]['value'] + $focus_result_45[1]['value']) / 2), 0)}}</span></p>
                @else
                    <p class="quartile-orgnaztion-details top-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_45[0]['value'] + $focus_result_45[1]['value']) / 2), 0)}}</span></p>
                @endif
        
                @if(number_format((($focus_result_45[0]['value'] + $focus_result_45[1]['value']) / 2), 0) <= 25)
                    <p class="quartile-orgnaztion-details bottom-quartile organization-results-quartile"><span class="quartile-first-part">BOTTOM</span> <span class="quartile-second-part">QUARTILE</span></p>
                @elseif(number_format((($focus_result_45[0]['value'] + $focus_result_45[1]['value']) / 2), 0) <= 50)
                    <p class="quartile-orgnaztion-details third-quartile organization-results-quartile"><span class="quartile-first-part">THIRD</span> <span class="quartile-second-part">QUARTILE</span></p>
                @elseif(number_format((($focus_result_45[0]['value'] + $focus_result_45[1]['value']) / 2), 0) <= 80)
                    <p class="quartile-orgnaztion-details second-quartile organization-results-quartile"><span class="quartile-first-part">SECOND</span> <span class="quartile-second-part">QUARTILE</span></p>
                @else
                    <p class="quartile-orgnaztion-details top-quartile organization-results-quartile"><span class="quartile-first-part">TOP</span> <br> <span class="quartile-second-part">QUARTILE</span></p>
                @endif

                <div class="quartile-orgnaztion-details-left-column" style="background-color: white">
                    @if(number_format((($focus_result_45[0]['value'] + $focus_result_45[1]['value']) / 2), 0) <= 25)
                        <img class="state-color-image" src="{{ public_path('red overall score.png') }}" alt="">
                    @elseif(number_format((($focus_result_45[0]['value'] + $focus_result_45[1]['value']) / 2), 0) <= 50)
                        <img class="state-color-image" src="{{ public_path('orange overall score.png') }}" alt="">
                    @elseif(number_format((($focus_result_45[0]['value'] + $focus_result_45[1]['value']) / 2), 0) <= 80)
                        <img class="state-color-image" src="{{ public_path('yellow overall score.png') }}" alt="">
                    @else
                        <img class="state-color-image" src="{{ public_path('top overall score.png') }}" alt="">
                    @endif
                    <img class="stats-picture" src=" {{public_path('age 45.png')}}" alt="">
                </div>

                    <!-- Start of External -->
                <div class="quartile-orgnaztion-details-right-column">
                    <div class="inside-focus-result">
                        <div class="inside-focus-result-header @if($focus_result_45[1]['value'] <= 25) bottom-quartile @elseif($focus_result_45[1]['value'] <= 50) third-quartile @elseif($focus_result_45[1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <h3 class="inside-focus-result-header-text">INSIDE</h3>
                            <h3 class="inside-focus-result-header-number">{{number_format($focus_result_45[1]['value'],0);}}</h3>
                        </div>
                        <div class="inside-focus-result-accountability @if($focus_result_45[1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_45[1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_45[1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-accountability-text">{{ $focus_result_45[1]['dimensional_results'][0]['key']; }}</p>
                            <p class="inside-focuse-result-accountability-number">{{ number_format($focus_result_45[1]['dimensional_results'][0]['value'] ,0); }}</p>
                        </div>
                        <div class="inside-focus-result-leadership @if($focus_result_45[1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_45[1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_45[1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-leadership-text">{{ $focus_result_45[1]['dimensional_results'][1]['key']; }}</p>
                            <p class="inside-focus-result-leadership-number">{{ number_format($focus_result_45[1]['dimensional_results'][1]['value'] ,0) }}</p>
                        </div>
                        <div>
                            <div class="responsibilities @if($focus_result_45[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_45[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_45[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="responsibilities-text">{{ $focus_result_45[1]['dimensional_results'][0]['dimensional_results'][0]['key']; }}<span class="responsibilities-number">{{ number_format($focus_result_45[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="trustworthiness @if($focus_result_45[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_45[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_45[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="turstworthiness-text">{{ $focus_result_45[1]['dimensional_results'][0]['dimensional_results'][1]['key']; }}<span class="turstworthiness-number">{{ number_format($focus_result_45[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</span></p>
                            </div>
                            <div class="commitment @if($focus_result_45[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_45[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_45[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="commitment-text">{{ $focus_result_45[1]['dimensional_results'][0]['dimensional_results'][2]['key']; }} <span class="commitment-number">{{ number_format($focus_result_45[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="democratic @if($focus_result_45[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_45[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_45[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="democratic-text">{{ $focus_result_45[1]['dimensional_results'][1]['dimensional_results'][0]['key']; }}  <span class="democratic-number">{{  number_format($focus_result_45[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0); }}</span> </p>
                            </div>
                            <div class="autocratic @if($focus_result_45[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_45[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_45[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="autocratic-text">{{ $focus_result_45[1]['dimensional_results'][1]['dimensional_results'][1]['key']; }} <span class="autocratic-number">{{  number_format($focus_result_45[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="transformational @if($focus_result_45[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_45[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_45[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="transformational-text">{{ $focus_result_45[1]['dimensional_results'][1]['dimensional_results'][2]['key']; }} <span class="transformational-number">{{  number_format($focus_result_45[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div class="inside-focus-result-working-environment  @if($focus_result_45[1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_45[1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_45[1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-working-environment-text">{{ $focus_result_45[1]['dimensional_results'][2]['key']; }}</p>
                            <p class="inside-focus-result-working-environment-number">{{ number_format($focus_result_45[1]['dimensional_results'][2]['value'],0); }}</p>
                        </div>
                        <div class="inside-focus-result-motivation @if($focus_result_45[1]['dimensional_results'][3]['value'] <= 25) bottom-quartile @elseif($focus_result_45[1]['dimensional_results'][3]['value'] <= 50) third-quartile @elseif($focus_result_45[1]['dimensional_results'][3]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-motivation-text">{{ $focus_result_45[1]['dimensional_results'][3]['key']; }}</p>
                            <p class="inside-focus-result-motivation-number">{{ number_format($focus_result_45[1]['dimensional_results'][3]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="trusting @if($focus_result_45[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_45[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_45[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="trusting-text">{{ $focus_result_45[1]['dimensional_results'][2]['dimensional_results'][0]['key']; }} <span class="trusting-number">{{ number_format($focus_result_45[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="fairness @if($focus_result_45[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_45[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_45[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="fairness-text">{{ $focus_result_45[1]['dimensional_results'][2]['dimensional_results'][1]['key']; }} <span class="fairness-number">{{ number_format($focus_result_45[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="respect @if($focus_result_45[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_45[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_45[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="respect-text">{{ $focus_result_45[1]['dimensional_results'][2]['dimensional_results'][2]['key']; }} <span class="respect-number">{{ number_format($focus_result_45[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="reward @if($focus_result_45[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_45[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_45[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="reward-text">{{ $focus_result_45[1]['dimensional_results'][3]['dimensional_results'][0]['key']; }} <span class="reward-number">{{ number_format($focus_result_45[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="inspire @if($focus_result_45[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_45[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_45[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="inspire-text">{{$focus_result_45[1]['dimensional_results'][3]['dimensional_results'][1]['key']; }}<span class="inspire-number">{{number_format($focus_result_45[1]['dimensional_results'][3]['dimensional_results'][1]['value'] ,0);}}</span></p>
                            </div>
                            <div class="recognition @if($focus_result_45[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_45[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_45[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="recognition-text">{{$focus_result_45[1]['dimensional_results'][3]['dimensional_results'][2]['key']; }} <span class="recognition-number">{{number_format($focus_result_45[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="outside-focus-result">
                        <div class="inside-focus-result-header @if($focus_result_45[0]['value'] <= 25) bottom-quartile @elseif($focus_result_45[0]['value'] <= 50) third-quartile @elseif($focus_result_45[0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <h3 class="inside-focus-result-header-text">OUTSIDE</h3>
                            <h3 class="inside-focus-result-header-number">{{ number_format($focus_result_45[0]['value'],0); }}</h3>
                        </div>
                        <div class="inside-focus-result-accountability @if($focus_result_45[0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_45[0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_45[0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-accountability-text">{{ $focus_result_45[0]['dimensional_results'][0]['key']; }}</p>
                            <p class="inside-focuse-result-accountability-number">{{ number_format($focus_result_45[0]['dimensional_results'][0]['value'],0);}}</p>
                        </div>
                        <div class="inside-focus-result-leadership @if($focus_result_45[0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_45[0]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_45[0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-leadership-text">{{ $focus_result_45[0]['dimensional_results'][1]['key']; }}</p>
                            <p class="inside-focus-result-leadership-number">{{ number_format($focus_result_45[0]['dimensional_results'][1]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="responsibilities @if($focus_result_45[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_45[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_45[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="responsibilities-text">{{ $focus_result_45[0]['dimensional_results'][0]['dimensional_results'][0]['key']; }}<span class="responsibilities-number" style="margin-left:110px">{{number_format($focus_result_45[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="trustworthiness @if($focus_result_45[0]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_45[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_45[0]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="turstworthiness-text">{{ $focus_result_45[0]['dimensional_results'][0]['dimensional_results'][1]['key']; }}<span class="turstworthiness-number" style="margin-left:110px">{{number_format($focus_result_45[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="commitment @if($focus_result_45[0]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_45[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_45[0]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="commitment-text">{{ $focus_result_45[0]['dimensional_results'][0]['dimensional_results'][2]['key']; }} <span class="commitment-number" style="margin-left:90px">{{ number_format($focus_result_45[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="democratic @if($focus_result_45[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_45[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_45[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="democratic-text">{{ $focus_result_45[0]['dimensional_results'][1]['dimensional_results'][0]['key']; }}  <span class="democratic-number" style="margin-left:80px">{{ number_format($focus_result_45[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0); }}</span> </p>
                            </div>
                            <div class="autocratic @if($focus_result_45[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_45[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_45[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="autocratic-text">{{$focus_result_45[0]['dimensional_results'][1]['dimensional_results'][1]['key'];}} <span class="autocratic-number" style="margin-left:80px">{{ number_format($focus_result_45[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="transformational @if($focus_result_45[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_45[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_45[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="transformational-text">{{$focus_result_45[0]['dimensional_results'][1]['dimensional_results'][2]['key'] }}<span class="transformational-number" style="margin-left: 90px;">{{ number_format($focus_result_45[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div class="inside-focus-result-working-environment @if($focus_result_45[0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_45[0]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_45[0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-working-environment-text">External <br> Relation</p>
                            <p class="inside-focus-result-working-environment-number">{{number_format($focus_result_45[0]['dimensional_results'][2]['value'],0) }}</p>
                        </div>
                        <div class="inside-focus-result-motivation @if($focus_result_45[0]['dimensional_results'][3]['value'] <= 25) bottom-quartile @elseif($focus_result_45[0]['dimensional_results'][3]['value'] <= 50) third-quartile @elseif($focus_result_45[0]['dimensional_results'][3]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-motivation-text">{{$focus_result_45[0]['dimensional_results'][3]['key'] }}</p>
                            <p class="inside-focus-result-motivation-number">{{number_format($focus_result_45[0]['dimensional_results'][3]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="trusting @if($focus_result_45[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_45[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_45[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="trusting-text">{{ $focus_result_45[0]['dimensional_results'][2]['dimensional_results'][0]['key']; }}<span class="trusting-number" style="margin-left:90px">{{number_format($focus_result_45[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="fairness  @if($focus_result_45[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_45[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_45[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="fairness-text">{{ $focus_result_45[0]['dimensional_results'][2]['dimensional_results'][1]['key']; }} <span class="fairness-number" style="margin-left:75px">{{ number_format($focus_result_45[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="respect  @if($focus_result_45[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_45[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_45[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="respect-text">{{ $focus_result_45[0]['dimensional_results'][2]['dimensional_results'][2]['key']; }} <span class="respect-number">{{ number_format($focus_result_45[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="reward @if($focus_result_45[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_45[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_45[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="reward-text">{{ $focus_result_45[0]['dimensional_results'][3]['dimensional_results'][0]['key'];}} <span class="reward-number" style="margin-left: 110px;">{{ number_format($focus_result_45[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="inspire @if($focus_result_45[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_45[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_45[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="inspire-text">{{ $focus_result_45[0]['dimensional_results'][3]['dimensional_results'][1]['key']; }} <span class="inspire-number" style="margin-left: 90px;">{{ number_format($focus_result_45[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</span></p>
                            </div>
                            <div class="recognition @if($focus_result_45[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_45[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_45[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="recognition-text">{{ $focus_result_45[0]['dimensional_results'][3]['dimensional_results'][2]['key'];}} <span class="recognition-number" style="margin-left: 70px;">{{ number_format($focus_result_45[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</span></p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="quadrants" style="position: relative; top: -950px;">
                <span class="scale">Scale:</span>
                <div>
                    <span class="quadrant top-quartile"></span>
                    <span class="text-for-quartile">TOP QUARTILE</span>
                    <span class="quadrant second-quartile"></span>
                    <span class="text-for-quartile">SECOND QUARTILE</span>
                    <span class="quadrant third-quartile"></span>
                    <span class="text-for-quartile">THIRD QUARTILE</span>
                    <span class="quadrant bottom-quartile"></span>
                    <span class="text-for-quartile">BOTTOM QUARTILE</span>
                </div>
            </div>
        
        </div> 

        <div class="indicators-by-gender" style="position: relative; top: 15000px;">
            <p class="center-title title"> INDICATORS BY AGE </p>
    
            <table>
                <tr>
                    <th style="background-color: white;"> </th>
                    <th>OVERALL SCORE</th>
                    <th>{{ $focus_result[1]['dimensional_results'][0]['key']; }}</th>
                    <th>{{ $focus_result[1]['dimensional_results'][1]['key']; }}</th>
                    <th>{{ $focus_result[1]['dimensional_results'][2]['key']; }}</th>
                    <th>{{ $focus_result[1]['dimensional_results'][3]['key']; }}</th>
                    <th>{{ $focus_result[0]['dimensional_results'][0]['key']; }}</th>
                    <th>{{ $focus_result[0]['dimensional_results'][1]['key']; }}</th>
                    <th>{{ $focus_result[0]['dimensional_results'][2]['key']; }}</th>
                    <th>{{ $focus_result[0]['dimensional_results'][3]['key']; }}</th>
                </tr>
                <tr style="text-align: center;">
                    <td>OVERALL</td>
                    <td class="@if(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) <= 25) bottom-quartile @elseif(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) <= 50) third-quartile @elseif(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) <= 80) second-quartile @else top-quartile @endif">{{ number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0); }}</td>
                    <td class="@if(number_format($focus_result[1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[1]['dimensional_results'][0]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result[1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[1]['dimensional_results'][1]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result[1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[1]['dimensional_results'][2]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result[1]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[1]['dimensional_results'][3]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result[0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[0]['dimensional_results'][0]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result[0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[0]['dimensional_results'][1]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result[0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[0]['dimensional_results'][2]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result[0]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[0]['dimensional_results'][3]['value'],0); }}</td>
                </tr>
                <tr style="text-align: center;">
                    <td><= 25</td>
                    <td class="@if(number_format((($focus_result_25[0]['value'] + $focus_result_25[1]['value']) / 2), 0) <= 25) bottom-quartile @elseif(number_format((($focus_result_25[0]['value'] + $focus_result_25[1]['value']) / 2), 0) <= 50) third-quartile @elseif(number_format((($focus_result_25[0]['value'] + $focus_result_25[1]['value']) / 2), 0) <= 80) second-quartile @else top-quartile @endif">{{ number_format((($focus_result_25[0]['value'] + $focus_result_25[1]['value']) / 2), 0); }}</td>
                    <td class="@if(number_format($focus_result_25[1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_25[1]['dimensional_results'][0]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_25[1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_25[1]['dimensional_results'][1]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_25[1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_25[1]['dimensional_results'][2]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_25[1]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_25[1]['dimensional_results'][3]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_25[0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_25[0]['dimensional_results'][0]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_25[0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_25[0]['dimensional_results'][1]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_25[0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_25[0]['dimensional_results'][2]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_25[0]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_25[0]['dimensional_results'][3]['value'],0); }}</td>
                </tr>
                <tr style="text-align: center;">
                    <td>26 - 34</td>
                    <td class="@if(number_format((($focus_result_26_34[0]['value'] + $focus_result_26_34[1]['value']) / 2), 0) <= 25) bottom-quartile @elseif(number_format((($focus_result_26_34[0]['value'] + $focus_result_26_34[1]['value']) / 2), 0) <= 50) third-quartile @elseif(number_format((($focus_result_26_34[0]['value'] + $focus_result_26_34[1]['value']) / 2), 0) <= 80) second-quartile @else top-quartile @endif">{{ number_format((($focus_result_26_34[0]['value'] + $focus_result_26_34[1]['value']) / 2), 0); }}</td>
                    <td class="@if(number_format($focus_result_26_34[1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_26_34[1]['dimensional_results'][0]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_26_34[1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_26_34[1]['dimensional_results'][1]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_26_34[1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_26_34[1]['dimensional_results'][2]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_26_34[1]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_26_34[1]['dimensional_results'][3]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_26_34[0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_26_34[0]['dimensional_results'][0]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_26_34[0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_26_34[0]['dimensional_results'][1]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_26_34[0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_26_34[0]['dimensional_results'][2]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_26_34[0]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_26_34[0]['dimensional_results'][3]['value'],0); }}</td>
                </tr>
                <tr style="text-align: center;">
                    <td>35 - 44</td>
                    <td class="@if(number_format((($focus_result_35_44[0]['value'] + $focus_result_35_44[1]['value']) / 2), 0) <= 25) bottom-quartile @elseif(number_format((($focus_result_35_44[0]['value'] + $focus_result_35_44[1]['value']) / 2), 0) <= 50) third-quartile @elseif(number_format((($focus_result_35_44[0]['value'] + $focus_result_35_44[1]['value']) / 2), 0) <= 80) second-quartile @else top-quartile @endif">{{ number_format((($focus_result_35_44[0]['value'] + $focus_result_35_44[1]['value']) / 2), 0); }}</td>
                    <td class="@if(number_format($focus_result_35_44[1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_35_44[1]['dimensional_results'][0]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_35_44[1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_35_44[1]['dimensional_results'][1]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_35_44[1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_35_44[1]['dimensional_results'][2]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_35_44[1]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_35_44[1]['dimensional_results'][3]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_35_44[0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_35_44[0]['dimensional_results'][0]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_35_44[0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_35_44[0]['dimensional_results'][1]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_35_44[0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_35_44[0]['dimensional_results'][2]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_35_44[0]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_35_44[0]['dimensional_results'][3]['value'],0); }}</td>
                </tr>
                <tr style="text-align: center;">
                    <td>> = 45</td>
                    <td class="@if(number_format((($focus_result_45[0]['value'] + $focus_result_45[1]['value']) / 2), 0) <= 25) bottom-quartile @elseif(number_format((($focus_result_45[0]['value'] + $focus_result_45[1]['value']) / 2), 0) <= 50) third-quartile @elseif(number_format((($focus_result_45[0]['value'] + $focus_result_45[1]['value']) / 2), 0) <= 80) second-quartile @else top-quartile @endif">{{ number_format((($focus_result_45[0]['value'] + $focus_result_45[1]['value']) / 2), 0); }}</td>
                    <td class="@if(number_format($focus_result_45[1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_45[1]['dimensional_results'][0]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_45[1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_45[1]['dimensional_results'][1]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_45[1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_45[1]['dimensional_results'][2]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_45[1]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_45[1]['dimensional_results'][3]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_45[0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_45[0]['dimensional_results'][0]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_45[0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_45[0]['dimensional_results'][1]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_45[0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_45[0]['dimensional_results'][2]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_45[0]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_45[0]['dimensional_results'][3]['value'],0); }}</td>
                </tr>
            </table>        
          
            <div class="quadrants">
                <span class="scale">Scale:</span>
                <div>
                    <span class="quadrant top-quartile"></span>
                    <span class="text-for-quartile">TOP QUARTILE</span>
                    <span class="quadrant second-quartile"></span>
                    <span class="text-for-quartile">SECOND QUARTILE</span>
                    <span class="quadrant third-quartile"></span>
                    <span class="text-for-quartile">THIRD QUARTILE</span>
                    <span class="quadrant bottom-quartile"></span>
                    <span class="text-for-quartile">BOTTOM QUARTILE</span>
                </div>
            </div>
        </div>

        <div class="practices-by-gender" style="position: relative; top: 16900px;">
            <p class="center-title title"> PRACTICES BY AGE </p>
            <table>
                <tr>
                    <th>INDICATOR</th>
                    <th>PRACTICE</th>
                    <th>OVERALL SCORE</th>
                    <th><= 25</th>
                    <th>26 - 34</th>
                    <th>35 - 44</th>
                    <th>> = 45</th>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[1]['dimensional_results'][0]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[1]['dimensional_results'][0]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[1]['dimensional_results'][0]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[1]['dimensional_results'][0]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_25[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_25[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_25[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_25[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_25[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_25[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_26_34[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_26_34[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_26_34[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_26_34[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_26_34[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_26_34[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_35_44[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_35_44[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_35_44[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_35_44[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_35_44[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_35_44[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_45[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_45[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_45[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_45[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_45[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_45[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[1]['dimensional_results'][1]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[1]['dimensional_results'][1]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[1]['dimensional_results'][1]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[1]['dimensional_results'][1]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_25[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_25[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_25[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_25[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_25[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_25[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_26_34[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_26_34[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_26_34[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_26_34[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_26_34[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_26_34[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_35_44[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_35_44[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_35_44[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_35_44[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_35_44[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_35_44[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_45[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_45[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_45[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_45[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_45[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_45[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[1]['dimensional_results'][2]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[1]['dimensional_results'][2]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[1]['dimensional_results'][2]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[1]['dimensional_results'][2]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_25[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_25[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_25[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_25[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_25[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_25[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_26_34[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_26_34[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_26_34[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_26_34[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_26_34[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_26_34[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_35_44[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_35_44[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_35_44[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_35_44[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_35_44[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_35_44[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_45[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_45[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_45[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_45[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_45[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_45[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[1]['dimensional_results'][3]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[1]['dimensional_results'][3]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[1]['dimensional_results'][3]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[1]['dimensional_results'][3]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_25[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_25[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_25[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_25[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_25[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_25[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_26_34[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_26_34[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_26_34[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_26_34[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_26_34[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_26_34[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_35_44[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_35_44[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_35_44[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_35_44[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_35_44[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_35_44[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_45[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_45[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_45[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_45[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_45[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_45[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[0]['dimensional_results'][0]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[0]['dimensional_results'][0]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[0]['dimensional_results'][0]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[0]['dimensional_results'][0]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_25[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_25[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_25[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_25[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_25[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_25[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_26_34[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_26_34[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_26_34[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_26_34[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_26_34[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_26_34[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_35_44[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_35_44[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_35_44[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_35_44[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_35_44[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_35_44[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_45[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_45[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_45[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_45[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_45[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_45[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[0]['dimensional_results'][1]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[0]['dimensional_results'][1]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[0]['dimensional_results'][1]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[0]['dimensional_results'][1]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_25[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_25[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_25[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_25[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_25[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_25[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_26_34[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_26_34[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_26_34[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_26_34[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_26_34[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_26_34[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_35_44[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_35_44[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_35_44[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_35_44[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_35_44[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_35_44[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_45[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_45[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_45[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_45[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_45[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_45[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[0]['dimensional_results'][2]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[0]['dimensional_results'][2]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[0]['dimensional_results'][2]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[0]['dimensional_results'][2]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_25[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_25[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_25[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_25[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_25[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_25[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_26_34[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_26_34[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_26_34[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_26_34[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_26_34[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_26_34[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_35_44[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_35_44[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_35_44[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_35_44[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_35_44[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_35_44[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_45[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_45[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_45[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_45[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_45[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_45[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[0]['dimensional_results'][3]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[0]['dimensional_results'][3]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[0]['dimensional_results'][3]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[0]['dimensional_results'][3]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_25[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_25[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_25[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_25[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_25[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_25[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_25[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_26_34[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_26_34[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_26_34[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_26_34[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_26_34[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_26_34[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_26_34[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_35_44[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_35_44[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_35_44[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_35_44[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_35_44[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_35_44[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_35_44[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_45[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_45[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_45[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_45[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_45[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_45[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_45[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
            </table>
            <div class="quadrants">
                <span class="scale">Scale:</span>
                <div>
                    <span class="quadrant top-quartile"></span>
                    <span class="text-for-quartile">TOP QUARTILE</span>
                    <span class="quadrant second-quartile"></span>
                    <span class="text-for-quartile">SECOND QUARTILE</span>
                    <span class="quadrant third-quartile"></span>
                    <span class="text-for-quartile">THIRD QUARTILE</span>
                    <span class="quadrant bottom-quartile"></span>
                    <span class="text-for-quartile">BOTTOM QUARTILE</span>
                </div>
            </div>
        </div>

        <div class="center-title" style="position: relative; top: 17900px;">
            <h1 class="custom-title">HIGHEST AND LOWEST 5 PRACTICES</h1>
                <h3 class="heading" style="position: relative; left:-550px; top:170px">OVERALL OHX-RAY <br> SCORE</h3>
                <h3 class="heading" style="position: relative; left:-260px; top:110px;">AGE <= 25</h3>
                <h3 class="heading" style="position: relative; left:600px; top:70px; width:180px;">26 < AGE < 34</h3> 
                <h3 class="heading" style="position: relative; left:880px; top:30px; width:180px;">35 < AGE < 44</h3> 
                <h3 class="heading" style="position: relative; left:1160px; top:-11px; width:180px;">AGE >= 45</h3> 
            <div class="final-row" style="margin-bottom: 100px;">
                <ul class="final-col" style="width: 272px;">
                    @for($i = 0; $i < 5;$i++) 
                        <li class="final-item @if($sort_results[$i]['value'] <= 25) bottom-quartile @elseif($sort_results[$i]['value'] <= 50) third-quartile @elseif($sort_results[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                            {{$sort_results[$i]['key']}}
                            <span class="grade">{{ number_format($sort_results[$i]['value'],0); }}</span>
                        </li>
                    @endfor
                </ul>
                <ul class="final-col" style="width: 272px;">
                    @for($i = 0; $i < 5;$i++) 
                        <li class="final-item @if($sort_results_25[$i]['value'] <= 25) bottom-quartile @elseif($sort_results_25[$i]['value'] <= 50) third-quartile @elseif($sort_results_25[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                            {{$sort_results_25[$i]['key']}}
                            <span class="grade">{{ number_format($sort_results_25[$i]['value'],0); }}</span>
                        </li>
                    @endfor
                </ul>
                <ul class="final-col" style="width: 272px;">
                    @for($i = 0; $i < 5;$i++) 
                        <li class="final-item @if($sort_results_26_34[$i]['value'] <= 25) bottom-quartile @elseif($sort_results_26_34[$i]['value'] <= 50) third-quartile @elseif($sort_results_26_34[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                            {{$sort_results_26_34[$i]['key']}}
                            <span class="grade">{{ number_format($sort_results_26_34[$i]['value'],0); }}</span>
                        </li>
                    @endfor
                </ul>
                <ul class="final-col" style="width: 272px;">
                    @for($i = 0; $i < 5;$i++) 
                        <li class="final-item @if($sort_results_35_44[$i]['value'] <= 25) bottom-quartile @elseif($sort_results_35_44[$i]['value'] <= 50) third-quartile @elseif($sort_results_35_44[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                            {{$sort_results_35_44[$i]['key']}}
                            <span class="grade">{{ number_format($sort_results_35_44[$i]['value'],0); }}</span>
                        </li>
                    @endfor
                </ul>
                <ul class="final-col" style="width: 272px;">
                    @for($i = 0; $i < 5;$i++) 
                        <li class="final-item @if($sort_results_45[$i]['value'] <= 25) bottom-quartile @elseif($sort_results_45[$i]['value'] <= 50) third-quartile @elseif($sort_results_45[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                            {{$sort_results_45[$i]['key']}}
                            <span class="grade">{{ number_format($sort_results_45[$i]['value'],0); }}</span>
                        </li>
                    @endfor
                </ul>
            </div>
            <div class="final-row" >
                <ul class="final-col" style="width: 272px;">
                    @for($i = 23; $i>18;$i--)
                        <li class="final-item @if($sort_results[$i]['value'] <= 25) bottom-quartile @elseif($sort_results[$i]['value'] <= 50) third-quartile @elseif($sort_results[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                            {{$sort_results[$i]['key']}}
                            <span class="grade">{{ number_format($sort_results[$i]['value'],0); }}</span>
                        </li>
                    @endfor
                </ul>
                <ul class="final-col" style="width: 272px;">
                    @for($i = 23; $i>18;$i--)
                        <li class="final-item @if($sort_results_25[$i]['value'] <= 25) bottom-quartile @elseif($sort_results_25[$i]['value'] <= 50) third-quartile @elseif($sort_results_25[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                            {{$sort_results_25[$i]['key']}}
                            <span class="grade">{{ number_format($sort_results_25[$i]['value'],0); }}</span>
                        </li>
                    @endfor
                </ul>
                <ul class="final-col" style="width: 272px;">
                    @for($i = 23; $i>18;$i--)
                        <li class="final-item @if($sort_results_26_34[$i]['value'] <= 25) bottom-quartile @elseif($sort_results_26_34[$i]['value'] <= 50) third-quartile @elseif($sort_results_26_34[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                            {{$sort_results_26_34[$i]['key']}}
                            <span class="grade">{{ number_format($sort_results_26_34[$i]['value'],0); }}</span>
                        </li>
                    @endfor
                </ul>
                <ul class="final-col" style="width: 272px;">
                    @for($i = 23; $i>18;$i--)
                        <li class="final-item @if($sort_results_35_44[$i]['value'] <= 25) bottom-quartile @elseif($sort_results_35_44[$i]['value'] <= 50) third-quartile @elseif($sort_results_35_44[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                            {{$sort_results_35_44[$i]['key']}}
                            <span class="grade">{{ number_format($sort_results_35_44[$i]['value'],0); }}</span>
                        </li>
                    @endfor
                </ul>
                <ul class="final-col" style="width: 272px;">
                    @for($i = 23; $i>18;$i--)
                        <li class="final-item @if($sort_results_45[$i]['value'] <= 25) bottom-quartile @elseif($sort_results_45[$i]['value'] <= 50) third-quartile @elseif($sort_results_45[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                            {{$sort_results_45[$i]['key']}}
                            <span class="grade">{{ number_format($sort_results_45[$i]['value'],0); }}</span>
                        </li>
                    @endfor
                </ul>
            </div>
            <div class="quadrants">
                <span class="scale">Scale:</span>
                <div>
                    <span class="quadrant top-quartile"></span>
                    <span class="text-for-quartile">TOP QUARTILE</span>
                    <span class="quadrant second-quartile"></span>
                    <span class="text-for-quartile">SECOND QUARTILE</span>
                    <span class="quadrant third-quartile"></span>
                    <span class="text-for-quartile">THIRD QUARTILE</span>
                    <span class="quadrant bottom-quartile"></span>
                    <span class="text-for-quartile">BOTTOM QUARTILE</span>
                </div>
            </div>
        </div>

        <div class="by-nationality" style="position: relative; top: 19150px; left:40px;">
            <img src="{{public_path('by nationality.png')}}" alt="">
        </div>

        
        <div style="position: relative; top:20700px; left:40px;">
            <p class="center-title title">LOCAL NATIONALITY HEALTH IMAGE</p>
            <div class="organization-results-container">
                @if(number_format((($focus_result_local[0]['value'] + $focus_result_local[1]['value']) / 2), 0) <= 25)
                    <p class="quartile-orgnaztion-details bottom-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_local[0]['value'] + $focus_result_local[1]['value']) / 2), 0)}}</span></p>
                @elseif(number_format((($focus_result_local[0]['value'] + $focus_result_local[1]['value']) / 2), 0) <= 50)
                    <p class="quartile-orgnaztion-details third-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_local[0]['value'] + $focus_result_local[1]['value']) / 2), 0)}}</span></p>
                @elseif(number_format((($focus_result_local[0]['value'] + $focus_result_local[1]['value']) / 2), 0) <= 80)
                    <p class="quartile-orgnaztion-details second-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_local[0]['value'] + $focus_result_local[1]['value']) / 2), 0)}}</span></p>
                @else
                    <p class="quartile-orgnaztion-details top-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_local[0]['value'] + $focus_result_local[1]['value']) / 2), 0)}}</span></p>
                @endif
        
                @if(number_format((($focus_result_local[0]['value'] + $focus_result_local[1]['value']) / 2), 0) <= 25)
                    <p class="quartile-orgnaztion-details bottom-quartile organization-results-quartile"><span class="quartile-first-part">BOTTOM</span> <span class="quartile-second-part">QUARTILE</span></p>
                @elseif(number_format((($focus_result_local[0]['value'] + $focus_result_local[1]['value']) / 2), 0) <= 50)
                    <p class="quartile-orgnaztion-details third-quartile organization-results-quartile"><span class="quartile-first-part">THIRD</span> <span class="quartile-second-part">QUARTILE</span></p>
                @elseif(number_format((($focus_result_local[0]['value'] + $focus_result_local[1]['value']) / 2), 0) <= 80)
                    <p class="quartile-orgnaztion-details second-quartile organization-results-quartile"><span class="quartile-first-part">SECOND</span> <span class="quartile-second-part">QUARTILE</span></p>
                @else
                    <p class="quartile-orgnaztion-details top-quartile organization-results-quartile"><span class="quartile-first-part">TOP</span> <br> <span class="quartile-second-part">QUARTILE</span></p>
                @endif

                <div class="quartile-orgnaztion-details-left-column" style="background-color: white">
                    @if(number_format((($focus_result_local[0]['value'] + $focus_result_local[1]['value']) / 2), 0) <= 25)
                        <img class="state-color-image" src="{{ public_path('red overall score.png') }}" alt="">
                    @elseif(number_format((($focus_result_local[0]['value'] + $focus_result_local[1]['value']) / 2), 0) <= 50)
                        <img class="state-color-image" src="{{ public_path('orange overall score.png') }}" alt="">
                    @elseif(number_format((($focus_result_local[0]['value'] + $focus_result_local[1]['value']) / 2), 0) <= 80)
                        <img class="state-color-image" src="{{ public_path('yellow overall score.png') }}" alt="">
                    @else
                        <img class="state-color-image" src="{{ public_path('top overall score.png') }}" alt="">
                    @endif
                    <img class="stats-picture" src=" {{public_path('local.png')}}" alt="">
                </div>

                    <!-- Start of External -->
                <div class="quartile-orgnaztion-details-right-column">
                    <div class="inside-focus-result">
                        <div class="inside-focus-result-header @if($focus_result_local[1]['value'] <= 25) bottom-quartile @elseif($focus_result_local[1]['value'] <= 50) third-quartile @elseif($focus_result_local[1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <h3 class="inside-focus-result-header-text">INSIDE</h3>
                            <h3 class="inside-focus-result-header-number">{{number_format($focus_result_local[1]['value'],0);}}</h3>
                        </div>
                        <div class="inside-focus-result-accountability @if($focus_result_local[1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_local[1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_local[1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-accountability-text">{{ $focus_result_local[1]['dimensional_results'][0]['key']; }}</p>
                            <p class="inside-focuse-result-accountability-number">{{ number_format($focus_result_local[1]['dimensional_results'][0]['value'] ,0); }}</p>
                        </div>
                        <div class="inside-focus-result-leadership @if($focus_result_local[1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_local[1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_local[1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-leadership-text">{{ $focus_result_local[1]['dimensional_results'][1]['key']; }}</p>
                            <p class="inside-focus-result-leadership-number">{{ number_format($focus_result_local[1]['dimensional_results'][1]['value'] ,0) }}</p>
                        </div>
                        <div>
                            <div class="responsibilities @if($focus_result_local[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_local[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_local[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="responsibilities-text">{{ $focus_result_local[1]['dimensional_results'][0]['dimensional_results'][0]['key']; }}<span class="responsibilities-number">{{ number_format($focus_result_local[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="trustworthiness @if($focus_result_local[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_local[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_local[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="turstworthiness-text">{{ $focus_result_local[1]['dimensional_results'][0]['dimensional_results'][1]['key']; }}<span class="turstworthiness-number">{{ number_format($focus_result_local[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</span></p>
                            </div>
                            <div class="commitment @if($focus_result_local[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_local[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_local[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="commitment-text">{{ $focus_result_local[1]['dimensional_results'][0]['dimensional_results'][2]['key']; }} <span class="commitment-number">{{ number_format($focus_result_local[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="democratic @if($focus_result_local[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_local[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_local[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="democratic-text">{{ $focus_result_local[1]['dimensional_results'][1]['dimensional_results'][0]['key']; }}  <span class="democratic-number">{{  number_format($focus_result_local[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0); }}</span> </p>
                            </div>
                            <div class="autocratic @if($focus_result_local[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_local[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_local[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="autocratic-text">{{ $focus_result_local[1]['dimensional_results'][1]['dimensional_results'][1]['key']; }} <span class="autocratic-number">{{  number_format($focus_result_local[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="transformational @if($focus_result_local[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_local[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_local[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="transformational-text">{{ $focus_result_local[1]['dimensional_results'][1]['dimensional_results'][2]['key']; }} <span class="transformational-number">{{  number_format($focus_result_local[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div class="inside-focus-result-working-environment  @if($focus_result_local[1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_local[1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_local[1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-working-environment-text">{{ $focus_result_local[1]['dimensional_results'][2]['key']; }}</p>
                            <p class="inside-focus-result-working-environment-number">{{ number_format($focus_result_local[1]['dimensional_results'][2]['value'],0); }}</p>
                        </div>
                        <div class="inside-focus-result-motivation @if($focus_result_local[1]['dimensional_results'][3]['value'] <= 25) bottom-quartile @elseif($focus_result_local[1]['dimensional_results'][3]['value'] <= 50) third-quartile @elseif($focus_result_local[1]['dimensional_results'][3]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-motivation-text">{{ $focus_result_local[1]['dimensional_results'][3]['key']; }}</p>
                            <p class="inside-focus-result-motivation-number">{{ number_format($focus_result_local[1]['dimensional_results'][3]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="trusting @if($focus_result_local[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_local[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_local[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="trusting-text">{{ $focus_result_local[1]['dimensional_results'][2]['dimensional_results'][0]['key']; }} <span class="trusting-number">{{ number_format($focus_result_local[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="fairness @if($focus_result_local[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_local[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_local[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="fairness-text">{{ $focus_result_local[1]['dimensional_results'][2]['dimensional_results'][1]['key']; }} <span class="fairness-number">{{ number_format($focus_result_local[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="respect @if($focus_result_local[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_local[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_local[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="respect-text">{{ $focus_result_local[1]['dimensional_results'][2]['dimensional_results'][2]['key']; }} <span class="respect-number">{{ number_format($focus_result_local[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="reward @if($focus_result_local[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_local[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_local[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="reward-text">{{ $focus_result_local[1]['dimensional_results'][3]['dimensional_results'][0]['key']; }} <span class="reward-number">{{ number_format($focus_result_local[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="inspire @if($focus_result_local[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_local[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_local[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="inspire-text">{{$focus_result_local[1]['dimensional_results'][3]['dimensional_results'][1]['key']; }}<span class="inspire-number">{{number_format($focus_result_local[1]['dimensional_results'][3]['dimensional_results'][1]['value'] ,0);}}</span></p>
                            </div>
                            <div class="recognition @if($focus_result_local[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_local[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_local[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="recognition-text">{{$focus_result_local[1]['dimensional_results'][3]['dimensional_results'][2]['key']; }} <span class="recognition-number">{{number_format($focus_result_local[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="outside-focus-result">
                        <div class="inside-focus-result-header @if($focus_result_local[0]['value'] <= 25) bottom-quartile @elseif($focus_result_local[0]['value'] <= 50) third-quartile @elseif($focus_result_local[0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <h3 class="inside-focus-result-header-text">OUTSIDE</h3>
                            <h3 class="inside-focus-result-header-number">{{ number_format($focus_result_local[0]['value'],0); }}</h3>
                        </div>
                        <div class="inside-focus-result-accountability @if($focus_result_local[0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_local[0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_local[0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-accountability-text">{{ $focus_result_local[0]['dimensional_results'][0]['key']; }}</p>
                            <p class="inside-focuse-result-accountability-number">{{ number_format($focus_result_local[0]['dimensional_results'][0]['value'],0);}}</p>
                        </div>
                        <div class="inside-focus-result-leadership @if($focus_result_local[0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_local[0]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_local[0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-leadership-text">{{ $focus_result_local[0]['dimensional_results'][1]['key']; }}</p>
                            <p class="inside-focus-result-leadership-number">{{ number_format($focus_result_local[0]['dimensional_results'][1]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="responsibilities @if($focus_result_local[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_local[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_local[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="responsibilities-text">{{ $focus_result_local[0]['dimensional_results'][0]['dimensional_results'][0]['key']; }}<span class="responsibilities-number" style="margin-left:110px">{{number_format($focus_result_local[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="trustworthiness @if($focus_result_local[0]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_local[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_local[0]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="turstworthiness-text">{{ $focus_result_local[0]['dimensional_results'][0]['dimensional_results'][1]['key']; }}<span class="turstworthiness-number" style="margin-left:110px">{{number_format($focus_result_local[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="commitment @if($focus_result_local[0]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_local[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_local[0]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="commitment-text">{{ $focus_result_local[0]['dimensional_results'][0]['dimensional_results'][2]['key']; }} <span class="commitment-number" style="margin-left:90px">{{ number_format($focus_result_local[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="democratic @if($focus_result_local[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_local[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_local[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="democratic-text">{{ $focus_result_local[0]['dimensional_results'][1]['dimensional_results'][0]['key']; }}  <span class="democratic-number" style="margin-left:80px">{{ number_format($focus_result_local[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0); }}</span> </p>
                            </div>
                            <div class="autocratic @if($focus_result_local[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_local[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_local[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="autocratic-text">{{$focus_result_local[0]['dimensional_results'][1]['dimensional_results'][1]['key'];}} <span class="autocratic-number" style="margin-left:80px">{{ number_format($focus_result_local[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="transformational @if($focus_result_local[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_local[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_local[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="transformational-text">{{$focus_result_local[0]['dimensional_results'][1]['dimensional_results'][2]['key'] }}<span class="transformational-number" style="margin-left: 90px;">{{ number_format($focus_result_local[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div class="inside-focus-result-working-environment @if($focus_result_local[0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_local[0]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_local[0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-working-environment-text">External <br> Relation</p>
                            <p class="inside-focus-result-working-environment-number">{{number_format($focus_result_local[0]['dimensional_results'][2]['value'],0) }}</p>
                        </div>
                        <div class="inside-focus-result-motivation @if($focus_result_local[0]['dimensional_results'][3]['value'] <= 25) bottom-quartile @elseif($focus_result_local[0]['dimensional_results'][3]['value'] <= 50) third-quartile @elseif($focus_result_local[0]['dimensional_results'][3]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-motivation-text">{{$focus_result_local[0]['dimensional_results'][3]['key'] }}</p>
                            <p class="inside-focus-result-motivation-number">{{number_format($focus_result_local[0]['dimensional_results'][3]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="trusting @if($focus_result_local[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_local[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_local[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="trusting-text">{{ $focus_result_local[0]['dimensional_results'][2]['dimensional_results'][0]['key']; }}<span class="trusting-number" style="margin-left:90px">{{number_format($focus_result_local[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="fairness  @if($focus_result_local[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_local[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_local[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="fairness-text">{{ $focus_result_local[0]['dimensional_results'][2]['dimensional_results'][1]['key']; }} <span class="fairness-number" style="margin-left:75px">{{ number_format($focus_result_local[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="respect  @if($focus_result_local[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_local[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_local[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="respect-text">{{ $focus_result_local[0]['dimensional_results'][2]['dimensional_results'][2]['key']; }} <span class="respect-number">{{ number_format($focus_result_local[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="reward @if($focus_result_local[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_local[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_local[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="reward-text">{{ $focus_result_local[0]['dimensional_results'][3]['dimensional_results'][0]['key'];}} <span class="reward-number" style="margin-left: 110px;">{{ number_format($focus_result_local[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="inspire @if($focus_result_local[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_local[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_local[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="inspire-text">{{ $focus_result_local[0]['dimensional_results'][3]['dimensional_results'][1]['key']; }} <span class="inspire-number" style="margin-left: 90px;">{{ number_format($focus_result_local[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</span></p>
                            </div>
                            <div class="recognition @if($focus_result_local[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_local[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_local[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="recognition-text">{{ $focus_result_local[0]['dimensional_results'][3]['dimensional_results'][2]['key'];}} <span class="recognition-number" style="margin-left: 70px;">{{ number_format($focus_result_local[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</span></p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="quadrants" style="position: relative; top: -950px;">
                <span class="scale">Scale:</span>
                <div>
                    <span class="quadrant top-quartile"></span>
                    <span class="text-for-quartile">TOP QUARTILE</span>
                    <span class="quadrant second-quartile"></span>
                    <span class="text-for-quartile">SECOND QUARTILE</span>
                    <span class="quadrant third-quartile"></span>
                    <span class="text-for-quartile">THIRD QUARTILE</span>
                    <span class="quadrant bottom-quartile"></span>
                    <span class="text-for-quartile">BOTTOM QUARTILE</span>
                </div>
            </div>
        
        </div>  

        <div style="position: relative; top:20800px; left:40px;">
            <p class="center-title title">EXPAT NATIONALITY HEALTH IMAGE</p>
            <div class="organization-results-container">
                @if(number_format((($focus_result_expat[0]['value'] + $focus_result_expat[1]['value']) / 2), 0) <= 25)
                    <p class="quartile-orgnaztion-details bottom-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_expat[0]['value'] + $focus_result_expat[1]['value']) / 2), 0)}}</span></p>
                @elseif(number_format((($focus_result_expat[0]['value'] + $focus_result_expat[1]['value']) / 2), 0) <= 50)
                    <p class="quartile-orgnaztion-details third-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_expat[0]['value'] + $focus_result_expat[1]['value']) / 2), 0)}}</span></p>
                @elseif(number_format((($focus_result_expat[0]['value'] + $focus_result_expat[1]['value']) / 2), 0) <= 80)
                    <p class="quartile-orgnaztion-details second-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_expat[0]['value'] + $focus_result_expat[1]['value']) / 2), 0)}}</span></p>
                @else
                    <p class="quartile-orgnaztion-details top-quartile organization-results-score"><span class="quartile-second-part">{{number_format((($focus_result_expat[0]['value'] + $focus_result_expat[1]['value']) / 2), 0)}}</span></p>
                @endif
        
                @if(number_format((($focus_result_expat[0]['value'] + $focus_result_expat[1]['value']) / 2), 0) <= 25)
                    <p class="quartile-orgnaztion-details bottom-quartile organization-results-quartile"><span class="quartile-first-part">BOTTOM</span> <span class="quartile-second-part">QUARTILE</span></p>
                @elseif(number_format((($focus_result_expat[0]['value'] + $focus_result_expat[1]['value']) / 2), 0) <= 50)
                    <p class="quartile-orgnaztion-details third-quartile organization-results-quartile"><span class="quartile-first-part">THIRD</span> <span class="quartile-second-part">QUARTILE</span></p>
                @elseif(number_format((($focus_result_expat[0]['value'] + $focus_result_expat[1]['value']) / 2), 0) <= 80)
                    <p class="quartile-orgnaztion-details second-quartile organization-results-quartile"><span class="quartile-first-part">SECOND</span> <span class="quartile-second-part">QUARTILE</span></p>
                @else
                    <p class="quartile-orgnaztion-details top-quartile organization-results-quartile"><span class="quartile-first-part">TOP</span> <br> <span class="quartile-second-part">QUARTILE</span></p>
                @endif

                <div class="quartile-orgnaztion-details-left-column" style="background-color: white">
                    @if(number_format((($focus_result_expat[0]['value'] + $focus_result_expat[1]['value']) / 2), 0) <= 25)
                        <img class="state-color-image" src="{{ public_path('red overall score.png') }}" alt="">
                    @elseif(number_format((($focus_result_expat[0]['value'] + $focus_result_expat[1]['value']) / 2), 0) <= 50)
                        <img class="state-color-image" src="{{ public_path('orange overall score.png') }}" alt="">
                    @elseif(number_format((($focus_result_expat[0]['value'] + $focus_result_expat[1]['value']) / 2), 0) <= 80)
                        <img class="state-color-image" src="{{ public_path('yellow overall score.png') }}" alt="">
                    @else
                        <img class="state-color-image" src="{{ public_path('top overall score.png') }}" alt="">
                    @endif
                    <img class="stats-picture" src=" {{public_path('expat.png')}}" alt="">
                </div>

                    <!-- Start of External -->
                <div class="quartile-orgnaztion-details-right-column">
                    <div class="inside-focus-result">
                        <div class="inside-focus-result-header @if($focus_result_expat[1]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[1]['value'] <= 50) third-quartile @elseif($focus_result_expat[1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <h3 class="inside-focus-result-header-text">INSIDE</h3>
                            <h3 class="inside-focus-result-header-number">{{number_format($focus_result_expat[1]['value'],0);}}</h3>
                        </div>
                        <div class="inside-focus-result-accountability @if($focus_result_expat[1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_expat[1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-accountability-text">{{ $focus_result_expat[1]['dimensional_results'][0]['key']; }}</p>
                            <p class="inside-focuse-result-accountability-number">{{ number_format($focus_result_expat[1]['dimensional_results'][0]['value'] ,0); }}</p>
                        </div>
                        <div class="inside-focus-result-leadership @if($focus_result_expat[1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_expat[1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-leadership-text">{{ $focus_result_expat[1]['dimensional_results'][1]['key']; }}</p>
                            <p class="inside-focus-result-leadership-number">{{ number_format($focus_result_expat[1]['dimensional_results'][1]['value'] ,0) }}</p>
                        </div>
                        <div>
                            <div class="responsibilities @if($focus_result_expat[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_expat[1]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="responsibilities-text">{{ $focus_result_expat[1]['dimensional_results'][0]['dimensional_results'][0]['key']; }}<span class="responsibilities-number">{{ number_format($focus_result_expat[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="trustworthiness @if($focus_result_expat[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_expat[1]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="turstworthiness-text">{{ $focus_result_expat[1]['dimensional_results'][0]['dimensional_results'][1]['key']; }}<span class="turstworthiness-number">{{ number_format($focus_result_expat[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</span></p>
                            </div>
                            <div class="commitment @if($focus_result_expat[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_expat[1]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="commitment-text">{{ $focus_result_expat[1]['dimensional_results'][0]['dimensional_results'][2]['key']; }} <span class="commitment-number">{{ number_format($focus_result_expat[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="democratic @if($focus_result_expat[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_expat[1]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="democratic-text">{{ $focus_result_expat[1]['dimensional_results'][1]['dimensional_results'][0]['key']; }}  <span class="democratic-number">{{  number_format($focus_result_expat[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0); }}</span> </p>
                            </div>
                            <div class="autocratic @if($focus_result_expat[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_expat[1]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="autocratic-text">{{ $focus_result_expat[1]['dimensional_results'][1]['dimensional_results'][1]['key']; }} <span class="autocratic-number">{{  number_format($focus_result_expat[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="transformational @if($focus_result_expat[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_expat[1]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="transformational-text">{{ $focus_result_expat[1]['dimensional_results'][1]['dimensional_results'][2]['key']; }} <span class="transformational-number">{{  number_format($focus_result_expat[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div class="inside-focus-result-working-environment  @if($focus_result_expat[1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_expat[1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-working-environment-text">{{ $focus_result_expat[1]['dimensional_results'][2]['key']; }}</p>
                            <p class="inside-focus-result-working-environment-number">{{ number_format($focus_result_expat[1]['dimensional_results'][2]['value'],0); }}</p>
                        </div>
                        <div class="inside-focus-result-motivation @if($focus_result_expat[1]['dimensional_results'][3]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[1]['dimensional_results'][3]['value'] <= 50) third-quartile @elseif($focus_result_expat[1]['dimensional_results'][3]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-motivation-text">{{ $focus_result_expat[1]['dimensional_results'][3]['key']; }}</p>
                            <p class="inside-focus-result-motivation-number">{{ number_format($focus_result_expat[1]['dimensional_results'][3]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="trusting @if($focus_result_expat[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_expat[1]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="trusting-text">{{ $focus_result_expat[1]['dimensional_results'][2]['dimensional_results'][0]['key']; }} <span class="trusting-number">{{ number_format($focus_result_expat[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="fairness @if($focus_result_expat[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_expat[1]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="fairness-text">{{ $focus_result_expat[1]['dimensional_results'][2]['dimensional_results'][1]['key']; }} <span class="fairness-number">{{ number_format($focus_result_expat[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="respect @if($focus_result_expat[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_expat[1]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="respect-text">{{ $focus_result_expat[1]['dimensional_results'][2]['dimensional_results'][2]['key']; }} <span class="respect-number">{{ number_format($focus_result_expat[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="reward @if($focus_result_expat[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_expat[1]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="reward-text">{{ $focus_result_expat[1]['dimensional_results'][3]['dimensional_results'][0]['key']; }} <span class="reward-number">{{ number_format($focus_result_expat[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="inspire @if($focus_result_expat[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_expat[1]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="inspire-text">{{$focus_result_expat[1]['dimensional_results'][3]['dimensional_results'][1]['key']; }}<span class="inspire-number">{{number_format($focus_result_expat[1]['dimensional_results'][3]['dimensional_results'][1]['value'] ,0);}}</span></p>
                            </div>
                            <div class="recognition @if($focus_result_expat[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_expat[1]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="recognition-text">{{$focus_result_expat[1]['dimensional_results'][3]['dimensional_results'][2]['key']; }} <span class="recognition-number">{{number_format($focus_result_expat[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="outside-focus-result">
                        <div class="inside-focus-result-header @if($focus_result_expat[0]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[0]['value'] <= 50) third-quartile @elseif($focus_result_expat[0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <h3 class="inside-focus-result-header-text">OUTSIDE</h3>
                            <h3 class="inside-focus-result-header-number">{{ number_format($focus_result_expat[0]['value'],0); }}</h3>
                        </div>
                        <div class="inside-focus-result-accountability @if($focus_result_expat[0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_expat[0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-accountability-text">{{ $focus_result_expat[0]['dimensional_results'][0]['key']; }}</p>
                            <p class="inside-focuse-result-accountability-number">{{ number_format($focus_result_expat[0]['dimensional_results'][0]['value'],0);}}</p>
                        </div>
                        <div class="inside-focus-result-leadership @if($focus_result_expat[0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[0]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_expat[0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-leadership-text">{{ $focus_result_expat[0]['dimensional_results'][1]['key']; }}</p>
                            <p class="inside-focus-result-leadership-number">{{ number_format($focus_result_expat[0]['dimensional_results'][1]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="responsibilities @if($focus_result_expat[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_expat[0]['dimensional_results'][0]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="responsibilities-text">{{ $focus_result_expat[0]['dimensional_results'][0]['dimensional_results'][0]['key']; }}<span class="responsibilities-number" style="margin-left:110px">{{number_format($focus_result_expat[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="trustworthiness @if($focus_result_expat[0]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_expat[0]['dimensional_results'][0]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="turstworthiness-text">{{ $focus_result_expat[0]['dimensional_results'][0]['dimensional_results'][1]['key']; }}<span class="turstworthiness-number" style="margin-left:110px">{{number_format($focus_result_expat[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="commitment @if($focus_result_expat[0]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_expat[0]['dimensional_results'][0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="commitment-text">{{ $focus_result_expat[0]['dimensional_results'][0]['dimensional_results'][2]['key']; }} <span class="commitment-number" style="margin-left:90px">{{ number_format($focus_result_expat[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="democratic @if($focus_result_expat[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_expat[0]['dimensional_results'][1]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="democratic-text">{{ $focus_result_expat[0]['dimensional_results'][1]['dimensional_results'][0]['key']; }}  <span class="democratic-number" style="margin-left:80px">{{ number_format($focus_result_expat[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0); }}</span> </p>
                            </div>
                            <div class="autocratic @if($focus_result_expat[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_expat[0]['dimensional_results'][1]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="autocratic-text">{{$focus_result_expat[0]['dimensional_results'][1]['dimensional_results'][1]['key'];}} <span class="autocratic-number" style="margin-left:80px">{{ number_format($focus_result_expat[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="transformational @if($focus_result_expat[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_expat[0]['dimensional_results'][1]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="transformational-text">{{$focus_result_expat[0]['dimensional_results'][1]['dimensional_results'][2]['key'] }}<span class="transformational-number" style="margin-left: 90px;">{{ number_format($focus_result_expat[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div class="inside-focus-result-working-environment @if($focus_result_expat[0]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[0]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_expat[0]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-working-environment-text">External <br> Relation</p>
                            <p class="inside-focus-result-working-environment-number">{{number_format($focus_result_expat[0]['dimensional_results'][2]['value'],0) }}</p>
                        </div>
                        <div class="inside-focus-result-motivation @if($focus_result_expat[0]['dimensional_results'][3]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[0]['dimensional_results'][3]['value'] <= 50) third-quartile @elseif($focus_result_expat[0]['dimensional_results'][3]['value'] <= 80) second-quartile @else top-quartile @endif">
                            <p class="inside-focus-result-motivation-text">{{$focus_result_expat[0]['dimensional_results'][3]['key'] }}</p>
                            <p class="inside-focus-result-motivation-number">{{number_format($focus_result_expat[0]['dimensional_results'][3]['value'],0); }}</p>
                        </div>
                        <div>
                            <div class="trusting @if($focus_result_expat[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_expat[0]['dimensional_results'][2]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="trusting-text">{{ $focus_result_expat[0]['dimensional_results'][2]['dimensional_results'][0]['key']; }}<span class="trusting-number" style="margin-left:90px">{{number_format($focus_result_expat[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</span></p>
                            </div>
                            <div class="fairness  @if($focus_result_expat[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_expat[0]['dimensional_results'][2]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="fairness-text">{{ $focus_result_expat[0]['dimensional_results'][2]['dimensional_results'][1]['key']; }} <span class="fairness-number" style="margin-left:75px">{{ number_format($focus_result_expat[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0); }}</span></p>
                            </div>
                            <div class="respect  @if($focus_result_expat[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_expat[0]['dimensional_results'][2]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="respect-text">{{ $focus_result_expat[0]['dimensional_results'][2]['dimensional_results'][2]['key']; }} <span class="respect-number">{{ number_format($focus_result_expat[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0); }}</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="reward @if($focus_result_expat[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 50) third-quartile @elseif($focus_result_expat[0]['dimensional_results'][3]['dimensional_results'][0]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="reward-text">{{ $focus_result_expat[0]['dimensional_results'][3]['dimensional_results'][0]['key'];}} <span class="reward-number" style="margin-left: 110px;">{{ number_format($focus_result_expat[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0); }}</span></p>
                            </div>
                            <div class="inspire @if($focus_result_expat[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 50) third-quartile @elseif($focus_result_expat[0]['dimensional_results'][3]['dimensional_results'][1]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="inspire-text">{{ $focus_result_expat[0]['dimensional_results'][3]['dimensional_results'][1]['key']; }} <span class="inspire-number" style="margin-left: 90px;">{{ number_format($focus_result_expat[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</span></p>
                            </div>
                            <div class="recognition @if($focus_result_expat[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 25) bottom-quartile @elseif($focus_result_expat[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 50) third-quartile @elseif($focus_result_expat[0]['dimensional_results'][3]['dimensional_results'][2]['value'] <= 80) second-quartile @else top-quartile @endif">
                                <p class="recognition-text">{{ $focus_result_expat[0]['dimensional_results'][3]['dimensional_results'][2]['key'];}} <span class="recognition-number" style="margin-left: 70px;">{{ number_format($focus_result_expat[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</span></p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="quadrants" style="position: relative; top: -950px;">
                <span class="scale">Scale:</span>
                <div>
                    <span class="quadrant top-quartile"></span>
                    <span class="text-for-quartile">TOP QUARTILE</span>
                    <span class="quadrant second-quartile"></span>
                    <span class="text-for-quartile">SECOND QUARTILE</span>
                    <span class="quadrant third-quartile"></span>
                    <span class="text-for-quartile">THIRD QUARTILE</span>
                    <span class="quadrant bottom-quartile"></span>
                    <span class="text-for-quartile">BOTTOM QUARTILE</span>
                </div>
            </div>
        
        </div> 

        <div class="indicators-by-gender" style="position: relative; top: 21000px;">
            <p class="center-title title">INDICATORS BY NATIONALITY</p>
    
            <table>
                <tr>
                    <th style="background-color: white;"> </th>
                    <th>OVERALL SCORE</th>
                    <th>{{ $focus_result[1]['dimensional_results'][0]['key']; }}</th>
                    <th>{{ $focus_result[1]['dimensional_results'][1]['key']; }}</th>
                    <th>{{ $focus_result[1]['dimensional_results'][2]['key']; }}</th>
                    <th>{{ $focus_result[1]['dimensional_results'][3]['key']; }}</th>
                    <th>{{ $focus_result[0]['dimensional_results'][0]['key']; }}</th>
                    <th>{{ $focus_result[0]['dimensional_results'][1]['key']; }}</th>
                    <th>{{ $focus_result[0]['dimensional_results'][2]['key']; }}</th>
                    <th>{{ $focus_result[0]['dimensional_results'][3]['key']; }}</th>
                </tr>
                <tr style="text-align: center;">
                    <td>OVERALL</td>
                    <td class="@if(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) <= 25) bottom-quartile @elseif(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) <= 50) third-quartile @elseif(number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0) <= 80) second-quartile @else top-quartile @endif">{{ number_format((($focus_result[0]['value'] + $focus_result[1]['value']) / 2), 0); }}</td>
                    <td class="@if(number_format($focus_result[1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[1]['dimensional_results'][0]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result[1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[1]['dimensional_results'][1]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result[1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[1]['dimensional_results'][2]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result[1]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[1]['dimensional_results'][3]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result[0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[0]['dimensional_results'][0]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result[0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[0]['dimensional_results'][1]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result[0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[0]['dimensional_results'][2]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result[0]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result[0]['dimensional_results'][3]['value'],0); }}</td>
                </tr>
                <tr style="text-align: center;">
                    <td>LOCAL</td>
                    <td class="@if(number_format((($focus_result_local[0]['value'] + $focus_result_local[1]['value']) / 2), 0) <= 25) bottom-quartile @elseif(number_format((($focus_result_local[0]['value'] + $focus_result_local[1]['value']) / 2), 0) <= 50) third-quartile @elseif(number_format((($focus_result_local[0]['value'] + $focus_result_local[1]['value']) / 2), 0) <= 80) second-quartile @else top-quartile @endif">{{ number_format((($focus_result_local[0]['value'] + $focus_result_local[1]['value']) / 2), 0); }}</td>
                    <td class="@if(number_format($focus_result_local[1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_local[1]['dimensional_results'][0]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_local[1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_local[1]['dimensional_results'][1]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_local[1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_local[1]['dimensional_results'][2]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_local[1]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_local[1]['dimensional_results'][3]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_local[0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_local[0]['dimensional_results'][0]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_local[0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_local[0]['dimensional_results'][1]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_local[0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_local[0]['dimensional_results'][2]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_local[0]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_local[0]['dimensional_results'][3]['value'],0); }}</td>
                </tr>
                <tr style="text-align: center;">
                    <td>EXPAT</td>
                    <td class="@if(number_format((($focus_result_expat[0]['value'] + $focus_result_expat[1]['value']) / 2), 0) <= 25) bottom-quartile @elseif(number_format((($focus_result_expat[0]['value'] + $focus_result_expat[1]['value']) / 2), 0) <= 50) third-quartile @elseif(number_format((($focus_result_expat[0]['value'] + $focus_result_expat[1]['value']) / 2), 0) <= 80) second-quartile @else top-quartile @endif">{{ number_format((($focus_result_expat[0]['value'] + $focus_result_expat[1]['value']) / 2), 0); }}</td>
                    <td class="@if(number_format($focus_result_expat[1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_expat[1]['dimensional_results'][0]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_expat[1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_expat[1]['dimensional_results'][1]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_expat[1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_expat[1]['dimensional_results'][2]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_expat[1]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_expat[1]['dimensional_results'][3]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_expat[0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_expat[0]['dimensional_results'][0]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_expat[0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_expat[0]['dimensional_results'][1]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_expat[0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_expat[0]['dimensional_results'][2]['value'],0); }}</td>
                    <td class="@if(number_format($focus_result_expat[0]['dimensional_results'][3]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][3]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][3]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{ number_format($focus_result_expat[0]['dimensional_results'][3]['value'],0); }}</td>
                </tr>
            </table>        
          
            <div class="quadrants">
                <span class="scale">Scale:</span>
                <div>
                    <span class="quadrant top-quartile"></span>
                    <span class="text-for-quartile">TOP QUARTILE</span>
                    <span class="quadrant second-quartile"></span>
                    <span class="text-for-quartile">SECOND QUARTILE</span>
                    <span class="quadrant third-quartile"></span>
                    <span class="text-for-quartile">THIRD QUARTILE</span>
                    <span class="quadrant bottom-quartile"></span>
                    <span class="text-for-quartile">BOTTOM QUARTILE</span>
                </div>
            </div>
        </div>

        <div class="practices-by-gender" style="position: relative; top: 22700px;">
            <p class="center-title title"> PRACTICES BY NATIONALITY </p>
            <table>
                <tr>
                    <th>INDICATOR</th>
                    <th>PRACTICE</th>
                    <th>OVERALL SCORE</th>
                    <th>LOCAL</th>
                    <th>EXPAT</th>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[1]['dimensional_results'][0]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[1]['dimensional_results'][0]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[1]['dimensional_results'][0]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[1]['dimensional_results'][0]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_local[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_local[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_local[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_local[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_local[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_local[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_expat[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_expat[1]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_expat[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_expat[1]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_expat[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_expat[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[1]['dimensional_results'][1]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[1]['dimensional_results'][1]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[1]['dimensional_results'][1]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[1]['dimensional_results'][1]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_local[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_local[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_local[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_local[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_local[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_local[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_expat[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_expat[1]['dimensional_results'][1]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_expat[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_expat[1]['dimensional_results'][1]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_expat[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_expat[1]['dimensional_results'][1]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[1]['dimensional_results'][2]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[1]['dimensional_results'][2]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[1]['dimensional_results'][2]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[1]['dimensional_results'][2]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_local[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_local[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_local[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_local[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_local[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_local[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_expat[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_expat[1]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_expat[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_expat[1]['dimensional_results'][2]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_expat[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_expat[1]['dimensional_results'][2]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[1]['dimensional_results'][3]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[1]['dimensional_results'][3]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[1]['dimensional_results'][3]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[1]['dimensional_results'][3]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_local[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_local[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_local[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_local[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_local[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_local[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_expat[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_expat[1]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_expat[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_expat[1]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_expat[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_expat[1]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[0]['dimensional_results'][0]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[0]['dimensional_results'][0]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[0]['dimensional_results'][0]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[0]['dimensional_results'][0]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_local[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_local[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_local[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_local[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_local[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_local[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_expat[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_expat[0]['dimensional_results'][0]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_expat[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_expat[0]['dimensional_results'][0]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_expat[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_expat[0]['dimensional_results'][0]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[0]['dimensional_results'][1]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[0]['dimensional_results'][1]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[0]['dimensional_results'][1]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[0]['dimensional_results'][1]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_local[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_local[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_local[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_local[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_local[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_local[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_expat[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_expat[0]['dimensional_results'][1]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_expat[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_expat[0]['dimensional_results'][1]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_expat[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_expat[0]['dimensional_results'][1]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[0]['dimensional_results'][2]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[0]['dimensional_results'][2]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[0]['dimensional_results'][2]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[0]['dimensional_results'][2]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_local[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_local[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_local[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_local[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_local[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_local[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_expat[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_expat[0]['dimensional_results'][2]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_expat[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_expat[0]['dimensional_results'][2]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_expat[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_expat[0]['dimensional_results'][2]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <td>{{ $focus_result[0]['dimensional_results'][3]['key']; }}</td>
                    <td>
                        <div class="practice-1">{{$focus_result[0]['dimensional_results'][3]['dimensional_results'][0]['key'];}}</div>
                        <div class="practice-2">{{$focus_result[0]['dimensional_results'][3]['dimensional_results'][1]['key'];}}</div>
                        <div class="practice-3">{{$focus_result[0]['dimensional_results'][3]['dimensional_results'][2]['key'];}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3  @if(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_local[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_local[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_local[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_local[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_local[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_local[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_local[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                    <td>
                        <div class="value-1 @if(number_format($focus_result_expat[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_expat[0]['dimensional_results'][3]['dimensional_results'][0]['value'],0);}}</div>
                        <div class="value-2 @if(number_format($focus_result_expat[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_expat[0]['dimensional_results'][3]['dimensional_results'][1]['value'],0);}}</div>
                        <div class="value-3 @if(number_format($focus_result_expat[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 25) bottom-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 50) third-quartile @elseif(number_format($focus_result_expat[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0) <= 80) second-quartile @else top-quartile @endif">{{number_format($focus_result_expat[0]['dimensional_results'][3]['dimensional_results'][2]['value'],0);}}</div>
                    </td>
                </tr>
            </table>
            <div class="quadrants">
                <span class="scale">Scale:</span>
                <div>
                    <span class="quadrant top-quartile"></span>
                    <span class="text-for-quartile">TOP QUARTILE</span>
                    <span class="quadrant second-quartile"></span>
                    <span class="text-for-quartile">SECOND QUARTILE</span>
                    <span class="quadrant third-quartile"></span>
                    <span class="text-for-quartile">THIRD QUARTILE</span>
                    <span class="quadrant bottom-quartile"></span>
                    <span class="text-for-quartile">BOTTOM QUARTILE</span>
                </div>
            </div>
        </div>

        <div class="center-title" style="position: relative; top: 23850px;">
            <h1 class="custom-title">HIGHEST AND LOWEST 5 PRACTICES</h1>
                <h3 class="heading" style="position: relative; left:-400px; top:80px">OVERALL OHX-RAY <br> SCORE</h3>
                <h3 class="heading" style="position: relative; top:40px;">Local Level</h3>
                <h3 class="heading" style="position: relative; left:990px; width:180px;">Expat Level</h3>
            <div class="final-row" style="margin-bottom: 100px;">
                <ul class="final-col" style="margin-right: 100px;">
                    @for($i = 0; $i < 5;$i++) 
                        <li class="final-item @if($sort_results[$i]['value'] <= 25) bottom-quartile @elseif($sort_results[$i]['value'] <= 50) third-quartile @elseif($sort_results[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                            {{$sort_results[$i]['key']}}
                            <span class="grade">{{ number_format($sort_results[$i]['value'],0); }}</span>
                        </li>
                    @endfor
                </ul>
                <ul class="final-col" style="margin-right: 100px;">
                    @for($i = 0; $i < 5;$i++) 
                        <li class="final-item @if($sort_results_local[$i]['value'] <= 25) bottom-quartile @elseif($sort_results_local[$i]['value'] <= 50) third-quartile @elseif($sort_results_local[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                            {{$sort_results_local[$i]['key']}}
                            <span class="grade">{{ number_format($sort_results_local[$i]['value'],0); }}</span>
                        </li>
                    @endfor
                </ul>
                <ul class="final-col">
                    @for($i = 0; $i < 5;$i++) 
                        <li class="final-item @if($sort_results_expat[$i]['value'] <= 25) bottom-quartile @elseif($sort_results_expat[$i]['value'] <= 50) third-quartile @elseif($sort_results_expat[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                            {{$sort_results_expat[$i]['key']}}
                            <span class="grade">{{ number_format($sort_results_expat[$i]['value'],0); }}</span>
                        </li>
                    @endfor
                </ul>
            </div>
            <div class="final-row" >
                <ul class="final-col" style="margin-right: 100px;">
                    @for($i = 23; $i>18;$i--)
                        <li class="final-item @if($sort_results[$i]['value'] <= 25) bottom-quartile @elseif($sort_results[$i]['value'] <= 50) third-quartile @elseif($sort_results[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                            {{$sort_results[$i]['key']}}
                            <span class="grade">{{ number_format($sort_results[$i]['value'],0); }}</span>
                        </li>
                    @endfor
                </ul>
                <ul class="final-col" style="margin-right: 100px;">
                    @for($i = 23; $i>18;$i--)
                        <li class="final-item @if($sort_results_local[$i]['value'] <= 25) bottom-quartile @elseif($sort_results_local[$i]['value'] <= 50) third-quartile @elseif($sort_results_local[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                            {{$sort_results_local[$i]['key']}}
                            <span class="grade">{{ number_format($sort_results_local[$i]['value'],0); }}</span>
                        </li>
                    @endfor
                </ul>
                <ul class="final-col">
                    @for($i = 23; $i>18;$i--)
                        <li class="final-item @if($sort_results_expat[$i]['value'] <= 25) bottom-quartile @elseif($sort_results_expat[$i]['value'] <= 50) third-quartile @elseif($sort_results_expat[$i]['value'] <= 80) second-quartile @else top-quartile @endif">
                            {{$sort_results_expat[$i]['key']}}
                            <span class="grade">{{ number_format($sort_results_expat[$i]['value'],0); }}</span>
                        </li>
                    @endfor
                </ul>
            </div>
            <div class="quadrants">
                <span class="scale">Scale:</span>
                <div>
                    <span class="quadrant top-quartile"></span>
                    <span class="text-for-quartile">TOP QUARTILE</span>
                    <span class="quadrant second-quartile"></span>
                    <span class="text-for-quartile">SECOND QUARTILE</span>
                    <span class="quadrant third-quartile"></span>
                    <span class="text-for-quartile">THIRD QUARTILE</span>
                    <span class="quadrant bottom-quartile"></span>
                    <span class="text-for-quartile">BOTTOM QUARTILE</span>
                </div>
            </div>
        </div>

</body>
</html>