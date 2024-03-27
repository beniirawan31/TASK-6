<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Siswa extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        "nis",
        "kode_id",
        "name",
        "alamat",
        "jk"
    ];
   
    public function classroom()
    {
        return $this->belongsTo(ClassRoom::class, 'kode_id', 'id');
    }
}
