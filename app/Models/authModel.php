<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class authModel extends Model
{
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }


}