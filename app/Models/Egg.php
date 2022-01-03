<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egg extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function eggType()
    {
        return $this->belongsTo(Eggtype::class,'type','id');
    }
}
