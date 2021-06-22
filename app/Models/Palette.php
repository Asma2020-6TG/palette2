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
        'size',
        'favourite'
    ];

    public $timestamps = false;

    public function colors()
    {
        return $this->belongsToMany(
            Color::class,
            'palette__colors',
            'palette_id',
            'color_id');
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
