
@extends('template.mainB')

@section('content')
    

<form enctype="multipart/form-data" action="{{route("portfolio.update", $portfolio->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content: center;">
    <div style="display:flex; flex-direction:column">
    <label for="">Title:</label>
    <input type="file" name="url" value="{{$portfolio->url}}">
    <br>
    <label for="">Name :</label>
    <input type="text" name="title" value="{{$portfolio->title}}">
    <br>
    <label for="">Text :</label>
    <input type="text" name="description" value="{{$portfolio->description}}">
    <br>
    </div>
    </div>

    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>
@endsection