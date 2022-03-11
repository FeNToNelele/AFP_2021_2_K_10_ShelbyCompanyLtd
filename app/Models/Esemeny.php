<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Esemeny extends Model
{
    use HasFactory;
    
    protected $table = 'esemeny';

    protected $primaryKey = 'id';
    
    protected $fillable = ['megnevezes','kapactias','leiras','kezdet','vege','helyszin','dolgozoId'];

    public $timestamps = false;
}
