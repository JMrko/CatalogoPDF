<?php

namespace App\Http\Controllers;
use Goutte\Client;
use Illuminate\Http\Request;

class ScraperController extends Controller
{
    public function index(Client $client){
        $crawler = $client->request('GET', 'https://www.arcalauquen.cl/3-papeles');
        
        $producto =  $crawler->filter('.js-product-miniature-wrapper')->each(function($node){
            // $imagenProducto = $node->filter("[class='thumbnail product-thumbnail']")->attr('src');
            $nombreProducto = $node->filter("[class='h3 product-title']");
            $precioProducto = $node->filter("[class='product-price-and-shipping']");
            $urlProducto = $node->filter("[class='thumbnail product-thumbnail']")->extract(array('href'));
            // echo $imagenProducto->text() . '<br>';
            echo $nombreProducto->text() . '<br>';
            echo $precioProducto->text() . '<br>';
            var_dump($urlProducto);
            echo  '<br>';
            // dd($imagenProducto);
            // $datosProducto = [];
            // $datosProducto['nombre']=$nombreProducto;
            // $datosProducto['precio']=$precioProducto;
            // var_dump($datosProducto);
        });
        // dd($producto->html());
    }
}
