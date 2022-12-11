<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class platillo extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tbl_platillo';
    protected $primaryKey = 'COD_PLATILLO';
}
