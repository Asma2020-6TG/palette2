<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'hexcolor',
        'rgbcolor',
        'status',
        'category_id',
        'palette_id'

    ];
    protected $hidden = [
        'created_at',
        'updated_at',
        'pivot',


    ];

    public $timestamps = false;

    public function palettes()
    {
       return $this->belongsToMany(
           Palette::class,
           'palette_colors',
           'color_id',
           'palette_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


}

