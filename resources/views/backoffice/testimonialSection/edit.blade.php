
@extends('template.mainB')

@section('content')
    
<form enctype="multipart/form-data" action="{{route("testimonials.update", $testimonial->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content: center;">
    <div style="display:flex; flex-direction:column">
    <label for="">Name :</label>
    <input type="text" name="name" value="{{$testimonial->name}}">
    <br>
    <label for="">Text :</label>
    <input type="text" name="text" value="{{$testimonial->text}}">
    <br>
    <label for="">job :</label>
    <input type="text" name="job" value="{{$testimonial->job}}">
    <br>
    <label for="">Photo :</label>
    <input type="file" name="photo" value="{{$testimonial->photo}}">
    <br>
    </div>
    </div>

    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>


@endsection