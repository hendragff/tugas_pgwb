<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kontak;
class Jns_siswa extends Model
{
    use HasFactory;
    protected $fillable = ['jenis'];
    protected $table = 'jns_siswa';
    public function jenis_kontak(){
        return $this->hasMany(Kontak::class, 'id_jns');
    }
}
