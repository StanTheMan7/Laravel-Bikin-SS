@extends('template.mainB')

@section('content')<br><br>
<div style="display: flex; justify-content:center;">
    <h1>Testimonials</h1>
</div>
<div style="display: flex; justify-content:center;">
    <a class="btn btn-info" href="{{route("testimonials.create")}}">Create</a>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Text</th>
        <th scope="col">Job</th>
        <th scope="col">Photo</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($testimonials as $item)
    <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->text}}</td>
        <td>{{$item->job}}</td>
        <td>@if (Storage::disk('public')->exists('img/' . $item->photo))
          <img class="w-40" src="{{ asset('img/' . $item->photo) }}" alt="">
          @else
            <img class="w-40" src="{{ $item->photo }}" alt="">
          @endif</td>
        
        <td>
            <a href="{{route("testimonials.show", $item->id)}}" class="btn btn-warning">Show</a>
            <a href ="{{route("testimonials.edit", $item->id)}}" class="btn btn-success">Edit</a>
            @can('tes-del', $item)
            <form action="{{route("testimonials.destroy", $item->id)}}" method="POST">
                @csrf   
                @method('delete')
            <button type="submit" class="btn btn-danger mt-1">Delete</button>
            </form>
            @endcan
        </td>
      </tr>    
    @endforeach
    </tbody>
  </table>

@endsection