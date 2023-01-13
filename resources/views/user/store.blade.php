<form action="{{url('user/store')}}" method="post">
    @csrf
    
    <input type="email" name="email" placeholder="email" value="{{$user->email}}">
    <input type="password" name="pswd" placeholder="pswd" value="{{$user->pswd}}">
    
    <input type="submit" value="Register">
</form>