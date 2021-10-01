
@extends('template.mainB')

@section('content')
    

<form enctype="multipart/form-data" action="{{route("feature.update", $feature->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content: center;">
    <div style="display:flex; flex-direction:column">
    <label for="">Title:</label>
    <input type="text" name="title" value="{{$feature->title}}">
    <br>
    <label for="">Description :</label>
    <input type="text" name="text" value="{{$feature->description}}">
    <br>
    <label for="">Url :</label>
    <input type="file" name="url" value="{{$feature->url}}">
    <br> <label for="">p1 :</label>
    <input type="text" name="text" value="{{$feature->p1}}">
    <br> <label for="">p2 :</label>
    <input type="text" name="text" value="{{$feature->p2}}">
    <br> <label for="">p3 :</label>
    <input type="text" name="text" value="{{$feature->p3}}">
    <br>
    </div>
    </div>

    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>

@endsection