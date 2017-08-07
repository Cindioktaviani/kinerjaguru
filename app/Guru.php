<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    //
    protected $fillable = ['nip','status','jabatan','pendidikan','jk','alamat','ttl','mulai_kerja','mapel','no_tlp','masa_mengajar','kelas','tahun_ajaran','periode'];
    public function users()
    	{
    		return $this->belongsTo('App\user');

}
