<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getProfilePictureAttribute()
    {
        if (filter_var($this->profile_image, FILTER_VALIDATE_URL)) { 
            return $this->profile_image;
        }

        return url('storage/' . $this->profile_image);
    }
}
