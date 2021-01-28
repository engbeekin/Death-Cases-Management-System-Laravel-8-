<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Death extends Model
{
    use HasFactory;
    protected $table = 'death';
    public $timestamps = true;
    protected $fillable = array('name', 'gender', 'dateofdeath',
    'dis_id', 'reason', 'hospital_id', 'city_id');

    public function hospital()
    {
        return $this->belongsTo(Hospitals::class, 'hospital_id','id');
    }

    public function citys()
    {
        return $this->belongsTo(City::class, 'city_id','id');
    }

    public function disease()
    {
        return $this->belongsTo(Disease::class, 'dis_id','id');
    }
}
