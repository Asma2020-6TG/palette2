<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Palette_Color extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'palette_id',
        'color_id'

    ];

    public $timestamps = false;
}
