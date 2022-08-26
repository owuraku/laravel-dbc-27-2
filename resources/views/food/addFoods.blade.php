@extends('layout.main')

@section('content')
<style>
    .error {
        color: red;
        font-size: 10px
    }

    .error-input {
        border: 2px solid red;
    }
</style>
@if ($edit)
<h2>EDIT FOOD</h2>
@else
<h2>ADD NEW FOOD</h2>
@endif
<form action="{{ $edit ? route('editFoodAction') : route('addFoodAction') }}" method="POST">
    @csrf
    @if ($edit)
        @method('PUT')
        <input type="hidden" name="id" value="{{$food->id}}">
    @endif

    <div class="mb-3" >
        <label for="name">Name</label>
        <input name="name" class="form-control @error('name') is-invalid @enderror" type="text"
        placeholder="Enter food name" value="{{old('name') ? old('name'): $food->name  }}" required>
        @error('name')
            <span class="error">{{$message}}</span>
        @enderror
    </div>

     <div class="mb-3">
        <label for="price">Price</label>
        <input name="price" class="form-control" type="number" placeholder="Enter food price" value="{{old('price') ? old('price'): $food->price  }}">
         @error('price')
            <span class="error">{{$message}}</span>
        @enderror
    </div>

     <div class="mb-3">
        <label for="size">Size</label>
        <input name="size" class="form-control" type="text" value="{{old('size') ? old('size'): $food->size  }}">
         @error('size')
            <span class="error">{{$message}}</span>
        @enderror
    </div>

     <div class="mb-3">
        <label for="size">Restuarant</label>
        <input name="restuarant" class="form-control" type="text" placeholder="Enter restuarant name" value="{{old('restaurant') ? old('restaurant'): $food->restaurant  }}" >
         @error('restaurant')
            <span class="error">{{$message}}</span>
        @enderror
    </div>

    <div class="mb-3">
       <input type="submit" class="btn btn-lg btn-primary" value="{{ $edit? 'Edit': 'Save'}}">
    </div>
</form>

@endsection
