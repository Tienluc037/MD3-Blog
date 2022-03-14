{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--    <title></title>--}}
{{--    <style>--}}
{{--        .input{--}}
{{--            margin-bottom: 10px;--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<h3 style="color: #70a6fd">Đăng ký tài khoản</h3>--}}
{{--@if(\Illuminate\Support\Facades\Session::has('message'))--}}
{{--    <p style="color:red;">{{\Illuminate\Support\Facades\Session::get('message')}}</p>--}}
{{--@endif--}}
{{--<form action="{{route('register')}}" method="post">--}}
{{--    @csrf--}}
{{--    <div style="display:flex;flex-direction: column; width: 250px;">--}}
{{--    <input class="input" type="text" name="name" placeholder="Nhập tên">--}}
{{--    <input class="input" type="email" name="email" placeholder="Nhập email">--}}
{{--    <input class="input" type="password" name="password" placeholder="Nhập password">--}}
{{--    <input class="input" type="password" name="confirmPassword" placeholder="Nhập lại password"> </div>--}}
{{--    @foreach($roles as $role)--}}
{{--        @if($role->id != 1)--}}
{{--            <input type="checkbox" name="role[]" value="{{$role->id}}">{{$role->name}}<br>--}}
{{--        @endif--}}
{{--    @endforeach--}}
{{--    <button>Đăng ký</button>--}}
{{--</form>--}}
{{--</body>--}}
{{--</html>--}}



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
</head>
<body>
<div class="main-w3layouts wrapper">
    <h1 style="color: #76b852">Register An Account</h1>
    <div class="main-agileinfo">
        <div class="agileits-top">
            @if(\Illuminate\Support\Facades\Session::has('message'))
            <p style="color:red;">{{\Illuminate\Support\Facades\Session::get('message')}}</p>
            @endif
            <form action="{{route('register')}}" method="post">
                @csrf
                <input class="text" type="text" name="name" placeholder="Username" required="">
                <input class="text email" type="email" name="email" placeholder="Email" required="">
                <input class="text" type="password" name="password" placeholder="Password" required="">
                <input class="text w3lpass" type="password" name="confirmPassword" placeholder="Confirm Password" required="">
                <div class="wthree-text">
                    <label class="anim"> <span>Access rights :</span></label>
                        <div style="display:flex;flex-direction: column"></div>
                        @foreach($roles as $role)
                            @if($role->id != 1)
                            <label class="anim">
                            <input type="checkbox" name="role[]" value="{{$role->id}}">{{$role->name}}<br>
                            </label>
                        @endif
                        @endforeach
                <input type="submit" value="SIGN UP" >
                </div>
            </form>
            <p>You already have an account? <a href="{{route('login')}}"> Login Now!</a></p>
        </div>
    </div>
    <ul class="colorlib-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
</body>
</html>
