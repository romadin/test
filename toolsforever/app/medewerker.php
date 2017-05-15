<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medewerker extends Model
{
    public function isAdmin()
    {
    	if($this->medewerker->where('role', 'admin')){
    		return true;
    	} else {
    		return false;
    	}

    }
}
