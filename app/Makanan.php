<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    //
    protected $table='makanan';
    protected $primaryKey='id_makanan';
    protected $fillable=['nama_makanan','jenis','harga'];
    
}

