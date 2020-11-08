<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Validation\Validator;
use Symfony\Component\Console\Input\Input;

class LoginController extends Controller
{
	public function postlogin(Request $request)
	{
		$validation = $request->validate([
			'email' => 'required',
			'password' => 'required'
		], [
			'email.required' => 'Massukan email anda.',
			'password.required' => 'Massukan password anda.'
		]);

		if (Auth::attempt($request->only('email', 'password'))) {
			return redirect('/')->with('toast_success', 'Anda berhasil login sebagai admin.');
		}
		return redirect('login')->with('warning', 'Email/Password Salah');
	}
	public function logout(Request $request)
	{
		Auth::logout();
		return redirect('login');
	}
}
