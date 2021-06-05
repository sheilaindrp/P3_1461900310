<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisBuku extends Model
{
    use HasFactory;

    protected $table = 'jenis_buku';

    protected $fillable = ['jenis'];

    public $timestamps = false;

    public function rakBuku()
    {
        return $this->hasMany(RakBuku::class, 'id_jenis_buku');
    }
}
