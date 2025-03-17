
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
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
    }

    .sub-title{
        font-size: 28px; 
        position: absolute; 
        left: 580px; 
        top: 500px;  
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
        background-color: #f4f4f4;
        padding: 20px;
        text-align: center;
        font-size: 16px;
        background-color: white;
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

    .response-rate , .nationlities-stats , .age-stats , .deparments-stats , .geneder-stats {
        width: 150px;
        border: 1px solid #ddd;
        padding: 20px;
        border-radius: 35px;
    }
    .response-rate{
        position: relative;
        left: 380px;
    }
    .nationlities-stats{
        position: relative;
        left: 720px;
        top: 80px;
    }
    .age-stats{
        position: relative;
        left: 480px;
        top: -260px;
    }
    .deparments-stats{
        position: relative;
        left: 250px;
        top: -470px;
    }
    .geneder-stats{
        position: relative;
        top: -800px;
        left: 20px;
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
        font-size: 20px;
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
        border: 1px solid black; /* for dubging */
    }
 
    .quartile-orgnaztion-details{
        width: 150px;
        /* padding: 20px; */
        border-radius: 35px;
        border: 2px solid rgba(168,168,168,255);
        text-align: center;
    }

    .organization-results-score{
        position: relative;
        left: 300px;
        padding-top: 20px;
        padding-bottom: 20px;
        font-size: 26px;
    }

    .organization-results-quartile{
        position: relative;
        left: 500px;
        top: -95px;
        font-size: 26px;
    }

    .organization-results-container{
        border:1px solid black; /* for dubging */
    }

    .quartile-orgnaztion-details-left-column{
        height: 1000px;
        width: 17%;
        background-color: rgb(222,226,221);
        color:#397b23;
    }

    .quartile-orgnaztion-details-right-column{
        display: inline;
        width: 80%;
    }



    

    /* *************************** */
</style>
<body>

    

<div class="overall-image-container">
    <div class="left-column-demo-image">
        <h1 style="font-size: 60px;">03</h1>
        <h4 style="font-size: 20px">dfas</h4>
        <h4 style="font-size: 20px">OHX-RAY OVERALL <br> IMAGE</h4>
    </div>
    <div class="right-column-overall">
        <p class="title">sdfasf OVERALL IMAGE</p>
        <p class="subtitle">HEALTH'S SCORE</p>

       
        <img class="overall-health-score-img" src="top overall score.png" alt="">

        <p class="score yellow-text">50</p>

    </div>



    <p class="quartile second-quartile"><span class="quartile-first-part">SECOND</span> <span class="quartile-second-part">QUARTILE</span></p>


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

