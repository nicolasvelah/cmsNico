<?php

class EmailController extends BaseController {

    public function send()
    {
        $data = Input::all();
        //dd($data);
        Mail::send('mails.welcome', array('firstname' => 'Nicolas'), function($message){
            $message->to('nicolasvelah@gmail.com', 'Nicolas'.' '.'hola');
        });


    }
}