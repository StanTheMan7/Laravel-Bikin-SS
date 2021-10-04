@extends('template.mainB')

@section('content')<br><br>
<div style="display: flex; justify-content:center;">
    <h1>user</h1>
</div>
<div style="display: flex; justify-content:center;">
    <a class="btn btn-info" href="{{route("user.create")}}">Create</a>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Email_Verified_At</th>
        <th scope="col">Password</th>
        <th scope="col">Role_id</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($users as $item)
    <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->email_verified_at}}</td>
        <td>{{$item->password}}</td>
        <td>{{$item->role_id}}</td>
        <td>
            <a href="{{route("user.show", $item->id)}}" class="btn btn-warning">Show</a>
            <a href ="{{route("user.edit", $item->id)}}" class="btn btn-success">Edit</a>
            <form action="{{route("user.destroy", $item->id)}}" method="POST">
                @csrf   
                @method('delete')
            <button type="submit" class="btn btn-danger mt-1">Delete</button>
            </form>
        </td>
      </tr>    
    @endforeach
    </tbody>
  </table>

@endsection