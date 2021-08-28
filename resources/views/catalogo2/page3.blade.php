
<div class="body1_page3"></div>
<div class="circle_page3">•</div>
<div class="box2_page" id="color_page3">Creciendo Juntos</div>
<div class="box2_page3">Actualización 5 de Agosto del 2021</div>
<div class="box4_page" id="color_page3">Infant</div>
<div class="box5_page">
    <table style=" width: 710px">
        <tr>
            <th>
                <div class="box6_page color3-1">
                    {{$name}}
                </div>
            </th>
            <th>
                <div class="box7_page color3-1">
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
                                                {{-- <img class="img_product" src="../public/images/bebe.png" alt=""> --}}
                                                {{-- <img class="img_product" src="data:image/png;base64,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" alt=""> --}}
                                                {{-- <img class="img_product" src="{{url('../public/images/bebe.png')}}" alt=""> --}}
                                                {{-- <img class="img_product" src="{{public_path('images/bebe.png')}}" alt=""> --}}
                                                {{-- <img class="img_product" src="./images/bebe.png" alt=""> --}}
                                                {{-- <img class="img_product" src="{{$img}}" alt=""> --}}
                                                {{-- <img class="img_product" src="{{public_path() . $avatarUrl}}"  width="180" alt=""> --}}
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
