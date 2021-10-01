@extends('template.mainB')

@section('content')
    

<form enctype="multipart/form-data" action="{{route("hero.update", $hero->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content: center;">
    <div style="display:flex; flex-direction:column">
    <label for="">Title:</label>
    <input type="text" name="title" value="{{$hero->title}}">
    <br>
    <label for="">Description :</label>
    <input type="text" name="description" value="{{$hero->description}}">
    <br>
    <label for="">Bouton :</label>
    <input type="text" name="bouton" value="{{$hero->bouton}}">
    <br>
    <label for="">Bouton :</label>
    <input type="file" name="url" value="{{$hero->url}}">
    <br>
    </div>
    </div>

    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>
@endsection