<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembeli extends Model
{
    use HasFactory;
    protected $primary_key = 'id_pembeli';
    protected $table = 'pembelis';
    protected $guarded = [];
    public $timestamps = false;
}
