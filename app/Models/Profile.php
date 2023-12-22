<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        return ($this->image) ? '/storage'. $this->image : 'profile/JNiNHZYPax0bk1mZWBDuZbvKfghk7OsZRJjsTrXO.png';
    }
    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    // use HasFactory;
    public function user()
    {
         return $this->belongsTo(User::class);
    }
}
