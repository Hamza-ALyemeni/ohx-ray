@extends('layouts.master-without-nav')
@section('title')
    @lang('OHX-Ray')
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
                                        <img src="https://www.ohxray.com/assets/imgs/1.png" alt="" class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                <tbody>
                <tr>
                    <td>
						<p>Dear Consultant, </p>
                        <p>Please fill out the value form for an organization ( {{$company_name}} ).</p>
						
						<p><b>Note: This link is for you only organization.</b></p>

					</td>
					<td></td>
					<td style="text-align: right;direction: rtl; vertical-align: top;font-size:16px" width="50%">
						<p>عزيزي المستشار ،</p>
                        <p>
                          .  الرجاء تعبئة نموذج القيم لمؤسسة  ( {{$company_name_ar}} ) </p>
                             
						<p><b>ملاحظة: هذا الرابط مخصص للمؤسسة المعنية فقط .</b></p>
					</td>
                </tr>
				<tr>
                    <td>
                        <center>
                            <a href="{{url('take_survey/en/'.$survey->id.'/'.$survey_company_id.'/'.$token)}}"
                               style="display: inline-block; padding: 11px 30px; margin: 20px 0px 30px; font-size: 15px; color: #fff; background: #1e88e5; border-radius: 60px; text-decoration:none;">Join Survey</a>
                        </center>
                        <b>- Thanks (OHXray team)</b>
					</td>
					<td></td>
					<td style="text-align: right;direction: rtl;" width="50%">
                        <center>
                            <a href="{{url('take_survey/ar/'.$survey->id.'/'.$survey_company_id.'/'.$token)}}"
                               style="display: inline-block; padding: 11px 30px; margin: 20px 0px 30px; font-size: 15px; color: #fff; background: #1e88e5; border-radius: 60px; text-decoration:none;">رابط الدخول للاستبيان</a>
                        </center>
                        <b>- شكرا (OHXray فريق)</b>
					</td>
                </tr>
                </tbody>
            </table>
                        <div class="mt-5">
                            <a class="btn btn-primary waves-effect waves-light" href="{{ url('index') }}">Back to
                                Dashboard</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
