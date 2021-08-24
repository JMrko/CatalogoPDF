<div class="body1_page3"></div>
<div class="box2_page" id="color_page9">•  Creciendo Juntos</div>
<div class="box2_page3">Actualización 5 de Agosto del 2021</div>
<div class="box4_page" id="color_page9">Adult</div>
<div class="box4_page3">
    <table >
        @foreach ( range (0,5) as $valve) 
            @if ($loop->index %2==0)
                <tr class="fila">
            @endif
                    <th class="columna" 
                        @if($loop->last && ($loop->index +1) % 2 != 0)
                        colspan='2'
                        @endif
                    >
                        <div class="box_table @if($loop->last && ($loop->index +1) % 2 != 0) last_box @endif"
                            id="box_table_color_page9">
                            <div class="big_text">
                                <div class="text1">50 Combos </div> 
                                <div class="text2">Total de planchas: 300</div> 
                                <div class="text3">Sell In Bonificación</div>
                            </div>
                            <div class="box_table_img">
                                <table>
                                    <tr>
                                        <th>
                                            <div class="img_products">
                                                <div class="text_free_product1">Gratis</div>
                                                <img class="img_product" src="../public/images/sku_2_Mesa.jpg" alt="">
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

<img class="body2_page" src='../public/images/Lila-15-15.jpg' alt="">