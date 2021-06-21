<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PalettesResource extends JsonResource
{


    public function toArray($request)
    {
        return [
            'id' =>(string)$this->id,
            'type'=>'Palettes',
            'attributes'=> [
                'category_id'=>(string)$this->category_id,
                'size'=>(string)$this->size,
                'favourite'=> (string)$this->favourite
            ]
        ];
    }
}
