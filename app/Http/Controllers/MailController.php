<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class MailController extends Controller
{
    public $name;
    public $email;

    public function sendEvaluateMail(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        if(isset($email)){
            $info = array(
                'name' => $request->input('name'),
                'email' =>  $request->input('email'),
                'replyPrice' => $request->input('replyPrice'),
                'replyComment' => $request->input('replyComment')
            );
            Mail::send('evaluateMail', $info, function ($message) use($email, $name)
            {
                $message->to($email, $name)
                    ->subject('RE: Your Evaluation Request');
                $message->from('sanam.shrestha.c3@gmail.com', 'Evaluation:Autopoint');
            });
            return redirect()->route('evaluateRecord');
        }else{
            return redirect()->route('evaluateRecord');
        }
    }

    public function sendServiceMail(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $status = $request->input('replyStatus');
        if(isset($email)){
            $info = array(
                'name' => $request->input('name'),
                'email' =>  $request->input('email'),
                'status' => $request->input('replyStatus'),
                'totalAmount' => $request->input('totalAmount'),
                'completeComment' => $request->input('completeComment')
            );
            Mail::send('serviceMail', $info, function ($message) use($email, $name)
            {
                $message->to($email, $name)
                    ->subject('RE: Your Service Request');
                $message->from('sanam.shrestha.c3@gmail.com', 'Service:Autopoint');
            });
            return redirect()->route('servicingRecord');
        }else{
            return redirect()->route('servicingRecord');
        }
    }

    public function attached_mail()
    {
        $info = array(
            'name' => "Alex"
        );
        Mail::send('mail', $info, function ($message)
        {
            $message->to('alex@example.com', 'w3schools')
                ->subject('Test eMail with an attachment from W3schools.');
            $message->attach('D:\laravel_main\laravel\public\uploads\pic.jpg');
            $message->attach('D:\laravel_main\laravel\public\uploads\message_mail.txt');
            $message->from('karlosray@gmail.com', 'Alex');
        });
        echo "Successfully sent the email";
    }
}
