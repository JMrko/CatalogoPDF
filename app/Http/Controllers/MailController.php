<?php

namespace App\Http\Controllers;

use App\Mail\CatalogoPromociones;
use App\Mail\StatusSubsidios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function mail(){
        $data = ['nombre'=>'marco'];
        Mail::to('marco.02.06@hotmail.com')->send(new CatalogoPromociones($data));
    }
    public function email_subsidio(){
        // $data = ['nombre'=>'marco'];
        Mail::to('marco.02.06@hotmail.com')->send(new StatusSubsidios());
    }
}
