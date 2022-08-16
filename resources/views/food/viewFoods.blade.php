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
<div style="display: flex; flex-direction:row; flex-wrap: wrap">
    @foreach ($foods as $food)
        <div class="food-item">
            <div>{{$food->name}}</div>
            <div>{{$food->size}}</div>
            <div>{{$food->restuarant}}</div>
            <div>{{$food->price}}</div>
        </div>
    @endforeach
</div>
@endsection
