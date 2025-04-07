<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class MainController extends Controller
{
    public function home()
    {
        $user = Auth::user();
        if ($user->role == 'admin') {
            return view('dashboard.admin', compact('user'));
        } elseif ($user->role == 'student') {
            return view('dashboard.student', compact('user'));
        }
    }
}
