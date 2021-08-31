<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PdfController extends Controller
{
    public function catalogo1(){
        $pdf = app('dompdf.wrapper');
        $pdf->setPaper('A4', 'portrait');
//     // $pdf->setOptions('isRemoteEnabled',true);
        $pdf->loadView('catalogo1.welcome');
        return $pdf->stream();
//     // return view('catalogo1.welcome');
    }

    public function catalogo2(){

        $data = ['name'=>'Marco'];

        // $path = base_path('/bebe.png');
        // $type = pathinfo($path, PATHINFO_EXTENSION);
        // $data = file_get_contents($path);
        // $img = 'data:image/' . $type . ';base64,' . base64_encode($data);
        //----------------------------------------------------------------------
         //$avatarUrl = '/images/bebe.png';
        // $arrContextOptions=array(
        //                 "ssl"=>array(
        //                     "verify_peer"=>false,
        //                     "verify_peer_name"=>false,
        //                 ),
        //             );
        // $type = pathinfo($avatarUrl, PATHINFO_EXTENSION);
        // $avatarData = file_get_contents($avatarUrl, false, stream_context_create($arrContextOptions));
        // $avatarBase64Data = base64_encode($avatarData);
        // $imageData = 'data:image/' . $type . ';base64,' . $avatarBase64Data;
        // ------------------------------------------------------------------------   
        // $image = base64_encode(file_get_contents(base_path('/public/images/bebe.png')));
        //----------------------------------------------------------------------------
        $pdf = App::make('dompdf.wrapper');
        // $pdf->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        // $pdf->setOptions(['isRemoteEnabled' => true]);
        // $pdf->getDomPDF()->setHttpContext(
        //     stream_context_create([
        //         'ssl' => [
        //             'allow_self_signed'=> TRUE,
        //             'verify_peer' => FALSE,
        //             'verify_peer_name' => FALSE,
        //         ]
        //     ])
        // );
        
        $pdf->setPaper('A4', 'portrait');
        $pdf->loadView('catalogo2.welcome', $data);
        return $pdf->stream();
        // return view('catalogo2.welcome');

        // $pdf =  PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('catalogo2.welcome', $data )->setPaper('a4', 'portrait');
        // return $pdf->stream();
    }
}
