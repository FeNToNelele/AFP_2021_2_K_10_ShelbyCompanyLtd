<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dolgozo extends Model
{
    use HasFactory;

    protected $table = 'dolgozo';

    protected $primaryKey = 'dologoId';
    
    protected $fillable = ['szervezetiEgyseg'];

    public $timestamps = false;
}
