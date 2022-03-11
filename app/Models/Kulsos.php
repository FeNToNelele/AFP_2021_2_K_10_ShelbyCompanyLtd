<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kulsos extends Model
{
    use HasFactory;
    protected $table = 'kulsos';

    protected $primaryKey = 'kulsosId';
    
    protected $fillable = 'telepules';

    public $timestamps = false;
}
