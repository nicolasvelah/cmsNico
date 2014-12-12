<?php


class LoginController extends BaseController {


    public function getIndex()
    {
        return View::make('login.index');
    }

    public function postIndex()
    {
        $data = Input::all();
        $credentials = ['username' => $data['username'], 'password' => $data['password']];
        //$username = Input::get('username');
        //$password = Input::get('password');

        //dd($credentials);

        if (Auth::attempt($credentials))
        {
            return Redirect::intended('/admin');
        }
        dd('no');
        return Redirect::back()
            ->withInput()
            ->withErrors('Username or Password are incorrect.');
    }

}