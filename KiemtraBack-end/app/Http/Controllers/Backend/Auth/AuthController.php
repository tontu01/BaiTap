<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Backend\Base\BackendController;
use App\Model\Entities\Admin;
use Illuminate\Support\Facades\Hash;

class AuthController extends BackendController
{
    public function showFormLogin()
    {
        if (backendIsLogin()) {
            return redirect()->route(backendRouterName('dashboard'));
        }

        return view('backend.auth.login');
    }

    public function postLogin()
    {
        $email = request('email');
        $password = request('password');
        $admin = Admin::where('email', $email)->first();
        $checkLogin = false;

        if (!empty($admin)) {
            $checkLogin = Hash::check($password, $admin->password);
        }

        if ($checkLogin) {
            backendGuard()->login($admin);
            return redirect()->route(backendRouterName('dashboard'));
        }

        return redirect()->back()->withErrors('Tài khoản không tồn tại')->withInput(request()->all());
    }

    public function logout()
    {
        backendGuard()->logout();
        return redirect()->route(backendRouterName('login'));
    }
}