@extends('template.mainB')

@section('content')
    
<br>
<h1 style="text-align: center">Features</h1>
<br>

<div style="display: flex; justify-content: center;">
    <form action="{{route("feature.store")}}" method="post" enctype="multipart/form-data">
        @csrf
        <div style="display:flex; flex-direction:column">
    <input type="file" name="url" placeholder="title" value="{{ old('title') }}">
    <input type="text" name="title" placeholder="title" value="{{ old('title') }}">
    <input type="text" name="description" placeholder="description" value="{{ old('description') }}">
    <input type="text" name="p1" placeholder="p1" value="{{ old('p1') }}">
    <input type="text" name="p2" placeholder="p2" value="{{ old('p2') }}">
    <input type="text" name="p3" placeholder="p3" value="{{ old('p3') }}">
    <br>
    <button class="btn btn-success" type="submit">Validate</button>
        </div>
    </form>
</div>

@endsection