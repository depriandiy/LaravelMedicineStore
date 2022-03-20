<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function medicines() 
    {
        return $this->hasMany('App\Medicine', 'category_id', 'id');
        // category_id adalah nama foreign key dari medicine
        // id adalah primary key dari category 
    }
}
