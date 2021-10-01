@extends('template.mainB')

@section('content')
<br><br>
<div style="display: flex; justify-content:center;">
    <h1>Features</h1>
</div>
<div style="display: flex; justify-content:center;">
    <a class="btn btn-info" href="{{route("feature.create")}}">Create</a>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">P1</th>
        <th scope="col">P2</th>
        <th scope="col">P3</th>
        <th scope="col">URL</th>
        <th scope="col">Actions</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($features as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->title}}</td>
            <td>{{$item->description}}</td>
            <td>{{$item->p1}}</td>
            <td>{{$item->p2}}</td>
            <td>{{$item->p3}}</td>
            <td>{{$item->url}}</td>
            <td>
                <a href="{{route("feature.show", $item->id)}}" class="btn btn-warning">Show</a>
                <a href ="{{route("feature.edit", $item->id)}}" class="btn btn-success">Edit</a>
                <form action="{{route("feature.destroy", $item->id)}}" method="POST">
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