<?php

class EmailController extends BaseController {

    public function send()
    {

        Mail::send('mails.welcome', array('firstname' => 'Nicolas'), function($message){
            $message->to('nicolasvelah@gmail.com', 'Nicolas'.' '.'hola');
        });


    }
}