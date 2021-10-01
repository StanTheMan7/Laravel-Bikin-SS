@extends('template.mainB')

@section('content')
<br><br>
<div style="display: flex; justify-content:center;">
    <h1>contacts</h1>
</div>
<div style="display: flex; justify-content:center;">
    <a class="btn btn-info" href="{{route("contact.create")}}">Create</a>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Address</th>
        <th scope="col">Mail1</th>
        <th scope="col">Mail2</th>
        <th scope="col">Num1</th>
        <th scope="col">Num2</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($contacts as $item)
    <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->address}}</td>
        <td>{{$item->mail1}}</td>
        <td>{{$item->mail2}}</td>
        <td>{{$item->num1}}</td>
        <td>{{$item->num2}}</td>
        <td>
            <a href="{{route("contact.show", $item->id)}}" class="btn btn-warning">Show</a>
            <a href ="{{route("contact.edit", $item->id)}}" class="btn btn-success">Edit</a>
            <form action="{{route("contact.destroy", $item->id)}}" method="POST">
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