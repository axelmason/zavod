<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminAuthRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function auth(AdminAuthRequest $request)
    {
        $data = $request->validated();

        $auth = auth()->attempt($data);

        if(!$auth) {
            return back()->withErrors(['authfailed' => 'Логин и пароль не подходят. Попробуйте ещё раз.']);
        }
        return back();
    }
    public function logout()
    {
        auth()->logout();
        return to_route('home');
    }
}
