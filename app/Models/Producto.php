<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nombre',
        'cantidad',
        'fechaDeCompra',
        'fechaDeCaducidad',
    ];

    public function despensa()
    {
        return $this->belongsTo('App\Models\Despensa');
    }
}
