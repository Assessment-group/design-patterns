<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public function project()
    {
        return $this->hasOne(Project::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
