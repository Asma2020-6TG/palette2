<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Palette;
use App\Models\Color;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'color_id',
        'palette_id'
    ];

    public $timestamps = false;

    public static function create(array $data)
    {
    }

    public function palettes()
    {
        return $this->hasMany(Palette::class);
    }


    public function colors()
    {
        return $this->hasMany(Color::class);
    }
}
