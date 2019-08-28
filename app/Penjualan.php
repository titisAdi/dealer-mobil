<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penjualan extends Model
{
    use SoftDeletes;
    protected $table = 'penjualan';

    protected $primaryKey = 'id';
    protected $fillable = [
    	'nm_pembeli',
    	'email_pembeli',
    	'nomor_telepon',
    	'mobil_dibeli'
    ];
    protected $dates = [ 
        'created_at',
        'updated_at'
    ];
}
