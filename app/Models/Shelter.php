<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class Shelter extends Model
{
    use HasFactory;

    // public function scopeAdmin($query)
    // {
    //     return $query->where('user_id', '=', 1);
    // }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function animal()
    {
        return $this->hasMany(Animal::class);
    }
}
