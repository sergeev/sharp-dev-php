<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
      return view('profile.index');
    }

    public function edit()
    {
      return view('profile.edit');
    }
}
