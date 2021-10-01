@extends('template.mainB')

@section('content')

<form enctype="multipart/form-data" action="{{route("about.update", $about->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content: center;">
    <div style="display:flex; flex-direction:column">
    <label for="">Title :</label>
    <input type="text" name="title" value="{{$about->title}}">
    <br>
    <label for="">Description :</label>
    <input type="text" name="description" value="{{$about->description}}">
    <br>
    <label for="">Bouton :</label>
    <input type="text" name="bouton" value="{{$about->bouton}}">
    <br>
    </div>
    </div>

    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>

@endsection