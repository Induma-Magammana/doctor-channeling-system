<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // Define the fillable attributes (or use guarded if preferred)
    protected $fillable = ['name'];

    // Define the many-to-many relationship
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_roles');
    }
}
