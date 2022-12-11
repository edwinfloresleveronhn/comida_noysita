<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventario extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tbl_inventario';
    protected $primaryKey = 'COD_PRODUCTO';
}