<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title></title>
    <style>
        .input{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<h3 style="color: #70a6fd">Đăng ký tài khoản</h3>
@if(\Illuminate\Support\Facades\Session::has('message'))
    <p style="color:red;">{{\Illuminate\Support\Facades\Session::get('message')}}</p>
@endif
<form action="{{route('register')}}" method="post">
    @csrf
    <div style="display:flex;flex-direction: column; width: 250px;">
    <input class="input" type="text" name="name" placeholder="Nhập tên">
    <input class="input" type="email" name="email" placeholder="Nhập email">
    <input class="input" type="password" name="password" placeholder="Nhập password">
    <input class="input" type="password" name="confirmPassword" placeholder="Nhập lại password"> </div>
    @foreach($roles as $role)
        @if($role->id != 1)
            <input type="checkbox" name="role[]" value="{{$role->id}}">{{$role->name}}<br>
{{--        <input {{$role->id == 1 ? 'hidden' : ''}} type="checkbox" name="role[]" value="{{$role->id}}">--}}
{{--        {{$role->name === 'admin' ? '': $role->name}} <br>--}}
        @endif
    @endforeach
    <button>Đăng ký</button>
</form>
</body>
</html>
