@extends('template.mainB')

@section('content')
    
<br>
<h1 style="text-align: center">Testimonials</h1>
<br>

<div style="display: flex; justify-content: center;">
    <form action="{{route("testimonials.store")}}" method="post" enctype="multipart/form-data">
        @csrf
        <div style="display:flex; flex-direction:column">
    <input type="text" name="name" placeholder="name" value="{{ old('name') }}">
    <input type="text" name="text" placeholder="text" value="{{ old('text') }}">
    <input type="text" name="job" placeholder="job" value="{{ old('job') }}">
    <input type="file" name="photo" placeholder="photo" value="{{ old('photo') }}">

    <br>
    <button class="btn btn-success" type="submit">Validate</button>
        </div>
    </form>
</div>


@endsection