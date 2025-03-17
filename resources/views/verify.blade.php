<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>OHX-Ray</title>
    <link rel="icon" type="image/png" href="{{asset('assets')}}/imgs/1.svg"/>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"
        integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ=="
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{asset('assets')}}/app.css"/>
    <link rel="stylesheet" href="{{asset('assets')}}/breakPoints.css"/>
</head>
<body>
<div class="container">
    <div class="login-container">
        <div class="gradient-bg login-desc">
            <image src="{{asset('assets')}}/imgs/1.svg" alt="OHX-Ray logo"/>
            <div class="login-desc-details">
                <h1>Organizations Health X-ray</h1>
                <div class="login-desc-details-img">
                    <image src="{{asset('assets')}}/imgs/x-ray-device.png" alt="Default img"/>
                </div>
            </div>
        </div>
        <div class="gradient-bg login-form">
            <div class="login-form-profile-img">
                <image src="{{asset('assets')}}/imgs/1.svg"/>
            </div>
            <div class="login-form-header">
                <h3>Verify Code</h3>
                <p>
                    Please enter the Verification code sent to
                    <span>"{{Auth::user()->email}}"</span>
                </p>
            </div>
            <div class="hr-style"></div>

            <form method="post" action="{{url('verify')}}">
                @csrf
                <div class="verify-form-fields mb-3" style="width: fit-content;">
                    <div class="ui grid">
                        <div class="four column row">
                            <div class="column ui input">
                                <input name="verify1" maxlength="1"/>
                            </div>
                            <div class="column ui input">
                                <input name="verify2" maxlength="1"/>
                            </div>
                            <div class="column ui input">
                                <input name="verify3" maxlength="1"/>
                            </div>
                            <div class="column ui input">
                                <input name="verify4" maxlength="1"/>
                            </div>
                        </div>
                        @if (count($errors) > 0)
                            <span class="invalid-feedback" role="alert">
                            <strong>Invalid Verification code</strong>
                        </span>
                            @enderror

                    </div>
                </div>
                <div class="verfiy-btns">
                    <p>Don't recieve an OTP ?</p>
                    <button class="ui negative button">Resend OTP</button>
                </div>
                <div class="form-button">
                    <button type="submit" class="ui secondary fluid button submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="ui modal successModal">
    <div class="vvv">
        <div class="modal-img mt-3">
            <img src="{{asset('assets')}}/imgs/image.png" alt="Profile img"/>
        </div>
        <div class="modal-desc">
            <h1>Congratulations</h1>
            <p>Mr. {{Auth::user()->f_name}} {{Auth::user()->l_name}}</p>
            <div class="hr-style"></div>
        </div>
        <div class="modal-actions">
            <div class="form-button mb-3">
                <a
                    id="success"
                    class="ui secondary fluid button basic"
                    href="{{url('/')}}"
                >Welcome to Home Dashboard</a
                >
            </div>
        </div>
        <div class="form-button mb-3">
            <a class="ui secondary button done" href="{{url('/')}}">done</a>
        </div>
    </div>
</div>

<script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
    crossorigin="anonymous"
></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
<script src="{{asset('assets')}}/app.js"></script>
@if(session('success'))
    <script>
        $(".ui.modal").modal("show");

    </script>
@endif
</body>
</html>
