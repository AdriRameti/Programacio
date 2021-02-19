function efectos_shop(){
    const grid = new Muuri('.grid',{
        layout: {
            rounding: false
        }
    });
    window.addEventListener('load',() => {
        document.getElementById('grid').classList.add('imagenes-cargadas');
    });
}
function cat_shop(){
    var nom=localStorage.getItem('nombre');
    console.log(nom);
    if (nom=="Tshirt"){
        var url="/Ejercicios_PHP/modulo/shop/controlador/controller_shop.php?op="+nom;
    }else if(nom=="Formal"){
        var url="/Ejercicios_PHP/modulo/shop/controlador/controller_shop.php?op="+nom;
    } else if(nom=="Hoodies"){
        var url="/Ejercicios_PHP/modulo/shop/controlador/controller_shop.php?op="+nom;
    }else if(nom=="Sneakers"){
        var url="/Ejercicios_PHP/modulo/shop/controlador/controller_shop.php?op="+nom;
    }else if(nom=="Accesories"){
        var url="/Ejercicios_PHP/modulo/shop/controlador/controller_shop.php?op="+nom;
    }else if(nom=="Jeans"){
        var url="/Ejercicios_PHP/modulo/shop/controlador/controller_shop.php?op="+nom;
    }else if(nom=="Shirt"){
        var url="/Ejercicios_PHP/modulo/shop/controlador/controller_shop.php?op="+nom;
    }else if(nom=="Pants"){
        var url="/Ejercicios_PHP/modulo/shop/controlador/controller_shop.php?op="+nom;
    }else if(nom=="Jacket"){
        var url="/Ejercicios_PHP/modulo/shop/controlador/controller_shop.php?op="+nom;
    }

    $.ajax({
        type:'GET',
        dataType:'JSON',
        url:url,
        error:function(){
            console.log("error shop");
        },
    success:(function(data){

                    //HEADER 
            $('<header></header>').attr('class','head1').appendTo('#DivHead');
            $('<div></div>').attr('class','tituloL head2').appendTo('.head1');
            $('<h1>Nuestros Artículos</h1>').appendTo('.head2');
            $('<p>Descubre todos los artículos del mercado y escoge el diseño que mas te guste</p>').appendTo('.head2');
            $('<form></form>').attr('action','').attr('class','head3').appendTo('.head2');
            $('<input></input>').attr('type','text').attr('class','busqueda').attr('id','busqueda').attr('placeholder','Buscar').appendTo('.head3');
            $('<div></div>').attr('class','catego_List head4').attr('id','catego_List').appendTo('.head2');
            $('<a>Todos</a>').attr('href','#').attr('class','activo').appendTo('.head4');
            $('<select></select>').attr('class','head5').appendTo('.head4');
            //opciones select
            $('<option>Marca</option>').attr('hidden','').attr('selected','').appendTo('.head5');
            $('<option>Nike</option>').attr('value','Nike').appendTo('.head5');
            $('<option>Adidas</option>').attr('value','Adidas').appendTo('.head5');
            $('<option>Carhartt</option>').attr('value','Carhartt').appendTo('.head5');
            $('<option>Bape</option>').attr('value','Bape').appendTo('.head5');
            $('<option>Supreme</option>').attr('value','Supreme').appendTo('.head5');
            $('<option>Guess</option>').attr('value','Guess').appendTo('.head5');
            $('<option>Obey</option>').attr('value','Obey').appendTo('.head5');
            $('<option>The North Face</option>').attr('value','The North Face').appendTo('.head5');
            $('<option>Polo Ralph Lauren</option>').attr('value','Polo Ralph Lauren').appendTo('.head5');
            //opciones select fin
            $('<select></select>').attr('class','head6').appendTo('.head4');
            //opciones select2
            $('<option>Talla</option>').attr('hidden','').attr('selected','').appendTo('.head6');
            $('<option>S</option>').attr('value','S').appendTo('.head6');
            $('<option>M</option>').attr('value','M').appendTo('.head6');
            $('<option>L</option>').attr('value','L').appendTo('.head6');
            $('<option>XL</option>').attr('value','XL').appendTo('.head6');
            //opciones select2 fin
            $('<select></select>').attr('class','precio head7').appendTo('.head4');
            //opciones select3 
            $('<option>Precio</option>').attr('hidden','').attr('selected','').appendTo('.head7');
            $('<option>10€-50€</option>').attr('value','10€-50€').appendTo('.head7');
            $('<option>50€-100€</option>').attr('value','50€-100€').appendTo('.head7');
            $('<option>+100€</option>').attr('value','+100€').appendTo('.head7');
            //opciones select3 fin
            $('<select></select>').attr('class','fechaa head8').appendTo('.head4');
            //opciones select4
            $('<option>Genero</option>').attr('hidden','').attr('selected','').appendTo('.head8');
            $('<option>Hombre</option>').attr('value','Hombre').appendTo('.head8');
            $('<option>Mujer</option>').attr('value','Mujer').appendTo('.head8');
            $('<option>Hombre&Mujer</option>').attr('value','Hombre&Mujer').appendTo('.head8');
            //opciones select4 fin

            x=0;
        for (row in data){
            //CONTENIDO
            $('<span></span>').attr('class','items sup'+x).appendTo('#Div3');
            $('<span></span>').attr('class','item-contenido suport'+x).appendTo('.sup'+x);
            $('<a></a>').attr('class','link'+x).appendTo('.suport'+x);
            $('<img></img>').attr('id',''+data[row].codigo+'').attr('class','details defin'+x).attr('src',''+data[row].img+'').attr('alt','').appendTo('.link'+x);
            $('<div>'+data[row].nombre+'</div>').attr('class','preu'+x).appendTo('.sup'+x);
            // $('<div>'+data[row].precio+'</div>').attr('class','precio'+x).appendTo('.sup'+x);
                x++;
        }
    })
    });
}
function details(){
$('body').on("click",".details",function(){
var codigo = this.getAttribute('id');
console.log(codigo);
    $.ajax({
        type: "GET",
        dataType: "JSON",
        url: "/Ejercicios_PHP/modulo/shop/controlador/controller_shop.php?op=details&codigo="+codigo,
        error:function(){
            console.log("error details");
        },
        success:(function(data){
            $('#Div3').empty();
            $('#DivHead').empty();
            for (row in data){
                //Primera fila
                $('<div></div>').attr('class','fila cabecera1').appendTo('#Div3');

                    //Primera Columna Fila1
                    $('<div></div>').attr('class','columna precontenido1').appendTo('.cabecera1');
                    $('<img></img>').attr('src','https://picsum.photos/800/600').appendTo('.precontenido1');
                    //END Primera Columna Fila1

                     //Segunda Columna Fila1
                    $('<div></div>').attr('class','columna precontenido2').appendTo('.cabecera1');
                    $('<img></img>').attr('src','https://picsum.photos/800/600').appendTo('.precontenido2');
                    //END Segunda Columna Fila1
                    
                    //Tercera Columna Fila1
                    $('<div></div>').attr('class','columna2 precontenido3').appendTo('.cabecera1');

                    //Contenido Tercera Columna
                    $('<div></div>').attr('class','intro1').appendTo('.precontenido3');

                        //Informacion Intro1
                        $('<div></div>').attr('class','contenido1').appendTo('.intro1');
                            //Contenido
                            $('<h1>Artículo Seleccionado</h1>').appendTo('.contenido1');
                            $('<div></div>').attr('class','info contenidoE1').appendTo('.contenido1');
                                //ContenidoE
                                $('<p>Nombre</p>').appendTo('.contenidoE1');
                                $('<p>Precio</p>').appendTo('.contenidoE1');
                                $('<p>Descripción</p>').appendTo('.contenidoE1');
                                //END Contenido E
                            //END Contenido
                        //END Informacion Intro1

                    $('<div></div>').attr('class','intro2').appendTo('.precontenido3');
                        //Información Intro2
                        $('<p></p>').attr('class','parraf1').appendTo('.intro2');
                            $('<a>Más información</a>').attr('href','#informacion').attr('class','vinculos').appendTo('.parraf1');

                        $('<p></p>').attr('class','parraf2').appendTo('.intro2');
                            $('<a>Envio</a>').attr('href','#infoEnv').attr('class','vinculos').appendTo('.parraf2');
                        //END Información Intro2

                    $('<div></div>').attr('class','intro3').appendTo('.precontenido3');
                        //Información Intro3
                        $('<span>S</span>').attr('class','Button_green2').attr('value','S').appendTo('.intro3');
                        $('<span>M</span>').attr('class','Button_green2').attr('value','M').appendTo('.intro3');
                        $('<span>L</span>').attr('class','Button_green2').attr('value','L').appendTo('.intro3');
                        $('<span>XL</span>').attr('class','Button_green2').attr('value','XL').appendTo('.intro3');
                        //END Información Intro3

                    $('<div></div>').attr('class','intro4').appendTo('.precontenido3');
                        //Información Intro4
                        $('<div></div>').attr('class','botonesShop').appendTo('.intro4');
                            $('<a>Añadir al carrito</a>').attr('class','botones').appendTo('.botonesShop');

                        $('<br></br>').appendTo('.intro4');
                        $('<div></div>').attr('class','botonesShop1').appendTo('.intro4');
                            $('<a>Favoritos</a>').attr('class','botones2').appendTo('.botonesShop1');
                        //ENDInformación Intro4
                    //ENDContenido Tercera Columna
                    //END Tercera Columna Fila1
                //END Primera fila

                //Segunda fila
                $('<div></div>').attr('class','fila cabecera2').appendTo('#Div3');
                    //Primera Columna Fila2
                    $('<div></div>').attr('class','columna precontenido9').appendTo('.cabecera2');
                        $('<img></img>').attr('src','https://picsum.photos/800/600').appendTo('.precontenido9');
                    //END Primera Columna Fila2

                     //Segunda Columna Fila2
                    $('<div></div>').attr('class','columna precontenido4').appendTo('.cabecera2');
                        $('<img></img>').attr('src','https://picsum.photos/800/600').appendTo('.precontenido4'); 
                    //END Segunda Columna Fila2

                    $('<br></br>').appendTo('.cabecera2');
                //END Segunda fila

                //Tercera fila
                $('<div></div>').attr('class','filaUlt cabecera3').appendTo('#Div3');

                    //Seccion Descripcion
                    $('<div></div>').attr('class','precontenido5').appendTo('.cabecera3');

                        //Información Seccion Descripcion
                        $('<details></details>').attr('open','').attr('class','detalles detallesShop').appendTo('.precontenido5');

                            //Información Details
                            $('<summary>Descripción</summary>').appendTo('.detallesShop');
                            $('<div></div>').attr('class','divDet').appendTo('.detallesShop');
                                $('<p></p>').attr('class','linques').appendTo('.divDet');
                                    $('<a>Aquí ira la descripcion del artículo</a>').attr('name','informacion').appendTo('.linques');
                            //END Información Details

                        $('<br></br>').appendTo('.precontenido5');
                        //ENDInformación Seccion Descripcion
                    //END Seccion Descripcion

                    //Seccion Envio
                    $('<div></div>').attr('class','precontenido6').appendTo('.cabecera3');
                    $('<details></details>').attr('open','').attr('class','detalles detallesShop1').appendTo('.precontenido6');

                        //Información Seccion Descripcion
                        $('<summary>Envíos y devoluciones</summary>').appendTo('.detallesShop1');
                        $('<div></div>').attr('class','paises').appendTo('.detallesShop1');

                            //Información paises envio
                            $('<p></p>').attr('class','paises2').appendTo('.paises');
                                $('<select></select>').attr('class','envio paises3').appendTo('.paises2'); 
                                    $('<option>España</option>').appendTo('.paises3');
                                    $('<option>Italia</option>').appendTo('.paises3');
                                    $('<option>Reino Unido</option>').appendTo('.paises3');
                                    $('<option>Alemania</option>').appendTo('.paises3');
                                    $('<option>Estados Unidos</option>').appendTo('.paises3');
                                    $('<option>China</option>').appendTo('.paises3');
                                    $('<option>Paises Bajos</option>').appendTo('.paises3');
                                    $('<option>Rusia</option>').appendTo('.paises3');
                                    $('<option>Japón</option>').appendTo('.paises3');
                                    $('<option>Brasil</option>').appendTo('.paises3');
                                    $('<option>Argentina</option>').appendTo('.paises3');
                                    $('<option>Canada</option>').appendTo('.paises3');
                                    $('<option>Bélgica</option>').appendTo('.paises3');
                                    $('<option>Bahamas</option>').appendTo('.paises3');
                                    $('<option>México</option>').appendTo('.paises3');
                                    $('<option>Francia</option>').appendTo('.paises3');
                            //END Información paises envio
                        $('<div></div>').attr('class','infoEnv infoEnvio').appendTo('.detallesShop1');
                            $('<a>Envios gratis con GLS, con la fecha de entrega estimada en el artículo</a>').attr('name','infoEnv').attr('class','informacionE').appendTo('.infoEnvio');
                            $('<ul></ul>').attr('class','listado').appendTo('.infoEnvio');
                                $('<li></li>').attr('class','linea').appendTo('.listado');
                                    $('<a>Gratis para pedidos de 50€ o más</a>').appendTo('.linea');
                                $('<li></li>').attr('class','linea1').appendTo('.listado');
                                    $('<a>3€ para pedidos inferiores a 50€</a>').appendTo('.linea1');
                                $('<li></li>').attr('class','linea2').appendTo('.listado');
                                    $('<a>5€ para pedidos con envío Express</a>').appendTo('.linea2');
                            $('<a>Tienes 14 días para hacer devoluciones desde que recibes el producto. Ampliación del plazo de devolución durante el periodo de fiestas: Todos los pedidos realizados entre el 9 de diciembre de 2020 y el 5 de enero de 2021 podrán devolverse hasta el 19 de enero de 2021.</a>').attr('class','textJust').appendTo('.infoEnvio');
                        //ENDInformación Seccion Descripcion
                    //END Seccion Envio
                //END Tercera fila
            }
        })
    });
});
}

function load_divs(){
    // $('<div></div>').attr('id','DivTotal').appendTo('#totalShop');
    $('<div></div>').attr('id','DivHead').appendTo('#headShop');
    $('<div></div>').attr('id','Div3').appendTo('#listS');
    cat_shop();
    details();
}
$(document).ready(function(){
load_divs();
efectos_shop();
});
/////////DEBUG ERROR AJAX//////////////
    // $.ajax({
    //     type:"GET",
    //     dataType:"JSON",
    //     url:url,
    // }).fail( function( jqXHR, textStatus, errorThrown ) {
    //     alert( 'Error!!' );
    //     console.log(jqXHR);
    //     console.log(textStatus);
    //     console.log(errorThrown);
    // });