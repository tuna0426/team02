<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camp extends Model
{
    use HasFactory;
    public function characters()
    {
        return $this->hasMany('App\Models\Character','cid');
    }
    public function delete()
    {
        $this->characters()->delete();
        return parent::delete();
    }
}
