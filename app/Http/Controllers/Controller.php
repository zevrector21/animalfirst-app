<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
   
    public function demo(Request $request)
    {
        $to_name = $request->post('name');
        $to_email = 'coralisland8327@gmail.com';
        $data = array(
            'name'=>$to_name, 
            "shelter_name" => $request->post('shelter_name'),
            "phone" => $request->post('phone'),
            "description" => $request->post('description'),
        );

        Mail::send('emails', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('Artisans Web Testing Mail');
            $message->from('zevrector21@gmail.com','Zev');
        });        

        echo "Basic Email Sent. Check your inbox.";
        return redirect('/demo');
    }
}

