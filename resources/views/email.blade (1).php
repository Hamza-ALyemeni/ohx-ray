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
                                        <img src="https://www.ohxray.com/assets/imgs/5.png" alt="" class="img-fluid mx-auto d-block" height="120">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                <tbody>
                <tr>
                    <td>
						<p>Dear Culture Partners, </p>
                        <p>In our aspiration to improve corporate culture and health by continuously measuring your valuable impressions and inputs about the cultural elements and dimensions in our work environment.</p>
						<p> We are confident that your opinions and observations in the questionnaire of organization health survey <b>(OHX-RAY)</b> will reflect the desired depth to us, OHXray is a methodology of the indicator represents measuring and evaluating the health of the organization to identify opportunities for improvement and strengths.</p>
                        <p>The answers are dealt with in complete transparency and confidentiality, hoping that the outputs of this questionnaire will be among the main pillars that determine our future directions for developing our work environment.</p>
                        <p>We thank you in advance for investing your time and effort to improve the work environment.</p>
						<p>Wish you all the best,</p>
						<p><b>Note: This link is for you only and we hope it will not be transferred or shared with any other employee.</b></p>

					</td>
					<td></td>
					<td style="text-align: right;direction: rtl; vertical-align: top;font-size:16px" width="50%">
						<p>شركاء الثقافة الأعزاء،</p>
                        <p>
                            في تطلّعنا إلى تحسين الثقافة والصحة المؤسسية بالقياس المستمر لانطباعاتكم ومدخلاتكم القيّمة حول العناصر والأبعاد الثقافية في بيئة
                            عملنا. </p>
                                <p>
                                  نثق بأن مشاركتكم لنا آرائكم وملاحظاتكم في مشروع قياس نضج الثقافة المؤسسية عبر استبيان
                            <b>(مؤشر الصحة المؤسسي OHX-RAY)</b> ستعكس لنا العمق المرجو، حيث تمثّل منهجية المؤشر قياس وتقويم صحة المنظمة للتعرف على فرص التحسين ونقاط القوة.</p>
                        <p>يتم التعامل مع الإجابات بشفافية وسرية تامة، آملين أن تكون مخرجات هذا الاستبيان من الركائز الأساسية التي تحدد اتجاهاتنا المستقبلية لتطوير بيئة عملنا</p>
                        <p>نشكر لكم مقدمًا استثماركم وقتكم وجهدكم لتجويد بيئة العمل.</p>
						<p>دمتم بخير،</p>
						<p><b>ملاحظة: هذا الرابط مخصص لك فقط ونأمل عدم تحويله أو مشاركته مع أي موظف آخر.</b></p>
					</td>
                </tr>
				<tr>
                    <td>
                        <center>
                            <a href="{{$survey->link.'/'.$token}}"
                               style="display: inline-block; padding: 11px 30px; margin: 20px 0px 30px; font-size: 15px; color: #fff; background: #1e88e5; border-radius: 60px; text-decoration:none;">Join Survey</a>
                        </center>
                        <b>- Thanks (OHXray team)</b>
					</td>
					<td></td>
					<td style="text-align: right;direction: rtl;" width="50%">
                        <center>
                            <a href="{{$survey->link.'/'.$token}}"
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
