<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';

    protected $fillable = ['judul', 'tahun_terbit'];

    public $timestamps = false;

    public function rakBuku()
    {
        return $this->hasMany(RakBuku::class, 'id_buku');
    }
}
