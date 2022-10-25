<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;
use App\Models\Jns_Siswa;
class Kontak extends Model
{
    use HasFactory;
    protected $fillable = ['id_siswa','id_jns', 'desc_kntk'];
    protected $table = 'kontak';
    
    public function siswa(){
        return $this->belongsTo(Siswa::class, 'id_siswa', 'id');
    }
    
    public function jenis(){
        return $this->belongsTo(Jns_Siswa::class, 'id_jns');
    }
}
