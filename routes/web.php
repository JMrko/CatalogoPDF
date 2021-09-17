<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

// $router->get('/catalogo1',function(){
//     $pdf = app('dompdf.wrapper');
//     $pdf->setPaper('A4', 'portrait');
//     // $pdf->setOptions('isRemoteEnabled',true);
//     $pdf->loadView('catalogo1.welcome');
//     return $pdf->stream();
//     // return view('catalogo1.welcome');
// });
// $router->get('/catalogo2',function(){
//     $pdf = app('dompdf.wrapper');
//     $pdf->setPaper('A4', 'portrait');
//     // $pdf->setOptions('isRemoteEnabled',true);
//     $pdf->loadView('catalogo2.welcome');
//     return $pdf->stream();
//     // return view('catalogo2.welcome');
// });
$router->get('/','PdfController@catalogo1');
$router->get('/catalogo2','PdfController@catalogo2');

$router->get('/send_email','MailController@mail');
$router->get('/send_email/subsidio','MailController@email_subsidio');
$router->get('/send_email/actualizacion','MailController@actualizacion');
$router->get('/send_email/actualizacion2','MailController@actualizacion_set');
$router->get('/send_email/status','MailController@status');

$router->get('/test', function(){
        return view('mail.status');
});