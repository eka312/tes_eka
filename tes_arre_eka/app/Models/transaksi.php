<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_transaksi';
    protected $table = 'transaksis';
    protected $guarded = [];
    public $timestamps = false;

    public function laptop()
    {
        return $this->belongsTo(laptop::class, 'id_laptop', 'id_laptop');
    }

    public function pembeli()
    {
        return $this->belongsTo(pembeli::class, 'id_pembeli', 'id_pembeli');
    }

    public function user()
    {
        return $this->belongsTo(user::class, 'id_user', 'id_user');
    }
    
}
