<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{   
    public function profileImage() //memberi image default saat registrasi
    {   
        $imagePath = ($this->image) ?  $this->image : 'profile/DYAraM3HIjwVPprsdYqctdRJyDZpwkCW4TT8UPK0.png';

        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = ['title', 'description', 'url', 'image'];
}
