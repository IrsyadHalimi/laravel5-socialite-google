<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class AuthGoogleController extends Controller
{
  // Redirect to google for atuhentication
  public function redirectToGoogle()
  {
    return Socialite::driver('google')->redirect();
  }  

  public function handleGoogleCallback()
  {
    try {
      // Ambil data pengguna
      $user = Socialite::driver('google')->stateless()->user();

      // Tampilkan view 'hello' jika berhasil login
      return view('hello', ['user' => $user]);
    } catch (\Exception $e) {
      // Tampilkan view 'error' jika terjadi kesalahan
      return view('error', ['message' => $e->getMessage()]);
    }
  }
}
