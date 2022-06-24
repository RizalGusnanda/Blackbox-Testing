<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ukuran;

class Sepatu extends Model
{
    // protected $table = 'sepatu';
    protected $primaryKey = 'id_sepatu';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // 'id_sepatu',
        'brand',
        'harga',
        'warna',
        'ukuran',
        'gambar',
    ];
    // public function ukuran()
    // {
    //     return $this->belongsTo(Ukuran::class);
    // }
}
