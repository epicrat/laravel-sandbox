<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function profile($username) {
        $users=User::whereUsername($username)->first();
        return view('user.profile', compact('users'));
    }

    public function all() {
        $users=User::paginate(20);
        return view('user.profiles', compact('users'));
    }
}
