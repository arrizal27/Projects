<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallpaper extends Model
{
    protected $fillable = [
        'user_id', 'foto', 'desc','judul'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
