<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laptop extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_laptop';
    protected $table = 'laptops';
    protected $guarded = [];
    public $timestamps = false;

    public function laptop()
    {
        return $this->belongsTo(laptop::class, 'id_laptop', 'id_laptop');
    }

    public function suplayer()
    {
        return $this->belongsTo(suplayer::class, 'id_suplayer', 'id_suplayer');
    }
}
