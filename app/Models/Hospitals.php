<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospitals extends Model
{
    use HasFactory;
    protected $table = 'Hospitals';
    public $timestamps = true;
    protected $fillable = array('Hospitalname', 'phone', 'address', 'email', 'manager', 'managerno', 'city_id');

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id','id');
    }

}
