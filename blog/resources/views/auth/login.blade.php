@if(\Illuminate\Support\Facades\Session::has('mgs'))
    <h5 style="color: red">{{\Illuminate\Support\Facades\Session::get('mgs')}}</h5>
@endif
<form action="{{route('login')}}" method="post">
    @csrf
    <input type="email" name="email" placeholder="Enter email">
    <input type="password" name="password" placeholder="Enter password">
    <button>Login</button>
</form>
