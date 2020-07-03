<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function index(User $user)
    {
    	$follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;
    	return view('profiles.index', compact('user', 'follows'));
    }
}
