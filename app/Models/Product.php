<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function recommandations(){
        return $this->belongsToMany('App\Models\Product', 'produit_recommande','produit_id','produit_recommande_id');
    }
}
