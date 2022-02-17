<?php

namespace App\Http\Controllers;

use App\Wallpaper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index(){
        if (Auth::check()) {
            $wallpaper = Wallpaper::latest()->get();

            return view('index',compact('wallpaper'));
        }
        return redirect()->back();
    }
    public function detail($id){
        if (Auth::check()) {
            $wallpaper = Wallpaper::where('id',$id)->get();

            return view('detail',compact('wallpaper'));
        }
        return redirect()->back();
    }
    public function mypost(){
        if (Auth::check()) {
            $wallpaper = Wallpaper::where('user_id',Auth::user()->id)->get();

            return view('posts',compact('wallpaper'));
        }
        return redirect()->back();
    }
    public function addpost(){
        return view('form');
    }
    public function update($id){
        if (Auth::check()) {
            $wallpaper = Wallpaper::where('id',$id)->get();

            return view('form',compact('wallpaper'));
        }
        return redirect()->back();
    }
}
