<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilityPartner extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'facility',
        'description',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}