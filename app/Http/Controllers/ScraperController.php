<?php

namespace App\Http\Controllers;
use Goutte\Client;
use Illuminate\Http\Request;

class ScraperController extends Controller
{
    public function index(Client $client){

        echo "FECHA : " . date("d/m/Y") . "<br>";
        for($i=1; $i<=4; ++$i)
        {
            $paginaURL = "https://www.arcalauquen.cl/3-papeles?page=$i";
            $crawler = $client->request('GET', $paginaURL);
            $tituloCategoria = $crawler->filter("[class='h1 page-title']")->first();
            echo $tituloCategoria->text() . '<br>';

            $crawler->filter(".js-product-miniature-wrapper")->each(function($node){
                $imagenProducto = $node->filter(".product-thumbnail > img")->attr('data-src');
                $nombreProducto = $node->filter("[class='h3 product-title']");
                $precioProducto = $node->filter("[class='product-price-and-shipping']");
                $urlProducto = $node->filter("[class='thumbnail product-thumbnail']")->attr('href');
                
                echo 'Nombre Producto: '. $nombreProducto->text() . '<br>';
                echo 'Precio: '. $precioProducto->text() . '<br>';
                echo 'URL Producto: ';
                var_dump($urlProducto);
                echo  '<br>';
                echo 'Imagen: ';
                var_dump($imagenProducto);
                echo '<br>';
                echo '<br>';
            });
        }
    }
}
