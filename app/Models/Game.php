<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Game extends Model
{
    protected $fillable = [
        'name',
        'category_id'
    ];
    use HasFactory;

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
