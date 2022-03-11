<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jelentkezes extends Model
{
    use HasFactory;
     
    protected $table = 'jelentkezes';

    protected $primaryKey = ['esemenyId', 'userId'];
    
    protected $fillable = 'megjelent';

    public $timestamps = false;
}
