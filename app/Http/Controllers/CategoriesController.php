<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoriesResource;
use App\Models\Category;
use App\Models\Color;
use App\Models\Palette;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Nullable;

class CategoriesController extends Controller
{


    public function index()
    {
        return CategoriesResource::collection(Category::all());
    }



    public function create()
    {
        //
    }


    public function store(Request $request)
    {
       // $categories = DB::table('categories')
         //   insert([
           //     'name' => 'warm tones'
          //  ]);

        $data = $request->validate([
            'name'=> 'required',
            'color_id'=>'Nullable',
            'palette_id'=>'Nullable'
        ]);
        $category= Category::create($data);
       // return response($category,200);
        return new CategoriesResource($category);

    }



    public function show($category_id)
    {

        $category = Category::find($category_id);
        $palettes = $category -> palettes;
        $palettes = Palette::where('category_id',$category_id)->get();
        return response($palettes,200);


    }



}
