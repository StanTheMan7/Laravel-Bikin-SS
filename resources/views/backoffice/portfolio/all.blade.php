@extends('template.mainB')

@section('content')
<br><br>
<div style="display: flex; justify-content:center;">
    <h1>portfolios</h1>
</div>
<div style="display: flex; justify-content:center;">
    <a class="btn btn-info" href="{{route("portfolio.create")}}">Create</a>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">URL de Image</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($portfolios as $item)
    <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->url}}</td>
        <td>{{$item->title}}</td>
        <td>{{$item->description}}</td>
        <td>
            <a href="{{route("portfolio.show", $item->id)}}" class="btn btn-warning">Show</a>
            <a href ="{{route("portfolio.edit", $item->id)}}" class="btn btn-success">Edit</a>
            <form action="{{route("portfolio.destroy", $item->id)}}" method="POST">
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