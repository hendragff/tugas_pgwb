<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kontak;
class Siswa extends Model
{
    use HasFactory;
    protected $fillable = ['nisn','nama', 'jk', 'alamat', 'email', 'foto', 'about'];
    protected $table = 'siswa';
    
    public function kontak(){
        return $this->hasMany(Kontak::class,'id_siswa', 'id');
    }

    public function project(){
        return $this->hasMany('App\Models\Project', 'id_siswa');
    }
}
