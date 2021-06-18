<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Palette extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'category_id',
        'color_id',
        'size',
        'favourite'
    ];

    public $timestamps = false;

    public function colors()
    {
        return $this->hasManyThrough(
            Color::class,
            Category::class,
            'palette_id',
            'category_id'
        );
    }
}
