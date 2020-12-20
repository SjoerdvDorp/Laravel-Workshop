<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function price()
    {
        return $this->hasMany(Price::class);
    }

    public function latest_price()
    {
        return $this->hasOne('App\Price')->orderBy('effdate', 'desc');
    }
}
