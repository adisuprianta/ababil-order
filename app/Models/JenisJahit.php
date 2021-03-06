<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisJahit extends Model
{
    protected $table = 'jenis_jahit';

    protected $primaryKey = 'id_jahit';

    protected $fillable =[
        'nama_jahit',
        'deskripsi_jahit'
    ];


    public function customPrint(){
        return $this->hasMany('App\Models\CustomPrint','id_jahit');
    }

    public function detailPesan(){
        return $this->hasMany('App\Models\DetailPesanan','id_jahit');
    }

}
