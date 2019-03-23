<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    public function User() {
        $this->belongsTo(User::class);
    }
}
