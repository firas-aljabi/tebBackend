<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
    public $timestamps = false;
    protected $fillable = ['name_ar', 'name_en', 'name_fr', 'code'];

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
