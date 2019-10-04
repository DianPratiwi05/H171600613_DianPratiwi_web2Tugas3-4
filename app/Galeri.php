<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table='galeri';

    	protected $fillable=[
    		'nama','isi','users_id','kategori_galeri_id'
    	];

    	protected $casts=[ ];
}
