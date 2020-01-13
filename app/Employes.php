<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employes extends Model
{
    protected $fillable = [
        'name', 'phone', 'countrie_id'
    ];

    function Countries(){
        
        return $this->hasOne('App\Countrie', 'id', 'countrie_id');
    }

}
