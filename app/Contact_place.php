<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact_place extends Model
{
    //
    public function contact(){
      return $this->belongsTo('App\Contact');
    }
    
}
