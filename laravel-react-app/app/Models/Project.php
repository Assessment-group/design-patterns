<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Task;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'company_name'];


    /**
     * The users that belong to the role.
     */
    public function Tasks()
    {
        return $this->belongsToMany(Task::class);
    }
}
