<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Food;

class FoodController extends Controller
{
    //
    public function getAllFoods(){
        $allFoods = Food::all();
        return view('food.viewFoods')
        ->with('foods', $allFoods);
    }

    public function getAddFoodForm(){
        return view('food.addFoods');
    }

    public function addFood(Request $request){

        $data =  $request->input();

        Food::create($data);
        return redirect('/foods');

        // create a new object of Food model class
        $newFood = new Food();

        // dd($newFood);
        //set attributes of object
        $newFood->name = $data['name'];
        $newFood->price = $data['price'];
        $newFood->size = $data['size'];
        $newFood->restuarant = $data['restuarant'];
        //save object
        $newFood->save();

        return redirect('/foods');

    }
}
