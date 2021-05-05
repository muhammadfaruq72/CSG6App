
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Login</title>

<link rel="icon" href="{{asset('image/favico.png')}}" sizes="16x16">

<link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />



<link href="{{asset('assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet" type="text/css" />

<link href="{{asset('assets/dist/css/styleBD.css')}}" rel="stylesheet" type="text/css" />



<script src="{{asset('assets/plugins/jQuery/jquery-1.12.4.min.js')}}" type="3eafd06fb2f6904f1d11947d-text/javascript"></script>
</head>
<body>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}






<div class="login-wrapper">
    <div class="container-center">
    <div class="panel panel-bd">
    <div class="panel-heading">
    <div class="view-header">
    <div class="header-icon">
    <i class="pe-7s-unlock"></i>
    </div>
    <div class="header-title">
    <h3>{{ __('Login') }}</h3>
    <small><strong>Please Login</strong></small>
    </div>
    </div>
    </div>
    <div class="panel-body">
    <form action="{{ route('login') }}" method="post" role="form" enctype="multipart/form-data" accept-charset="utf-8">
        @csrf
    {{-- <input type="hidden" name="csrf_test_name" value="0eac9311322401b119d0c9f0cda90156" /> --}}
    <div class="form-group">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    <span></span>
    </div>
    <div class="form-group">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    <span></span>
    </div>

    <div class=" form-group">
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

        <label class="form-check-label" for="remember">
            {{ __('Remember Me') }}
        </label> </div>
    <button type="submit" class="btn btn-lg btn-success btn-block">  {{ __('Login') }}</button>
    
    </form>

    </div>
    </div>
    </div>
    </div>


<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}" type="3eafd06fb2f6904f1d11947d-text/javascript"></script>
<script type="3eafd06fb2f6904f1d11947d-text/javascript">
            $(document).ready(function() {
                var info = $('table tbody tr');
                info.click(function() {
                    var email    = $(this).children().first().text(); 
                    var password = $(this).children().first().next().text();
                    $("input[name=email]").val(email);
                    $("input[name=password]").val(password);
                });
            });
        </script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="3eafd06fb2f6904f1d11947d-|49" defer=""></script>
</body>
</html>