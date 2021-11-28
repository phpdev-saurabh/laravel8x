<?php

namespace App\Http\Controllers\Socialite;
use Laravel\Socialite\Facades\Socialite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SocialiteController extends Controller
{
    public function index()
    {
        return view('Socialite.index');
    }
    public function github_redirect()
    {
        return Socialite::driver('github')->redirect();
    }
    public function github_callback(Request $request)
    {
        $user = Socialite::driver('github')->user();
        dd($user,'You can login / signup this user as your per need.');
    }
}
