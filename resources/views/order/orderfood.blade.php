<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        .food-item {
            border: 2px solid red;
            margin: 5px;
            border-radius: 8px;
            padding: 6px;
            min-width: 150px;
        }
    </style>
</head>
<body>


    <button style="background-color: blue">Click me</button>
    <div style="display:flex">
    @foreach ($foodsInDatabase as $food)
        <div class="food-item">
            <p> Food Name: {{$food['name']}} </p>
            <p> Food Price: {{$food['price']}} </p>
            <p> Food Size: {{$food['size']}} </p>
        </div>
    @endforeach
</div>
</body>
</html>
