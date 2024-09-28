<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    public $timestamps = false;
    protected $fillable = ['name_ar', 'name_en', 'name_fr', 'code', 'country_id'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
