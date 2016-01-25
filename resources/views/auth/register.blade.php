<!-- resources/views/auth/register.blade.php -->

<!-- <form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div>
        Name
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentallela Alela! | </title>

    <!-- Bootstrap core CSS -->

    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{URL::asset('fonts/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{URL::asset('css/custom.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/icheck/flat/green.css')}}" rel="stylesheet">


    <script src="{{URL::asset('js/jquery.min.js')}}"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">
    
    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                    <form method="POST" action="/auth/login">
                    {!! csrf_field() !!}
                        <h1>Login Form</h1>
                        <div>
                            <input name="email" value="{{ old('email') }}" type="email" class="form-control" placeholder="Email" required="" />
                        </div>
                        <div>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div>
                        <button class="btn btn-default submit" type="submit">Login</button>
                            <!-- <a type="submit" class="btn btn-default submit">Log in</a> -->
                            <div class="reset_pass"><input type="checkbox" name="remember"> Remember Me</div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <p class="change_link">New to site?
                                <a href="#toregister" class="to_register"> Create Account </a>
                            </p>
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Gentelella Alela!</h1>

                                <p>©2015 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                            </div>
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
            <div id="register" class="animate form">
                <section class="login_content">
                    <form method="POST" action="/auth/register">
                    {!! csrf_field() !!}
                        <h1>Create Account</h1>
                        <div>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Username" required="" />
                        </div>
                        <div>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" required="" />
                        </div>
                        <div>
                            <input type="password" name="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required="" />
                        </div>
                        <div>
                        <button class="btn btn-default submit" type="submit">Register</button>
                            <!-- <a class="btn btn-default submit" href="index.html">Submit</a> -->
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <p class="change_link">Already a member ?
                                <a href="#tologin" class="to_register"> Log in </a>
                            </p>
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Gentelella Alela!</h1>

                                <p>©2015 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                            </div>
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
        </div>
    </div>

</body>

</html>
