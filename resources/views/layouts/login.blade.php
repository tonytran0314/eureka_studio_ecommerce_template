@extends('templates.MasterTemplate')

@section('title', 'Login')

@section('body')
    <div id="login_wrapper">
        <div id="login_header">Log into This website</div>
        <div id="login_body">

            <div id="login_form">
                <form action="#" method="POST">
                    <div id="input">
                        <div class="input_field">
                            <label for="email">Email Address</label>
                            <input type="text" name="email" required>
                        </div>

                        <div class="input_field">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password_field" required>
                            <i class="fa fa-eye-slash" id="password_toggle"></i>
                        </div>
                    </div>
                        
                    <div>
                        <button type="submit">Login</button>
                    </div>
                </form>
            </div>

            <div id="divider">or</div>

            <div id="login_options">

                <div class="option">
                    <div class="option_icon">
                        <img src="{{ asset('images/login/Google.png') }}" alt="option icon">
                    </div>
                    <div class="option_name">Continue with Google</div>
                </div>

                <div class="option">
                    <div class="option_icon">
                        <img src="{{ asset('images/login/Apple.png') }}" alt="option icon">
                    </div>
                    <div class="option_name">Continue with Apple</div>
                </div>

            </div>

        </div>
        <div id="login_footer">
            <div id="cant_log_in">Can’t log in?</div>
            <div id="term">Secure Login with reCAPTCHA subject to Google <br> Terms & Privacy</div>
        </div>
    </div>
@stop