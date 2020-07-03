<?php namespace App\Controllers;

use App\Models\UsersModel;

class Auth extends BaseController
{
	public function index()
	{
		$users = new UsersModel();

		return view('profile', [
			'user' => $users->find(1)
		]);
    }

    public function registrationForm()
    {
        return view('auth/register');
    }

    public function registerUser()
    {

        if (!$this->validate('registerRules')) {
            return view('auth/register', [
                'errors' => $this->validator->getErrors()
            ]);
        }

        return null;
    }
}
