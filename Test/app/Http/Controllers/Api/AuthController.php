<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class AuthController extends Controller
{
    protected $redirectTo = RouteServiceProvider::HOME;
    public function actionRegister(Request $request){
        $this->validate($request, [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);
        $name = $request['firstname'].' '.$request['lastname'];
        $user = User::create([
            'name' => $name,
            'email' =>$request->email,
            'password' => Hash::make($request->password),
            'api_token' => Str::random(80),
        ]);

        return (new UserResource($user))->additional([
            'meta' => [
                'token' => $user->api_token,
            ],
        ]);
    }
    public function actionLogin(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            // return redirect()->intended('dashboard');
            $currentUser = auth()->user();

            return (new UserResource($currentUser))->additional([
                'meta' => [
                    'token' =>$currentUser->api_token,
                ]
            ]);
        }
        return response()->json([
            'error' => 'Your Credential Not Match',
        ],401);

    }

}
