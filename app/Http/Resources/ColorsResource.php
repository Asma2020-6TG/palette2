<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ColorsResource extends JsonResource
{


    /**
     * @var mixed
     */
    private $status;

    public function toArray($request)
    {
        return [
            'id' => (string)$this->id,
            'type'=>'Colors',
            'attributes'=> [
                'hexcolor'=> $this->hexcolor,
                'rgbcolor'=> $this->rgbcolor,
                'status'=>(string)$this->status,
                'category_id'=> (string)$this->category_id,
                'palette_id'=> (string)$this->palette_id
            ]
        ];
    }
}
