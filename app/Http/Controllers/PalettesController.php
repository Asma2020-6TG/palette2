<?php

namespace App\Http\Controllers;

use App\Http\Resources\PalettesResource;
use App\Models\Palette;
use Illuminate\Http\Request;

class PalettesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return PalettesResource::collection(Palette::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'category_id'=> 'required',
            'size'=>'required',
            'color_id' => 'required',
            'favourite' => 'nullable',
        ]);
        $palette= Palette::create($data);
        return response($palette,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Palette  $palette
     * @return \Illuminate\Http\Response
     */
    public function show(Palette $favourite)
    {
        //return new PalettesResource($palette);
     $palettes = Palette::where('favourite',1)->get();
return response($palettes,200);
}
/**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Palette  $palette
     * @return \Illuminate\Http\Response
     */
    public function edit(Palette $palette)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Palette  $palette
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Palette $palette)
    {
        $palette->update([
            'size'=> $request->input('size')
        ]);
        return new PalettesResource($palette);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Palette  $palette
     * @return \Illuminate\Http\Response
     */
   public function getPaletteColors($id){
        $palette = Palette::find($id);
         return $palette -> colors;
   }

    public function destroy(Palette $palette)
    {
        //$palette = Palette::find($palette);
       // if(!$palette)
        //    return 'Palette does not exist';
        //$palette -> colors() -> delete();
        $palette -> delete();
        return 'palette deleted';
    }
}
