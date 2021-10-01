@extends('template.mainB')

@section('content')
<br><br>
<div style="display: flex; justify-content:center;">
    <h1>Heros</h1>
</div>
<div style="display: flex; justify-content:center;">
    <a class="btn btn-info" href="{{route("hero.create")}}">Create</a>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Bouton</th>
        <th scope="col">URL de Image</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($heros as $item)
    <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->title}}</td>
        <td>{{$item->description}}</td>
        <td>{{$item->bouton}}</td>
        <td>{{$item->url}}</td>
        <td>
            <a href="{{route("hero.show", $item->id)}}" class="btn btn-warning">Show</a>
            <a href ="{{route("hero.edit", $item->id)}}" class="btn btn-success">Edit</a>
            <form action="{{route("hero.destroy", $item->id)}}" method="POST">
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