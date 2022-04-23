<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $table="stock";
    protected $primaryKey =["producto","tienda"];
    public $incrementing=false; //por defecto true
    protected $keyType="string";// por defecto int
    public $timestamps = false;//Por defecto true


}
