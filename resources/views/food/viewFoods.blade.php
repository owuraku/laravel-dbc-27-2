@extends('layout.main')

@section('content')
 <style>
        .food-item {
            border: 2px solid red;
            margin: 5px;
            border-radius: 8px;
            padding: 6px;
            min-width: 150px;
        }
    </style>

@if ($alertMessage)
<div class="alert alert-success" role="alert">
   {{$alertMessage}}
</div>
<br>
@endif


<div style="display: flex; flex-direction:row; flex-wrap: wrap">
    @foreach ($foods as $food)
        <div class="food-item">
            <div>{{$food->name}}</div>
            <div>{{$food->size}}</div>
            <div>{{$food->restuarant}}</div>
            <div>{{$food->price}}</div>
            <div class="flex">

                <form method="POST" action="{{route('deleteFood',["id" =>$food->id])}}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a class="btn btn-success" href="{{route('editFood',["food" =>$food->id])}}">Edit</a>
            </div>
        </div>
    @endforeach
</div>
@endsection
