
@extends('template.mainB')

@section('content')
    
<form  action="{{route("user.update", $user->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content: center;">
    <div style="display:flex; flex-direction:column">
    <label for="">Name :</label>
    <input type="text" name="name" value="{{$user->name}}">
    <br>
    <label for="">Email :</label>
    <input type="text" name="email" value="{{$user->email}}">
    <br>
    <label for="">Password :</label>
    <input type="text" name="password" value="{{$user->password}}">
    <br>
    <select name="role_id" >
        @foreach ($role as $item)
        <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
    </select>
    </div>
    </div>

    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>


@endsection