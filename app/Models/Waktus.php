<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waktus extends Model
{
    use HasFactory;
    protected $table = 'dim_waktu';
    protected $guarded = [];
}
