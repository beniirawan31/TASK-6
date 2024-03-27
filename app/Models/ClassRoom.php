<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassRoom extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "class";
    protected $dates = ['deleted_at'];
    
    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'kode_id', 'id');
    }
}
