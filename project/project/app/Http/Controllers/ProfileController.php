<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function profile($username) {
        return $user=User::whereUsername($username)->first();    
    }
}