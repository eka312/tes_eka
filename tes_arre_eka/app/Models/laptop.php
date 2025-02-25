<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laptop extends Model
{
    use HasFactory;
    protected $primary_key = 'id_laptop';
    protected $table = 'laptops';
    protected $guarded = [];
    public $timestamps = false;
}
