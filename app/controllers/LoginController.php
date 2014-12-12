<?php


class LoginController extends BaseController {


    public function login()
    {
        return View::make('login.index');
    }

    public function postIndex()
    {
        $data = Input::all();
        $credentials = ['username' => $data['username'], 'password' => $data['password']];

        if (Auth::attempt($credentials))
        {
            if(is_admin()){
                return Redirect::intended('/admin');
            }else{
                return Redirect::intended('/');
            }

        }
        dd('no');
        return Redirect::back()
            ->withInput()
            ->withErrors('Username or Password are incorrect.');
    }
    public function logout()
    {
        Auth::logout();
        return Redirect::route('home');
    }

}