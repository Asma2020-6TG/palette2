<?php

namespace App\Http\Controllers;
use App\Http\Resources\ColorsResource;
use App\Http\Resources\PaletteColorResource;
use App\Models\Color;
use App\Models\Category;
use App\Models\Palette_Color;
use Illuminate\Http\Request;

class ColorsController extends Controller
{

    public function index()
    {
        return ColorsResource::collection(Color::all());
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $data = $request->validate([

            'hexcolor'=>'required',
            'rgbcolor'=>'Nullable',
            'status'=>'nullable',
            'palette_id' => 'required',
            'category_id'=> 'required'
        ]);
        $color= Color::create($data);
        return response($color,200);
    }


    public function show($category_id)
    {
        $category = Category::find($category_id);
        $colors = $category -> colors;
        $colors = Color::where('category_id',$category_id)->get();
        return response($colors,200);
    }


    public function edit(Color $color)
    {
        //
    }


    public function update(Request $request, Color $color)
    {
        $color->update([
            'status'=> $request->input('status')
        ]);
        return new ColorsResource($color);
    }


    public function destroy(Color $color)
    {

        $color -> delete();
        return 'color deleted';
    }

 //data for pivot table

    public function insert(Request $request)
    {
        $data = $request->validate([

            'palette_id' => 'required',
            'color_id'=> 'required'
        ]);
        $pivot= Palette_Color::create($data);
        return response($pivot,200);
    }


    public function getPaletteColor()
    {
        return PaletteColorResource::collection(Palette_Color::all());
    }
}
