<?php

namespace App\Http\Controllers;
use Goutte\Client;
use Ixudra\Curl\Facades\Curl;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Http;

class ScraperController extends Controller
{
    public function arcalauquen(Client $client){

        echo "FECHA : " . date("d/m/Y") . "<br>";

        $paginaURLPages = "https://www.arcalauquen.cl/3-papeles?page=1";
        $crawler = $client->request('GET', $paginaURLPages);
        $posicion = $crawler->filter(".page-list > li")->count()-2;
        $numeroPaginas = $crawler->filter(".page-list > li")->eq($posicion)->text();

        for($i=1; $i<=$numeroPaginas; ++$i)
        {
            $paginaURL = "https://www.arcalauquen.cl/3-papeles?page=$i";
            $crawler = $client->request('GET', $paginaURL);
            $tituloCategoria = $crawler->filter("[class='h1 page-title']")->first();
            echo 'PÁGINA '.$i. '<br>';
            echo $tituloCategoria->text() . '<br>';
            echo '<br>';
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

        $paginaURLPages = "https://avalco.cl/131-alcohol-etilico?page=1";
        $crawler = $client->request('GET', $paginaURLPages);
        $posicion = $crawler->filter(".page-list > li")->count()-2;
        $numeroPaginas = $crawler->filter(".page-list > li")->eq($posicion)->text();

        for($i=1; $i<=$numeroPaginas; ++$i)
        {
            $paginaURL = "https://avalco.cl/131-alcohol-etilico?page=$i";
            $crawler = $client->request('GET', $paginaURL);
            $tituloCategoria = $crawler->filter("[class='page-heading js-category-page']")->first();
            echo 'PÁGINA '.$i. '<br>';
            echo $tituloCategoria->text() . '<br>';
            echo '<br>';
            
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

            $crawler->filter(".isotope-item")->each(function($node){
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

    public function dpronto(Client $client){
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

    public function comcer(Client $client){

        echo "FECHA : " . date("d/m/Y") . "<br>";

            $paginaURL = "https://www.comcer.cl/store/categoria-producto/dispensadores/";
            $crawler = $client->request('GET', $paginaURL);
            $tituloCategoria = $crawler->filter("[class='woocommerce-products-header__title page-title']");
            echo $tituloCategoria->text() . '<br>';
            echo '<br>';

            $crawler->filter(".products > li")->each(function($node){
                $imagenProducto = $node->filter("[class='attachment-woocommerce_thumbnail size-woocommerce_thumbnail']")->attr('src');
                $nombreProducto = $node->filter("[class='woocommerce-loop-product__title']");
                $urlProducto = $node->filter("[class='woocommerce-LoopProduct-link woocommerce-loop-product__link']")->attr('href');
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
    
    public function ofimaster(Client $client){

        echo "FECHA : " . date("d/m/Y") . "<br>";

        $paginaURLPages = "https://www.ofimaster.cl/papel-tissue?page=1";
        $crawler = $client->request('GET', $paginaURLPages);
        $numeroPaginas = $crawler->filter('.count > span')->last()->text();

        for($i=1; $i<=$numeroPaginas; ++$i){

            $paginaURL = "https://www.ofimaster.cl/papel-tissue?page=$i";
            $crawler = $client->request('GET', $paginaURL);
            $tituloCategoria = $crawler->filter(".page-title");
            echo 'PÁGINA '.$i. '<br>';
            echo $tituloCategoria->text() . '<br>';
            echo '<br>';
            
            $crawler->filter("[class='product-block']")->each(function($node){
                $imagenProducto = $node->filter("[class='img-fluid']")->attr('src');
                $nombreProducto = $node->filter("[class='brand-name trsn']");
                $urlProducto = $node->filter(".product-block > a")->attr('href');
                $precioProducto = $node->filter("[class='block-price']");
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

    public function daos(Client $client){

        echo "FECHA : " . date("d/m/Y") . "<br>";

        $paginaURLPages = "https://daos.cl/home/3-aseo-y-limpieza";
        $crawler = $client->request('GET', $paginaURLPages);
        $numeroPaginas = $crawler->filter(".page-list > li")->eq(4)->text();
        
        for($i=1; $i<=$numeroPaginas; ++$i){
            $paginaURL = "https://daos.cl/home/3-aseo-y-limpieza?page=$i";
            $crawler = $client->request('GET', $paginaURL);
            $tituloCategoria = $crawler->filter(".h2");
            echo 'PÁGINA '.$i. '<br>';
            echo $tituloCategoria->text() . '<br>';
            echo '<br>';
            
            $crawler->filter("[class='thumbnail-container']")->each(function($node){
                $imagenProducto = $node->filter("[class='ttproduct-img1']")->attr('src');
                $nombreProducto = $node->filter("[class='h3 product-title']");
                $urlProducto = $node->filter("[class='thumbnail product-thumbnail']")->attr('href');
                $precioProducto = $node->filter("[class='price']");
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

    public function provit(Client $client){

        echo "FECHA : " . date("d/m/Y") . "<br>";

        $paginaURLPages = "https://provit.cl/lineas/2/papeles";
        $crawler = $client->request('GET', $paginaURLPages);
        $numeroPaginas = $crawler->filter(".paginate")->last()->text();

        for($i=1; $i<=$numeroPaginas; ++$i){
            $paginaURL = "https://provit.cl/lineas/2/papeles/9999/0/0/9999/0/9/pagina-$i";
            $crawler = $client->request('GET', $paginaURL);
            $tituloCategoria = $crawler->filter(".nomCategoria");
            echo 'PÁGINA '.$i. '<br>';
            echo $tituloCategoria->text() . '<br>';
            echo '<br>';
            
            $crawler->filter("[class='grilla']")->each(function($node){
                $imagenProducto = $node->filter(".imgGrilla > img")->attr('src');
                $nombreProducto = $node->filter("[class='nombreGrilla']");
                $urlProducto = $node->filter("[class='nombreGrilla']")->attr('href');
                $precioProducto = $node->filter("[class='conDescuento']");
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
    
    public function limpiamas(Client $client){

        echo "FECHA : " . date("d/m/Y") . "<br>";

            $paginaURL = "https://limpiamas.mercadoshops.cl/hogar/";
            $crawler = $client->request('GET', $paginaURL);
            $tituloCategoria = $crawler->filter(".ui-search-breadcrumb__title");
            echo $tituloCategoria->text() . '<br>';
            echo '<br>';
            
            $crawler->filter("[class='ui-search-result__wrapper']")->each(function($node){
                $imagenProducto = $node->filter(".slick-slide > img")->attr('src');
                $nombreProducto = $node->filter("[class='ui-search-item__title']");
                $urlProducto = $node->filter("[class='ui-search-item__group__element ui-search-link']")->attr('href');
                $precioProducto = $node->filter("[class='price-tag-amount']");
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

    public function hygiene(Client $client){
        
        echo "FECHA : " . date("d/m/Y") . "<br>";

        $paginaURL = "https://www.hygiene.cl/categoria-producto/higenicos/";
        $crawler = $client->request('GET', $paginaURL);
        $tituloCategoria = $crawler->filter(".page-title");
        echo $tituloCategoria->text() . '<br>';
        echo '<br>';

        $crawler->filter(".classic")->each(function($node){
            $imagenProducto = $node->filter("[class='attachment-woocommerce_thumbnail size-woocommerce_thumbnail']")->attr('src');
            $nombreProducto = $node->filter("[class='woocommerce-loop-product__title']");
            $urlProducto = $node->filter(".product-wrap > a")->attr('href');
            $precioProducto = $node->filter("[class='price']");
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

    public function mercado(){
        $url = 'https://deadpool.instaleap.io/api/v2';
        $data = array('operationName'=>'getStore','variables'=>['clientId'=>'CENTRAL_MAYORISTA'],'query'=>'query getStore($storeId: ID, $clientId: String) {  getStore(storeId: $storeId, clientId: $clientId) {    id    name    categories {      id      image      slug      name      redirectTo      isAvailableInHome      __typename    }    banners {      id      title      desktopImage      mobileImage      targetCategory      targetUrl {        url        type        __typename      }      __typename    }    __typename  }}');
        $dataJson = json_encode($data);
        $response = \Httpful\Request::post($url)
                            ->sendsJson()
                            ->body($dataJson)
                            ->send();
       $storeId = $response->body->data->getStore->id;
       $categoryId = $response->body->data->getStore->categories;
        dd( $categoryId);

       $dataProductos = array('variables'=> ['categoryId'=> '63548','onlyThisCategory'=>false,'pagination'=>['pageSize'=>30,'currentPage'=>1],'storeId'=>$storeId],'query'=>'query ($pagination: paginationInput, $search: SearchInput, $storeId: ID!, $categoryId: ID, $onlyThisCategory: Boolean, $filter: ProductsFilterInput, $orderBy: productsSortInput) {  getProducts(pagination: $pagination, search: $search, storeId: $storeId, categoryId: $categoryId, onlyThisCategory: $onlyThisCategory, filter: $filter, orderBy: $orderBy) {    redirectTo    products {      id      description      name      photosUrls      sku      unit      price      specialPrice      promotion {        description        type        isActive        conditions        __typename      }      stock      nutritionalDetails      clickMultiplier      subQty      subUnit      maxQty      minQty      specialMaxQty      ean      boost      showSubUnit      isActive      slug      categories {        id        name        __typename      }      __typename    }    paginator {      pages      page      __typename    }    __typename  }}');
       $dataProductosJson = json_encode($dataProductos);
       $productos = \Httpful\Request::post($url)
                            ->sendsJson()
                            ->body($dataProductosJson)
                            ->send();
        dd($productos);
    }

}
