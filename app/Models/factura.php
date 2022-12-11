<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class factura extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tbl_factura';
    protected $primaryKey = 'COD_FACTURA';
}
