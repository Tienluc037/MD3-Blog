@if(\Illuminate\Support\Facades\Session::has('mgs'))
    <h5 style="color: red">{{\Illuminate\Support\Facades\Session::get('mgs')}}</h5>
@endif
<form action="" method="post">
    @csrf
    <input type="email" name="email" placeholder="nhap email">
    <input type="password" name="password" placeholder="nhap password">
    <button>Login</button>
</form>
