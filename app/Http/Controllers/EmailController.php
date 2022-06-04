<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Config;
use App\Models\mailConfig;


class EmailController extends Controller
{
    public function send(Request $request)
    {
       
    $imageName = time().'.'.$request->image->extension();  //image name like 1,2,3...adding
     
    $request->image->move(public_path('images'), $imageName); // storing the image specific path

        $details = [
            'title' => 'Mail from Kayser ahmed',
            'message' => $request->get('message'),
            'image'=> $imageName // it is the imageName file storing ti image variable
        ];

   $emails=explode(',',$request->get('email')); // The explode() function breaks a string into an array.

// foreach($emails as $em) {
//    trim($em, " ");
//    dd($em);
// }

// echo $em;
    
// echo str_replace(' ', ',', $emails);

//    dd($email);
        $config = mailConfig::query()->where('Username', $request->get('FromEmail'))->first(); 
        Config::set('mail.mailers.smtp', [    //this one is the alternative method that will work for the dynamic setting of the values in the config.
            'transport' => 'smtp',
            'host' => env('MAIL_HOST', 'smtp.mailgun.org'),
            'port' => env('MAIL_PORT', 587),
            'encryption' => env('MAIL_ENCRYPTION', 'tls'),
            'username' => $config->Username,
            'password' => $config->Password,
            'timeout' => null,
            'auth_mode' => null,
        ]);
        
        //dd(Config::get('mail.mailers.smtp', 'default'));
        Mail::to($emails)
        ->send(new \App\Mail\Greetings($details));

        // foreach($request->get('email') as $email){
        //     Mail::to($email)
        //     ->send(new \App\Mail\Greetings($details));
        // }
 

        return back();
    }
}
