<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">
</head>

<body class="wrapper gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
            
        <h1 class="logo-name">Admin Login</h1>

        <form class="m-t" role="form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                       value="{{ old('email') }}" placeholder="Email" autofocus>

                @error('email')
                <div class="invalid-feedback text-left" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror

            </div>


            <div class="form-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                       name="password" placeholder="Password">

                @error('password')
                <div class="invalid-feedback text-left" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary block full-width m-b">LOGIN</button>

        </form>
    </div>
</div>

<script src="{{asset('js/app.js')}}"></script>

</body>

</html>
