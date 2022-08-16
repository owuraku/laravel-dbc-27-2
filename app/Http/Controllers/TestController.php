<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\Request;

class TestController extends BaseController {

    public function displayUsername()
    {
        return "Hello user, you are welcome";
    }

    public function showOrderFood($age){
        $foods = [
            [
                "name" => "Banku",
                "price" => "30",
                "size" => "large"
            ],
            [
                "name" => "Jollof",
                "price" => "40",
                "size" => "large"
            ],
            [
                "name" => "Fries",
                "price" => "40",
                "size" => "large"
            ]
            ];
        return view('order.orderfood')
        ->with('age', $age)
        ->with('foodsInDatabase',$foods);
    }

    public function vote(Request $request) {
        return "You are eligible to vote";
    }

    public function requestObject(Request $request){
        // $allData = $request->all();
        $value = $request->input('abc');
        return dump($value);
    }

}
