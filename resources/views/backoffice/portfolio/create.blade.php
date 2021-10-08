@extends('template.mainB')

@section('content')
    
<br>
<h1 style="text-align: center">Portfolio</h1>
<br>

<div style="display: flex; justify-content: center;">
    <form action="{{route("portfolio.store")}}" method="post" enctype="multipart/form-data">
        @csrf
        <div style="display:flex; flex-direction:column">
    <input type="file" name="url" placeholder="url" value="{{ old('url') }}">
    <input type="text" name="title" placeholder="title" value="{{ old('title') }}">
    <select name="description">
        <option value="web">Web</option>
        <option value="card">Card</option>
        <option value="app">App</option>
    </select><br>
    <button class="btn btn-success" type="submit">Validate</button>
        </div>
    </form>
</div>

@endsection