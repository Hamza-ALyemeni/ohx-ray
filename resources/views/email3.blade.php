@extends('layouts.master-without-nav')
@section('title')
    @lang('translation.Error_500')
@endsection
@section('content')
    <div class="my-5 pt-sm-5">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <div>
                            <div class="row justify-content-center">
                                <div class="col-sm-4">
                                    <div class="error-img">
                                        <img src="https://www.ohxray.com/assets/imgs/5.png" alt="" class="img-fluid mx-auto d-block" height="100">
                                        <img src="https://www.ohxray.com/assets/imgs/6.jpeg" alt="" class="img-fluid mx-auto d-block" height="100" style="float: right;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                <tbody>
                <tr>
                    <td style="font-size:16px">
                        <!-- $company_name -->
						<p>شريكنا العزيز في {{$company_name}}،</p>
                        <p>Greetings,</p> 

                        <p>We are delighted to invite you to participate in a project aimed at measuring the maturity of our organization culture .
                        This project is in collaboration with our vender <b style="font-weight:bold">(Culture Change Solutions <span style="color:rgb(200, 32, 32);font-weight:bold">CCS</span>)  </b>. Your valuable input through the questionnaire will help us identify the strengths and areas for improvement within our organization.</p>
                        <p>Your responses will play a crucial role in developing strategies to enhance the work environment and foster a positive culture.
                          Please rest assured that all answers will be treated with the utmost confidentiality.</p>
                         <p>We sincerely appreciate your cooperation and the time you dedicate to completing the questionnaire.</p>
                        <p><b>Note: Attached is the survey link, this link is for you only and we hope it will not be transferred or shared with any other employee.</b></p>
						<!--<p>In line with the REGA CEO's previous announcement regarding the launch of the <b><span style="color:rgb(200, 32, 32);font-weight:bold"> Organization Health  X-RAY </span>  </b> survey that will 
                        measure the Culture and working environment, we, at <b style="font-weight:bold">(Culture Change Solutions <span style="color:rgb(200, 32, 32);font-weight:bold">CCS</span>)  </b> , are thrilled to collaborate with you as a strategic partner in devising solutions to enhance your work culture and environment.</p>
                        <p>Thank you for your trust, and we will work hard to reflect your voice in a clear, practical way so that will help to develop the work environment.</p>
                        <p><b>Note: Attached is the survey link, this link is for you only and we hope it will not be transferred or shared with any other employee.</b></p>
                        <p>Wish you all the best,</p>-->
					</td>
					<td></td>
					<td style="text-align: right;direction: rtl; vertical-align: top;font-size:16px" width="50%">
						<!-- $company_name_ar -->
                        <p>شريكنا العزيز في {{$company_name_ar}}،</p>
                        <p>السلام عليكم ورحمه الله. </p>
                        <p></p>
                        <p> يُسعدنا مشاركتكم في الاستبيان المقدّم من <b style="font-weight:bold"> (شركة حلول التغيير الثقافي <span style="color:rgb(200, 32, 32);font-weight:bold">CCS</span>) </b>للتعرّف على نقاط القوة وفرص التحسين داخل بيئة عمل الهيئة . </p>
                            <!-- <b > (<span>مؤشر قياس نضج الثقافة المؤسسية </span><span style="color:rgb(200, 32, 32);font-weight:bold"> OHX-RAY</span>) </b> -->
                         <p></p>
                         <p></p>
                         <p></p> 
                        <p></p> 
                        <p></p>
                        <p>وسيكون لإجاباتكم دور رئيسي في خلق حلول لتطوير ثقافة وبيئة العمل لدينا، علماً بأنه يتم التعامل مع الإجابات بسرية تامة.</p>
                        <p></p> 
                        <p></p>
                        <p></p> 
                        <p></p> 
                        <p></p> 
                        <p>نشكركم مقدمًا ونقدر وقتكم..</p>

                        <p><b>تنويه: مرفق رابط الاستبيان ، هذا الرابط مخصص لك فقط ونأمل عدم تحويله أو مشاركته مع أي موظف آخر.</b></p> 

                    </td>
                </tr>

                
				<tr>
                    <td>
                        <center>
                            <a href="{{'https://www.ohxray.com/landingPage/1/'.$survey_company_id.'/'.$token}}"
                               style="display: inline-block; padding: 11px 30px; margin: 20px 0px 30px; font-size: 15px; color: #fff; background: #1e88e5; border-radius: 60px; text-decoration:none;">Join Survey</a>
                        </center>
                       <!-- <b>CCS Team</b>
                        <p><img src="https://www.ohxray.com/assets/imgs/EHC2.png" alt="" class="img-fluid mx-auto d-block" height="50"></p> -->
					</td>
					<td></td>
					<td style="text-align: right;direction: rtl;" width="50%">
                        <center>
                            <a href="{{'https://www.ohxray.com/landingPage/1/'.$survey_company_id.'/'.$token}}"
                               style="display: inline-block; padding: 11px 30px; margin: 20px 0px 30px; font-size: 15px; color: #fff; background: #1e88e5; border-radius: 60px; text-decoration:none;">رابط الدخول للاستبيان</a>
                        </center>
                       <!-- <b> شركه حلول التغيير الثقافي</b>
                        <p><img src="https://www.ohxray.com/assets/imgs/EHC2.png"  alt="" class="img-fluid mx-auto d-block" height="50"></p>-->
					</td>
                </tr> 
                </tbody>
            </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
