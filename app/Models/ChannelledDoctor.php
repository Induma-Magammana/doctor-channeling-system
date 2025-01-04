<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChannelledDoctor extends Model
{
    use HasFactory;

    // Add the fields that can be mass-assigned
    protected $fillable = ['user_id', 'doctor_id'];
    
    // Define relationship to Doctor model
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
