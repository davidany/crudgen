<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;

class FoodController extends Controller
{

    public function index()
    {

    	// get all the Food
        $foods = Food::all();
        // load the view and pass the foods
    	 return view('food.index', compact('foods'));

    }

    public function create()
    {
        // load the create form (app/views/food/create.blade.php)
        return view('food.create');
    }

    public function store(Request $request)
    {
        Food::create($request->all());
	    return redirect()->route('food.index');
    }


    public function show($id)
    {
         $foods = Food::findOrFail($id);
    	 return view('food.show', compact('foods'));

    }

    public function update(Request $request, $id)
    {
        $foods = Food::findOrFail($id);
        $foods->fill($request->all());
        $foods->save();
        return view('food.index');

    }

    public function destroy($id)
    {
        Food::destroy($id);
		return view('food.index');
    }
}
