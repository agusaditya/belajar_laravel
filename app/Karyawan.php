<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    //
    protected $table='karyawan';
    protected $primaryKey='id_karyawan';
    protected $fillable=['nama_karyawan','alamat','jenis'];
    
}

