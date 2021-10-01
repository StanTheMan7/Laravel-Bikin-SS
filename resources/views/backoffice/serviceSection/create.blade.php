@extends('template.mainB')

@section('content')
    
<br>
<h1 style="text-align: center">Services</h1>
<br>

<div style="display: flex; justify-content: center;">
    <form action="{{route("service.store")}}" method="post" enctype="multipart/form-data">
        @csrf
        <div style="display:flex; flex-direction:column">
    <input type="file" name="title" placeholder="title" value="{{ old('title') }}">
    <input type="text" name="text" placeholder="text" value="{{ old('text') }}">
    <input type="text" name="icon" placeholder="Icon" value="{{ old('icon') }}">
    <br>
    <button class="btn btn-success" type="submit">Validate</button>
        </div>
    </form>
</div>

@endsection