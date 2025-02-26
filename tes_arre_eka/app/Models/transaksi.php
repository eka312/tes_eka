<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $primary_key = 'id_transaksi';
    protected $table = 'transaksis';
    protected $guarded = [];
    public $timestamps = false;

    
}
