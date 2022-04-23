<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    use HasFactory;
    protected $table="familia";
    protected $primaryKey ="cod";
    public $incrementing=false; //por defecto true
    protected $keyType="string";// por defecto int
    public $timestamps = false;//Por defecto true


}
