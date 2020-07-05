<?php namespace App\Controllers;

use App\Models\UsersModel;
use \CodeIgniter\Exceptions\PageNotFoundException;

class Auth extends BaseController
{
    public function registrationForm()
    {
        if(session('id')) return redirect()->route('dashboard');

        return view('auth/register');
    }

    public function registerUser()
    {
        if(previous_url() != base_url(route_to('registrationForm'))) {
            throw PageNotFoundException::forPageNotFound();
        }

        if (!$this->validate('registerRules')) {
            return redirect()->back()
                             ->withInput()
                             ->with('validation', $this->validator);
        }

        $model = new UsersModel();

        $model->save([
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
        ]);

        session()->setFlashdata('success', 'Successful Registration');
		return redirect()->route('loginForm');
    }

    public function loginForm()
    {
        if(session('id')) return redirect()->route('dashboard');

        return view('auth/login');
    }

    public function loginUser()
    {
        if(previous_url() != base_url(route_to('loginForm'))) {
            throw PageNotFoundException::forPageNotFound();
        }

        if (!$this->validate('loginRules')) {
            return redirect()->back()
                             ->withInput()
                             ->with('validation', $this->validator);
        }

        $model = new UsersModel();

        $user = $model->where('email', $this->request->getVar('email'))
                      ->first();

        session()->set([
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
        ]);

		return redirect()->route('dashboard');
    }

    public function logoutUser()
    {
        session()->destroy();

        return redirect()->route('loginForm');
    }
}
