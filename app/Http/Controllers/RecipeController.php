<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use Image;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipe = Recipe::all();
        return view('recipes.index', compact('recipe'));
        
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
      $request->validate([
            'title'=>'required',
            'duration'=>'required',
            'description'=>'required',
            'ingredients'=>'required',
            'preparation'=>'required',
            'image'=>'required'
            
        ]);
       
        $recipe = new Recipe();
        $recipe->title=$request->get('title');
        $recipe->duration=$request->get('duration');
        $recipe->description=$request->get('description');
        $recipe->ingredients=$request->get('ingredients');
        $recipe->preparation=$request->get('preparation');

        if($request->hasFile('image')){
            $image=$request->file('image');
            $fileName='/img/recipe/'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(150,150)->save(public_path($fileName));
            $recipe->image=$fileName;
        }
        $recipe->save();
        return redirect('/recipes')->with('success','Recipe has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipe= Recipe::find($id);
        return view('recipes.show', compact('recipe'));
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
        $recipe = Recipe::find($id);

        return view('recipes.edit', compact('recipe'));
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
        // dd($request->file());
        $request->validate([
        'title'=>'required',
        'duration'=>'required',
        'description'=>'required',
        'ingredients'=>'required',
        'preparation'=>'required',
        'image'=> 'required'
        
      ]);

      $recipe = Recipe::find($id);
      $recipe->title = $request->get('title');
      $recipe->duration=$request->get('duration');
      $recipe->description=$request->get('description');
      $recipe->ingredients=$request->get('ingredients');
      $recipe->preparation=$request->get('preparation');
      //$healthy->image = $request->get('image');

      // if($request->hasFile('image')){
      //       $recipe_img=$request->file('image');
      //       $fileName='/img/recipe/'.time().'.'.$image->getClientOriginalExtension();
      //       Image::make($image)->resize(150,150)->save(public_path($fileName));
      //       $recipe->image=$fileName;
      //   }

        if($request->hasFile('image')){
            $image=$request->file('image');
            $fileName='/img/recipe/'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(150,150)->save(public_path($fileName));
            $recipe->image=$fileName;
            // dd($request->all());
        }
     
      $recipe->save();

      return redirect('/recipes')->with('success', 'Recipe has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recipe = Recipe::find($id);
        $recipe->delete();

        return redirect('/recipes')->with('success', 'Recipe has been deleted Successfully');
    }
}
