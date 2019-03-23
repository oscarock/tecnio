<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function User() {
        $this->belongsTo(User::class);
    }
}
