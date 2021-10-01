@extends('template.mainB')

@section('content')
    

<form enctype="multipart/form-data" action="{{route("about2.update", $about2->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content: center;">
    <div style="display:flex; flex-direction:column">
        <label for="">icone :</label>
        <input type="text" name="icone" value="{{$about2->icone}}">
        <br>
        <label for="">title:</label>
        <input type="text" name="title" value="{{$about2->title}}">
        <br>
        <label for="">description :</label>
        <input type="text" name="description" value="{{$about2->description}}">
        
    </div>
</div>

    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>
@endsection