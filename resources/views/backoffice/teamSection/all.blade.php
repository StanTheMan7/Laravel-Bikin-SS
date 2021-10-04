@extends('template.mainB')

@section('content')
<br><br>
<div style="display: flex; justify-content:center;">
    <h1>Teams</h1>
</div>
<div style="display: flex; justify-content:center;">
    <a class="btn btn-info" href="{{route("team.create")}}">Create</a>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Url</th>
        <th scope="col">Name</th>
        <th scope="col">Job</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($teams as $item)
    <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->url}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->job}}</td>
        <td>
            <a href="{{route("team.show", $item->id)}}" class="btn btn-warning">Show</a>
            <a href ="{{route("team.edit", $item->id)}}" class="btn btn-success">Edit</a>
            <form action="{{route("team.destroy", $item->id)}}" method="POST">
                @csrf   
                @method('delete')
            <button type="submit" class="btn btn-danger mt-1">Delete</button>
            </form>
        </td>
      </tr>    
    @endforeach
    <div class="container">
      {{$teams->links()}}
    </div>
    </tbody>
  </table>


@endsection