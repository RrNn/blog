<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\User;

class SessionsController extends Controller
{
    public function create()
    {

     return view('sessions.create');

    }

    public function destroy()
    {

      auth()->logout();

      return redirect()->home();
      
    }

    public function store(Request $request)
    {

      $credentials = $request->only('email', 'password');

      if (Auth::attempt($credentials)) {
            
            return redirect()->home();
        }

        return redirect('/login');

    }
}




