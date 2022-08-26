<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Food;
use Illuminate\Support\Facades\Validator;

class FoodController extends Controller
{
    //
    public function getAllFoods(){
        $allFoods = Food::all();
        return view('food.viewFoods')
        ->with('foods', $allFoods);
    }

    public function getAddFoodForm(){
        return view('food.addFoods')
        ->with('food', new Food())
        ->with('edit', false);
    }

    public function getEditFoodForm(Food $food){
        return view('food.addFoods')
        ->with('food', $food)
        ->with('edit', true);
    }

    public function addFood(Request $request){

        $data =  $request->input();
        Validator::make($data,[
            'name' => 'required|max:20',
            'price' => 'required|numeric|min:10|max:1000',
            'size' => 'required|in:large,small,meduim',
            'restuarant' => 'required',
        ],[
            'name.max' => 'The text is too much'
        ])->validate();


        Food::create($data);
         $allFoods = Food::all();
        return view('food.viewFoods')
        ->with('foods', $allFoods)
        ->with('alertMessage', 'Food created successfully')
        ;

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

    public function deleteFood($id){
        $food = Food::findOrFail($id);
        $food->delete();

        return redirect('/foods');
    }

    public function updateFood(Request $request){
        $data = $request->input();
        $food = Food::findOrFail($data['id']);

        Validator::make($data,[
            'name' => 'required|max:20',
            'price' => 'required|numeric|min:10|max:1000',
            'size' => 'required|in:large,small,meduim',
            'restuarant' => 'required',
        ],[
            'name.max' => 'The text is too much'
        ])->validate();

        $food->update($data);

         $allFoods = Food::all();
        return view('food.viewFoods')
        ->with('foods', $allFoods)
        ->with('alertMessage', 'Food edited successfully')
        ;


    }
}
