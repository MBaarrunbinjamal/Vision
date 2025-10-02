<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class googlecontroller extends Controller
{
    public function googlepage()
    {
        return socialite::driver('google')->redirect();
    }
    public function googlecallback()
    {
        try{
            $user =  Socialite::driver('google')->user();
            $finduser = User::where('email', $user->email)->first();
            if($finduser)
            {
                Auth::login($finduser);
                return redirect()->intended('dashboard');
            }
            else{
                $newuser = User::create([
                    'name'=>$user->name,
                    'email'=>$user->email,
                    'google_id'=>$user->id,
                    'password'=>encrypt('123456dummy')

                ]);
                Auth::login($newuser);
                return redirect()->intended('dashboard');

            }
        }
        catch(Exception $e)
        {
            dd($e->getMessage());
        }
    }
}
