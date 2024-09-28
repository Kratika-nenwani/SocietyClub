<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'bio', 'website', 'first_name', 'last_name', 'contact', 'about_me', 'language', 'country'
    ];

    // Relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}