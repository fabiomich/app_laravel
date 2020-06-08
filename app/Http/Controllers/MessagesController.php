<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store(Request $request){
    	//return $request->name;
    	$message = request()->validate([
    		'name' => 'required',
    		'email' => ['required', 'email'],
    		'subject' => 'required',
    		'content' => ['required', 'min:3']
    	],
    		[
    			'name.required' => __('Necesito tu nombre'),
    			'content.min' => __('Necesito minimo 3 caracteres'),
    		]);

    	//Mail::to('fabiomich@gmail.com')->queue(new MessageReceived($message));
    	//Mail::to('fabiomich@gmail.com')->send(new MessageReceived($message));

    	return new MessageReceived($message);
    	return 'Mensaje enviado';
    }
}
