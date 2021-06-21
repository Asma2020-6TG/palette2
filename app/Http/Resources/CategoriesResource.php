<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoriesResource extends JsonResource
{


    /**
     * @var mixed
     */
    private $palette_id;
    /**
     * @var mixed
     */
    private $color_id;
    /**
     * @var mixed
     */
    private $name;

    public function toArray($request)
    {
        return [
            'id' => (string)$this->id,
            'type'=>'Categories',
            'attributes'=> [
                'name'=> $this->name,
                'color_id'=>(string)$this->color_id,
                'palette_id'=> (string)$this->palette_id
            ]
        ];
    }
}
