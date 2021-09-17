<?php

namespace App\Http\Controllers;

use App\Mail\CatalogoPromociones;
use App\Mail\StatusEntregables;
use App\Mail\StatusSubsidios;
use App\Mail\UltimaActualizacion;
use App\Mail\UltimaActualizacion2;
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
    public function actualizacion(){
        // $data = ['nombre'=>'marco'];
        Mail::to('marco.02.06@hotmail.com')->send(new UltimaActualizacion());
    }
    public function actualizacion_set(){
        // $data = ['nombre'=>'marco'];
        Mail::to('marco.02.06@hotmail.com')->send(new UltimaActualizacion2());
    }
    public function status(){
        // $data = ['nombre'=>'marco'];
        Mail::to('marco.02.06@hotmail.com')->send(new StatusEntregables());
    }
}
