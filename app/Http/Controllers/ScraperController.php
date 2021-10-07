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

    public function tork(Client $client){

        echo "FECHA : " . date("d/m/Y") . "<br>";
        
            $paginaURL = "https://torkalpormayor.cl/collections/insumos/toalla";
            $crawler = $client->request('GET', $paginaURL);

            $crawler->filter("[class='grid__item  small--one-half medium--one-half large--one-third product-grid-item']")->each(function($node){
                $imagenProducto = $node->filter(".lazy-image > img")->attr('data-src');
                $nombreProducto = $node->filter("[class='h5--accent strong name_wrapper']");
                $precioProducto = $node->filter("[class='money']");
                $urlProducto = $node->filter(".lazy-image")->attr('href');
                
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

            $crawler->filter("[class='grid__item  small--one-half medium--one-half large--one-third on-sale tagged product-grid-item']")->each(function($node){
                $imagenProducto = $node->filter(".lazy-image > img")->attr('data-src');
                $nombreProducto = $node->filter("[class='h5--accent strong name_wrapper']");
                $precioProducto = $node->filter("[class='money']");
                $urlProducto = $node->filter(".lazy-image")->attr('href');
                
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
            
            $crawler->filter("[class='grid__item  small--one-half medium--one-half large--one-third tagged product-grid-item']")->each(function($node){
                $imagenProducto = $node->filter(".lazy-image > img")->attr('data-src');
                $nombreProducto = $node->filter("[class='h5--accent strong name_wrapper']");
                $precioProducto = $node->filter("[class='money']");
                $urlProducto = $node->filter(".lazy-image")->attr('href');
                
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

    public function dipisa(Client $client){

        echo "FECHA : " . date("d/m/Y") . "<br>";

            $paginaURL = "https://dipisa.cl/tipo_tissues/papel-higienico/";
            $crawler = $client->request('GET', $paginaURL);
            $tituloCategoria = $crawler->filter("[class='col-md-12 text-center']")->first();
            echo $tituloCategoria->text() . '<br>';

            $crawler->filter("[class='col-md-4 mb50']")->each(function($node){
                $imagenProducto = $node->filter(".box-contenido > img")->attr('src');
                $nombreProducto = $node->filter("h5");
                
                echo 'Nombre Producto: '. $nombreProducto->text() . '<br>';
                echo 'Imagen: ';
                var_dump($imagenProducto);
                echo '<br>';
                echo '<br>';
            });
     
    }

    public function avalco(Client $client){

        echo "FECHA : " . date("d/m/Y") . "<br>";
        for($i=1; $i<=4; ++$i)
        {
            $paginaURL = "https://avalco.cl/131-alcohol-etilico?page=$i";
            $crawler = $client->request('GET', $paginaURL);
            $tituloCategoria = $crawler->filter("[class='page-heading js-category-page']")->first();
            echo $tituloCategoria->text() . '<br>';

            $crawler->filter("[class='product-miniature product-style js-product-miniature']")->each(function($node){
                $imagenProducto = $node->filter(".product-cover-link > img")->attr('src');
                $nombreProducto = $node->filter(".product-name");
                $precioProducto = $node->filter("[class='price product-price']");
                $urlProducto = $node->filter(".product-name > a")->attr('href');
                echo 'Nombre Producto: '. $nombreProducto->text() . '<br>';
                echo 'Precio Producto: '. $precioProducto->text() . '<br>';
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

    public function dilen(Client $client){

        echo "FECHA : " . date("d/m/Y") . "<br>";

            $paginaURL = "https://dilenchile.cl/categoria-producto/papel-higienico/";
            $crawler = $client->request('GET', $paginaURL);
            $tituloCategoria = $crawler->filter(".title");
            echo $tituloCategoria->text() . '<br>';

            $crawler->filter("[class='products_wrapper isotope_wrapper']")->each(function($node){
                $imagenProducto = $node->filter("[class='scale-with-grid wp-post-image']")->attr('src');
                $nombreProducto = $node->filter(".desc > h4");
                $urlProducto = $node->filter(".image_wrapper > a")->attr('href');
                $precioProducto = $node->filter("[class='woocommerce-Price-amount amount']");
                echo 'Nombre Producto: '. $nombreProducto->text() . '<br>';
                echo 'Precio Producto: ' . $precioProducto->text() . '<br>';
                echo 'URL Producto: ';
                var_dump($urlProducto);
                echo  '<br>';
                echo 'Imagen: ';
                var_dump($imagenProducto);
                echo '<br>';
                echo '<br>';
            });
     
    }

    public function sodimac(Client $client){

        echo "FECHA : " . date("d/m/Y") . "<br>";
        
        $paginaURLPages = "https://www.sodimac.cl/sodimac-cl/category/cat4850182/papeles-y-dispensadores/";
        $crawler = $client->request('GET', $paginaURLPages);
        $numeroPaginas = $crawler->filter("[class='jsx-4278284191 page-item page-index ']")->last()->text();

        for($i=1; $i<=$numeroPaginas; ++$i)
        {
            $paginaURL = "https://www.sodimac.cl/sodimac-cl/category/cat4850182/papeles-y-dispensadores?currentpage=$i";
            $crawler = $client->request('GET', $paginaURL);
            $tituloCategoria = $crawler->filter("[class='jsx-245626150 category-title']");
            echo $tituloCategoria->text() . '<br>';
            echo '<br>';

            $crawler->filter("[class='jsx-411745769 product ie11-product-container']")->each(function($node){
                $imagenProducto = $node->filter("[class='image-contain ie11-image-contain  __lazy']")->attr('data-src');
                $nombreProducto = $node->filter("[class='jsx-411745769 product-title']");
                $marcaProducto = $node->filter("[class='jsx-411745769 product-brand']");
                $urlProducto = $node->filter("[class='jsx-4282314783 link link-primary ']")->attr('href');
                $precioProducto = $node->filter("[class='jsx-4135487716']");
                echo 'Marca Producto: '. $marcaProducto->text() . '<br>';
                echo 'Nombre Producto: '. $nombreProducto->text() . '<br>';
                echo 'Precio Producto: ' . $precioProducto->text() . '<br>';
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

    public function cuponatic(Client $client){
        echo "FECHA : " . date("d/m/Y") . "<br>";

        $paginaURLPages = "https://www.dpronto.cl/index.php?route=product/category&path=83_71";
        $crawler = $client->request('GET', $paginaURLPages);
        $numeroPaginas = $crawler->filter("[class='col-sm-6 text-right']")->text();
        $pagina = explode('(',$numeroPaginas);
        var_dump($pagina) . '<br>';
        // for($i=1; $i<=$numeroPaginas; ++$i)
        // {
            $paginaURL = "https://www.dpronto.cl/index.php?route=product/category&path=83_71&page=1";
            $crawler = $client->request('GET', $paginaURL);
            $tituloCategoria = $crawler->filter("#content > h1");
            echo $tituloCategoria->text() . '<br>';
            echo '<br>';

            $crawler->filter("[class='product-thumb']")->each(function($node){
                $imagenProducto = $node->filter(".img-responsive")->attr('src');
                $nombreProducto = $node->filter(".caption > h4");
                $urlProducto = $node->filter(".image > a")->attr('href');
                $precioProducto = $node->filter(".price");
                echo 'Nombre Producto: '. $nombreProducto->text() . '<br>';
                echo 'Precio Producto: ' . $precioProducto->text() . '<br>';
                echo 'URL Producto: ';
                var_dump($urlProducto);
                echo  '<br>';
                echo 'Imagen: ';
                var_dump($imagenProducto);
                echo '<br>';
                echo '<br>';
            });
        // }
    }
}
