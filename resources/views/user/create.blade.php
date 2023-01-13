<form action="{{url('user/store')}}" method="post">
@csrf

<input type="email" name="email" placeholder="email">
<input type="password" name="pswd" placeholder="pswd">

<input type="submit" name="register" value="register">
</form>
