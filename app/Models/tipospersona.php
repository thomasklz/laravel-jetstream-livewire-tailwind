<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipospersona extends Model
{
    use HasFactory;
    protected $table='tipospersonas';
    public $timestamps=false;
    public $fillable=['tipo'];
}
