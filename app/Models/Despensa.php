<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Despensa extends Model
{
    use HasFactory;

    protected $fillable = [
        
    ];

    public function producto()
    {
        return $this->hasMany('App\Models\Producto');
    }

    public function Nota()
    {
        return $this->hasMany('App\Models\Nota');
    }

    public function Usuario()
    {
        return $this->belongsToMany('App\Models\Usuario');
    }
}
