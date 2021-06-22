<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PaletteColorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'type'=>'PaletteColorsID',
            'attributes'=> [
                'palette_id'=> (string)$this->palette_id,
                'color_id' => (string)$this->color_id
            ]
        ];
    }
}
