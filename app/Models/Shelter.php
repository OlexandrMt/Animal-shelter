<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Builder;

>>>>>>> dev

class Shelter extends Model
{
    use HasFactory;
<<<<<<< HEAD
=======

    public function scopeAdmin($query)
    {
        return $query->where('user_id', '=', 1);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
>>>>>>> dev
}
