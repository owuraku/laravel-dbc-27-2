@extends('layout.main')

@section('content')
<h2>ADD NEW FOOD</h2>
<form action="{{route('addFoodAction')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name">Name</label>
        <input name="name" class="form-control" type="text" placeholder="Enter food name">
    </div>

     <div class="mb-3">
        <label for="price">Price</label>
        <input name="price" class="form-control" type="number" placeholder="Enter food price">
    </div>

     <div class="mb-3">
        <label for="size">Size</label>
        <input name="size" class="form-control" type="text">
    </div>

     <div class="mb-3">
        <label for="size">Restuarant</label>
        <input name="restuarant" class="form-control" type="text" placeholder="Enter restuarant name">
    </div>

    <div class="mb-3">
       <input type="submit" class="btn btn-lg btn-primary" value="Save">
    </div>
</form>

@endsection
