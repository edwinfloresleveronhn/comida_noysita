<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tbl_proveedor';
    protected $primaryKey = 'COD_PROVEEDOR';
}
