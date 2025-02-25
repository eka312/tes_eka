<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suplayer extends Model
{
    use HasFactory;
    protected $primary_key = 'id_suplayer';
    protected $table = 'suplayers';
    protected $guarded = [];
    public $timestamps = false;
}
