<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessPartner extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'business',
        'description',
        'user_id',
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}