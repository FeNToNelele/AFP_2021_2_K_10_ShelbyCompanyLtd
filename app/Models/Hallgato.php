<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hallgato extends Model
{
    
    use HasFactory;

    protected $table = 'hallgato';

    protected $primaryKey = 'hallgatoId';
    
    protected $fillable = ['neptunKod'];

    public $timestamps = false;


}
