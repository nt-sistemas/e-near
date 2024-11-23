<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'website',
        'social_media',
        'whatsapp',
        'logo',
        'address',
        'city',
        'state',
        'zip',
        'country',
        'description',
        'is_active',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
