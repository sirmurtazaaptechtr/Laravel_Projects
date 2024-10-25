<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    // Define a relationship indicating that a Gender has many Users
    public function user() {
        return $this->hasMany(User::class);
    }
}
