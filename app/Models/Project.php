<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;
class Project extends Model
{
    use HasFactory;
    protected $fillable = ['id_siswa','nama_prjt', 'desc_prjt',  'foto_prjt', 'tgl',];
    protected $table = 'project';
    
    public function siswa(){
        return $this->belongsTo(Siswa::class, 'id');
    }
}
