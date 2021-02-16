<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Jobs\SendEmailJob;

class mailController extends Controller
{
    public function store(Request $request){
        $details=[
            "email"=>"robertmassiquelmacuacua@gmail.com",
            "title"=>$request->title,
            "body"=>$request->body
        ];
        dispatch(new SendEmailJob($details));
        //Mail::to("robertmassiquelmacuacua@gmail.com")->send(new SendMail($details));

        echo "fiz";
    }
}
