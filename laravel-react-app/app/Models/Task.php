<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    /**
     * The project that belong to the role.
     */
    public function projects()
    {
        return $this->belongsTo(Project::class);
    }
}

