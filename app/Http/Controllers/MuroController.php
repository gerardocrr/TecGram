<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MuroController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {       
        return view('dashboard', ['user' => $user]);
    }

    public function create()
    {
        return view('publicacion.create');
    }
}
