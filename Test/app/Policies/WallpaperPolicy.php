<?php

namespace App\Policies;

use App\User;
use App\Wallpaper;
use Illuminate\Auth\Access\HandlesAuthorization;

class WallpaperPolicy
{
    use HandlesAuthorization;

    public function update(User $user,Wallpaper $wp){
        return $user->ownsWallpaper($wp);
    }

    public function delete(User $user,Wallpaper $wp){
        return $user->ownsWallpaper($wp);
    }
}
