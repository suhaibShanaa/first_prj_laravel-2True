<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    public function Customer(){
        return $this->belongsToMany(Customer::class,'customers_companies')->withTimestamps();
    }

    protected $fillable = ['name'];
}
