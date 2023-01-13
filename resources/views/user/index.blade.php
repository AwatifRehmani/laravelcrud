<h1>home page</h1>

<table border="1">
    <tr>
        <th>id</th>
        <th>email</th>
        <th>password</th>
        <th>action</th>
    </tr>

    @foreach ($abc as $user)
    <tr>

        <td>{{$user->id}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>
        <td><a href="{{url('user/edit')}}/{{$user->id}}">Edit</a></td>
        <td><a href="{{url('user/delete')}}/{{$user->id}}">Delete</a></td>

    </tr>
        
    @endforeach
</table>

<script>
    @include('sweetalert::alert')

</script>