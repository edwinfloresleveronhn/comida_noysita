<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bitacora extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tbl_bitacora';
    protected $primaryKey = 'COD_BITACORA';
}
