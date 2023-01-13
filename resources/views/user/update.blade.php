<form action="{{url('user/update')}}" method="post">
    @csrf
    
    <input type="email" name="email" placeholder="email" value="{{$user->id}}">
    <input type="email" name="email" placeholder="email" value="{{$user->email}}">
    <input type="password" name="pswd" placeholder="pswd" value="{{$user->password}}">
    
    <input type="submit" value="save changes">
</form>