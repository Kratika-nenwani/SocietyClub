<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    public $timestamps = false; 
    public function society()
{
    return $this->belongsTo(Society::class, 'society_id');
}
    
    protected $table = 'gallery';
}