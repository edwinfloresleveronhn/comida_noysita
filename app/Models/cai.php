<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cai extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tbl_cai';
    protected $primaryKey = 'COD_CAI';
}
