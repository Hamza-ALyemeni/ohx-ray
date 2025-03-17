@extends('layouts.master-without-nav')
@section('title')
    @lang('OHXray')
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
                                        <img src="{{asset('assets')}}/imgs/2.png" alt="" class="img-fluid mx-auto d-block" >
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h1>Organizations Health X-ray</h1>
        <div style="display: flex; flex-direction: row;" class="responsive">
            <div style="width: 44%; margin: 3%">
                <p>Greetings,</p>
                <p>We are delighted for you to participate with us in this questionnaire, which is based on measuring the principal axes of concern in the work environment and culture in your organization to reflect an accurate picture of the current culture for senior management so that appropriate decisions can be taken to create a Better working environment.</p>
                
                <p>It takes an average of 8 minutes to answer all 67 questions. All the answers to these questions depend on what is routinely done in your department or all over the organization. </p>
                 <p><b>We guarantee that <span style="color:rgb(200, 32, 32);font-weight:bold">OHX-</span><span style="color:rgb(200, 32, 32);">ray</span> treats all responses in a confidential manner and will not reveal responses to anyone inside your organization. All answers will be shared as an average result for the group.</b></p>
                <p>
                    <u>  Please press "start" to begin enjoying the journey and providing the answers. </u>
               </p>
                <br>
                <p>Good luck!</p>
            </div>
            <div style="width: 44%; margin: 3%" dir="rtl">
                <p>السلام عليكم ورحمه الله </p>
                <p>
                    سعيدون كثيرا بمشاركتكم لنا في هذا الاستبيان، والذي يعتمد على قياس محاور رئيسية تهتم في بيئة وثقافة العمل في المنظمة لديكم وذلك لعكس الصورة الحقيقية للثقافة الحالية للإدارة العليا ليتم أخذ القرارات المناسبة لخلق بيئة عمل أفضل.                </p>
               <p></p>
               
                    <p>هذا الاستبيان يتكون من 67 سؤال ويستغرق كمتوسط للإجابة 8 دقائق، وللعلم جميع الإجابات على هذه الأسئلة تعتمد على ما يمارس بشكل يومي سواء في محيط عملك الصغير (إدارتك) أو محيط عملك الكبير (المنظمة).  </p>

                <br>
                <p><b>نؤكد أننا في (<span style="color:rgb(200, 32, 32);font-weight:bold">OHX-</span><span style="color:rgb(200, 32, 32);">ray</span>) نتعامل مع كل الإجابات بسرية تامة ولن يتم عرض أي إجابات فردية لأي مسؤول في منظمتكم، بل سيتم مشاركة الإجابات كمتوسط للمجموعات.
                
                </b></p>                <u> ولبداية الاستمتاع بالرحلة والإجابة على الأسئلة نأمل منكم الضغط على " أبدأ " للانطلاق.</u>
                </p>
                <p>بالتوفيق للجميع </p>
            </div>
        </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <a class="btn btn-primary waves-effect waves-light" href="{{url('take_survey/en/'.$id.'/'.$survey_company_id.'/'.$token)}}"> start</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <a class="btn btn-primary waves-effect waves-light" href="{{url('take_survey/ar/'.$id.'/'.$survey_company_id.'/'.$token)}}"> أبدأ</a>
                                </div>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
