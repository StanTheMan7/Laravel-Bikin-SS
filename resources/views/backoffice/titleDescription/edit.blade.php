
@extends('template.mainB')

@section('content')

<form enctype="multipart/form-data" action="{{route("title.update", $titleDescription->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content: center;">
    <div style="display:flex; flex-direction:column">
    <label for="">Title :</label>
    <input type="text" name="title" value="{{$titleDescription->title}}">
    <br>
    <label for="">Description :</label>
    <input type="text" name="description" value="{{$titleDescription->description}}">
    <br>
    </div>
    </div>

    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>

@endsection