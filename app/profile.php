<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    public function User() {
        $this->belongsTo(User::class);
    }
}
