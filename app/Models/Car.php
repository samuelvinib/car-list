<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $keyType = 'string'; // Defina o tipo da chave primária
    public $incrementing = false; // Indique que a chave primária não é autoincrementável
    protected $fillable = [
        'id', // Adicione 'id' ao preenchimento se estiver configurando UUID manualmente
        'name',
        'fipe_code',
        'price',
    ];
}
