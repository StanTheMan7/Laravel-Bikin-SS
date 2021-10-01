
@extends('template.mainB')

@section('content')
    

<form enctype="multipart/form-data" action="{{route("service.update", $service->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content: center;">
    <div style="display:flex; flex-direction:column">
    <label for="">Title:</label>
    <input type="file" name="title" value="{{$service->title}}">
    <br>
    <label for="">Name :</label>
    <input type="text" name="text" value="{{$service->text}}">
    <br>
    <label for="">Text :</label>
    <input type="text" name="icon" value="{{$service->icon}}">
    <br>
    </div>
    </div>

    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>
@endsection