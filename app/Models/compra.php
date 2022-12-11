<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compra extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tbl_compra';
    protected $primaryKey = 'COD_COMPRA';
}
