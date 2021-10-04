@extends('template.mainB')

@section('content')
    
<br>
<h1 style="text-align: center">Teams</h1>
<br>

<div style="display: flex; justify-content: center;">
    <form action="{{route("team.store")}}" method="post" enctype="multipart/form-data">
        @csrf
        <div style="display:flex; flex-direction:column">
    <input type="file" name="url" placeholder="url" value="{{ old('url') }}">
    <input type="text" name="name" placeholder="name" value="{{ old('name') }}">
    <input type="text" name="job" placeholder="job" value="{{ old('job') }}">
    <br>
    <button class="btn btn-success" type="submit">Validate</button>
        </div>
    </form>
</div>

@endsection