<div class="body1_page3"></div>
<div class="circle_page3">•</div>
<div class="box2_page" id="color_page3">Creciendo Juntos</div>
<div class="box2_page3">Actualización 5 de Agosto del 2021</div>
<div class="box4_page" id="color_page3">Infant</div>
<div class="box5_page">
    <table style=" width: 710px">
        <tr>
            <th>
                <div class="box6_page color3-2">
                    {{$name}}
                </div>
            </th>
            <th>
                <div class="box7_page color3-2">
                    Minorista
                </div>
            </th>
        </tr>
    </table>
</div>
<div class="box4_page3">
    <table >
        @foreach ( range (0,5) as $valve) 
            {{-- @if($loop->index % 6 == 0)
                <div class="page-break"></div>
            @endif --}}
            @if ($loop->index %2==0)
                <tr class="fila">
            @endif
                    <th class="columna">
                            <div class="box_table"
                            id="box_table_color_page3">
                            <div class="big_text">
                                <div class="text1" id="text1_color_page3">4,379 Planchas</div> 
                                <div class="text2" id="text2_color_page3">Total de Combos: 97</div> 
                                <div class="text3">Sell Out</div>
                            </div>
                            <div class="box_table_img">
                                <table>
                                    <tr>
                                        <th>
                                            <div class="img_products">
                                                <div class="text_free_product1">Gratis</div>
                                                <img class="img_product" src="../public/images/sku_1_Mesa.jpg" alt="">
                                                <div class="text1_product1">11 HAF x120</div>
                                                <div class="text2_product1">Por 9 plancha(s)</div>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="img_products">
                                                <div class="text_free_product2">Gratis</div>
                                                <img class="img_product" src="../public/images/sku_3_Mesa.jpg" alt="">
                                                <div class="text1_product2">11 HAF x120</div>
                                                <div class="text2_product2">Por 9 plancha(s)</div>
                                            </div>
                                        </th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </th>
            @if ($loop->index % 2 != 0)
                </tr>
            @endif
            
        @endforeach
    </table>
</div>

<img class="body2_page" src='../public/images/Rojo-14-15-15.jpg' alt="">
