<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Recpie extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'prep_time',
        'cook_time',
        'description',
        'instruction',
        'nutrient',
        'image',
        'slug'
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
