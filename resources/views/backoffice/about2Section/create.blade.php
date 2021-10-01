@extends('template.mainB')

@section('content')
    
<br>
<h1 style="text-align: center">Customers</h1>
<br>

<div style="display: flex; justify-content: center;">
    <form action="{{route("about2.store")}}" method="post" enctype="multipart/form-data">
        @csrf
        <div style="display:flex; flex-direction:column">
            <input type="text" name="icone" placeholder="Icon" value="{{ old('icone') }}">
    <input type="text" name="title" placeholder="title" value="{{ old('title') }}">
    <input type="text" name="description" placeholder="description" value="{{ old('description') }}">
    <br>
    <button class="btn btn-success" type="submit">Validate</button>
        </div>
    </form>
</div>

@endsection