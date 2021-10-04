@extends('template.mainB')

@section('content')
  
<div class="card">
    <div class="ml-5">
    <p><b>ID de l'élément : </b><i>{{$user->id}}</i></p>
    <p><b>Name de l'élément : </b><i>{{$user->name}}</i></p>
    <p><b>Email de l'élément : </b><i>{{$user->email}}</i></p>
    <p><b>Email_Verified_At : </b><i>{{$user->email_verified_at}}</i></p>
    <p><b>Password de l'élément : </b><i>{{$user->password}}</i></p>
    <p><b>Role de l'élément : </b><i>{{$user->role_id}}</i></p>

    </div>
</div>


@endsection