<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstController extends Controller
{




    public function first($name) {

        $dataArray = [

            [
                'name' => 'Viset',
                'age' => 30
            ],
            [
                'name' => 'Srey Lam',
                'age' => 18
            ],
            [
                'name' => 'Leakena',
                'age' => 19
            ],
            [
                'name' => 'Mealea',
                'age' => 20
            ],
            [
                'name' => 'Randy',
                'age' => 21
            ]
        ];


        //dd($dataArray);


        return view('pages.my_first_page', compact('name', 'dataArray'));


    }

    public function register(Request $request) {

        dump($request->url());
        dump($request->user_name);
    }
}
