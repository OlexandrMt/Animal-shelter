<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $fillable = ['name','breed','age','type','photo','sex','status','shelter_id','description'];

    public function shelter()
    {
        return $this->belongsTo(Shelter::class);
    }

}
