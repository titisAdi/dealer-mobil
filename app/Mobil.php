<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mobil extends Model
{
	use SoftDeletes;
    protected $table = 'mobil';

    protected $primaryKey = 'id';
    protected $fillable = [
    	'nm_mobil',
    	'harga_mobil',
    	'stock'
    ];
    protected $dates = [ 
        'created_at',
        'updated_at'
    ];
}
