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
                'color_id'=> $this->color_id,
                'palette_id'=> $this->palette_id
            ]
        ];
    }
}
