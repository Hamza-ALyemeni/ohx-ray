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
                                        <img src="https://www.ohxray.com/assets/imgs/3.png" alt="" class="img-fluid mx-auto d-block" height="60">
                                        <img src="https://www.ohxray.com/assets/imgs/3.png" alt="" class="img-fluid mx-auto d-block" height="60" style="float: right;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                <tbody>
                <tr>
                    <td style="font-size:16px">
                        <!-- $company_name Partners-->
						<p>Dear {{$company_name}}, </p>
                        <p>Greetings,</p> 
						<p>In line with the CEO's previous announcement regarding the launch of the <b><span style="color:red;font-weight:bold">Organizations Health </span> <span style="color:rgb(16, 88, 16);font-weight:bold"> X-Ray </span>  </b> survey that will 
                        measure the Culture and working environment, we, at <b style="font-weight:bold">(Culture Change Solutions)  </b> , are thrilled to collaborate with you as a strategic partner in devising solutions to enhance your work culture and environment.</p>
                        <p>Thank you for your trust, and we will work hard to reflect your voice in a clear, practical way so that will help to develop the work environment.</p>
                        <p><b>Note: Attached is the survey link, this link is for you only and we hope it will not be transferred or shared with any other employee.</b></p>
                        <p>Wish you all the best,</p>
					</td>
					<td></td>
					<td style="text-align: right;direction: rtl; vertical-align: top;font-size:16px" width="50%">
						<!-- $company_name_ar -->
                        <p>شريكنا العزيز في {{$company_name_ar}}،</p>
                        <p>السلام عليكم ورحمه الله. </p>
                        <!--<p> شكرا على ثقتك في 
                            <b style="color:red;font-weight:bold"> (مؤشر الصحة المؤسسي OHX-RAY) </b> وسنعمل جاهدين على عكس صوتك بشكل علمي واضح لتكون مخرجات هذا الاستبيان من الركائز الأساسية التي تحدد الاتجاهات المستقبلية لتطوير بيئة العمل . </p>
						<p><b>ملاحظة: مرفق رابط الاستبيان هذا الرابط مخصص لك فقط ونأمل عدم تحويله أو مشاركته مع أي موظف آخر.</b></p> -->
                        <p>الحاقا لما تم إعلانه سابقا من قبل الرئيس التنفيذي عن إطلاق مؤشر قياس ثقافة وبيئة العمل 
                            <b > (<span style="color:red;font-weight:bold">مؤشر الصحة المؤسسي </span><span style="color:rgb(16, 88, 16);font-weight:bold"> OHX-RAY</span>) </b> نسعد نحن في <b style="font-weight:bold"> (شركة حلول التغير الثقافي CCS) </b> بالتعاون معكم كشريك استراتيجي وداعم في خلق حلول لتطوير ثقافة وبيئة العمل. </p>
                        <p></p>
                        <p></p>
                        <p>شكرا على ثقتكم وسنعمل جاهدين على عكس صوتك بشكل عملي واضح لتكون مخرجات هذا الاستبيان من الركائز الأساسية التي تحدد الاتجاهات المستقبلية لتطوير بيئة العمل لديكم.</p>
                        <p><b>ملاحظة: مرفق رابط الاستبيان ، هذا الرابط مخصص لك فقط ونأمل عدم تحويله أو مشاركته مع أي موظف آخر.</b></p> 
                        
                        <p>بالتوفيق للجميع</p>
                    </td>
                </tr>

                
				<tr>
                    <td>
                        <center>
                            <a href="{{$survey->link.'/'.$survey_company_id.'/'.$token}}"
                               style="display: inline-block; padding: 11px 30px; margin: 20px 0px 30px; font-size: 15px; color: #fff; background: #1e88e5; border-radius: 60px; text-decoration:none;">Join Survey</a>
                        </center>
                       <!-- <b>CCS Team</b>
                        <p><img src="https://www.ohxray.com/assets/imgs/EHC2.png" alt="" class="img-fluid mx-auto d-block" height="50"></p> -->
					</td>
					<td></td>
					<td style="text-align: right;direction: rtl;" width="50%">
                        <center>
                            <a href="{{$survey->link.'/'.$survey_company_id.'/'.$token}}"
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
