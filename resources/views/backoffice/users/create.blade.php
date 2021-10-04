@extends('template.mainB')

@section('content')
    
<br>
<h1 style="text-align: center">User</h1>
<br>

<div style="display: flex; justify-content: center;">
    <form action="{{route("user.store")}}" method="post" enctype="multipart/form-data">
        @csrf
        <div style="display:flex; flex-direction:column">
    <input type="text" name="name" placeholder="name" value="{{ old('name') }}">
    <input type="text" name="email" placeholder="email" value="{{ old('email') }}">
    <input type="password" name="password" placeholder="password" value="{{ old('password') }}">
    <input type="text" name="role_id" placeholder="rôle" value="{{ old('role_id') }}">
    <span><i>Pour le rôle = 
        <ol><li>1. Admin</li>
        <li>2. Editeur</li>
        <li>3. Webmaster</li></ol></i></span>
    <br>
    <button class="btn btn-success" type="submit">Validate</button>
        </div>
    </form>
</div>


@endsection