<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
class FoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::all();
        // dd($foods);
        return view('foods.index',[
            'foods' => $foods,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //insert data
        return view('foods.create');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $food = new Food;
        // $food->name = $request->input('name');
        // $food->description = $request->input('description');
        // $food->count = $request->input('count');
        $food = Food::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'count' => $request->input('count'),
        ]);

        $food->save();
        return redirect('/foods');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $food = Food::find($id)->first();
        // dd($food);
        return view('foods.edit')->with('food',$food);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $food = Food::where('id',$id)->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'count' => $request->input('count'),
        ]);

        return redirect('/foods');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $food = Food::find($id);
        $food->delete();
        return redirect('/foods');  
    }
}
