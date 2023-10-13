<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function list(){

        // Get user list form DB
        $users = User::all();
        return view('UserView', compact('users'));
    }
}
