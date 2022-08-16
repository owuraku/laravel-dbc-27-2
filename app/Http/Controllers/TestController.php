<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;

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

}
