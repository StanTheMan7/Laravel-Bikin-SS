@extends('template.mainB')

@section('content')
<br><br>
<div style="display: flex; justify-content:center;">
    <h1>About 2</h1>
</div>
<div style="display: flex; justify-content:center;">
    <a class="btn btn-info" href="{{route("about2.create")}}">Create</a>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Icon</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($about2s as $item)
    <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->icon}}</td>
        <td>{{$item->title}}</td>
        <td>{{$item->text}}</td>
        <td>
            <a href="{{route("about2.show", $item->id)}}" class="btn btn-warning">Show</a>
            <a href ="{{route("about2.edit", $item->id)}}" class="btn btn-success">Edit</a>
            <form action="{{route("about2.destroy", $item->id)}}" method="POST">
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