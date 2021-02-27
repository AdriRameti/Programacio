
var filtrado;
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
function cat_shop(correcte,consulta,){
    var nom=localStorage.getItem('nombre');
    var filtrado1 =sessionStorage.getItem('filtrado');
    var marcas=sessionStorage.getItem('marcas');
    var tallas=sessionStorage.getItem('tallas');
    console.log(filtrado1,marcas,tallas);
    if(correcte==1){
        var url="/Ejercicios_PHP/modulo/shop/controlador/controller_shop.php?op=search&consulta="+consulta+"&nom="+nom;
        // console.log(url);
    }else{
    if (filtrado1!=1){
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
    }else if (filtrado1==1){
        var url="/Ejercicios_PHP/modulo/shop/controlador/controller_shop.php?op=filters&nom="+nom+"&marcas="+marcas+"&tallas="+tallas; 
    }
    }
        
    $.ajax({
        type:'GET',
        dataType:'JSON',
        url:url,
        
        error:function(){
            console.log('Error shop');
        },
    success:(function(data){
        console.log(data);
                    //HEADER 
            $('<header></header>').attr('class','head1').appendTo('#DivHead');
            $('<div></div>').attr('class','tituloL head2').appendTo('.head1');
            $('<h1>Nuestros Artículos</h1>').appendTo('.head2');
            $('<p>Descubre todos los artículos del mercado y escoge el diseño que mas te guste</p>').appendTo('.head2');
            $('<form></form>').attr('action','').attr('class','head3').appendTo('.head2');
            $('<input></input>').attr('type','text').attr('class','busqueda').attr('id','busqueda').attr('placeholder','Buscar').appendTo('.head3');
            $('<div></div>').attr('class','catego_List head4').attr('id','catego_List').appendTo('.head2');
            $('<div></div>').attr('class','contenedor-filter filter').appendTo('#DivHead');
            $('<form></form>').attr('class','formulario formu').attr('name','filtrosShop').attr('id','filtrosShop').appendTo('.filter');
            $('<div></div>').attr('class','divider').appendTo('.formu');
            $('<a>Aplicar</a>').attr('class','botones3').attr('id','aplicar').appendTo('.divider');
            $('<a>Todos</a>').attr('href','#').attr('class','activo').attr('id','remove').appendTo('.divider');
            $('<div></div>').attr('class','marca divider1').appendTo('.formu');
            $('<h2>Escoja una marca</h2>').appendTo('.divider1');
            $('<input></input>').attr('type','radio').attr('name','marca').attr('id','marca1').attr('value','Nike').attr('onclick','validaFilters()').appendTo('.divider1');
            $('<label>Nike</label>').attr('for','marca1').appendTo('.divider1');
            $('<br></br>').appendTo('.divider1');
            $('<input></input>').attr('type','radio').attr('name','marca').attr('id','marca2').attr('value','Adidas').attr('onclick','validaFilters()').appendTo('.divider1');
            $('<label>Adidas</label>').attr('for','marca2').appendTo('.divider1');
            $('<br></br>').appendTo('.divider1');
            $('<input></input>').attr('type','radio').attr('name','marca').attr('id','marca3').attr('value','Carhartt').attr('onclick','validaFilters()').appendTo('.divider1');
            $('<label>Carhartt</label>').attr('for','marca3').appendTo('.divider1');
            $('<br></br>').appendTo('.divider1');
            $('<input></input>').attr('type','radio').attr('name','marca').attr('id','marca4').attr('value','Bape').attr('onclick','validaFilters()').appendTo('.divider1');
            $('<label>Bape</label>').attr('for','marca4').appendTo('.divider1');
            $('<br></br>').appendTo('.divider1');
            $('<input></input>').attr('type','radio').attr('name','marca').attr('id','marca5').attr('value','Guess').attr('onclick','validaFilters()').appendTo('.divider1');
            $('<label>Guess</label>').attr('for','marca5').appendTo('.divider1');
            $('<br></br>').appendTo('.divider1');
            $('<input></input>').attr('type','radio').attr('name','marca').attr('id','marca6').attr('value','Polo Ralph Lauren').attr('onclick','validaFilters()').appendTo('.divider1');
            $('<label>Polo Ralph Lauren</label>').attr('for','marca6').appendTo('.divider1');
            $('<br></br>').appendTo('.divider1');
            $('<input></input>').attr('type','radio').attr('name','marca').attr('id','marca7').attr('value','Obey').attr('onclick','validaFilters()').appendTo('.divider1');
            $('<label>Obey</label>').attr('for','marca7').appendTo('.divider1');
            $('<br></br>').appendTo('.divider1');
            $('<input></input>').attr('type','radio').attr('name','marca').attr('id','marca8').attr('value','Supreme').attr('onclick','validaFilters()').appendTo('.divider1');
            $('<label>Supreme</label>').attr('for','marca8').appendTo('.divider1');
            $('<br></br>').appendTo('.divider1');
            $('<input></input>').attr('type','radio').attr('name','marca').attr('id','marca9').attr('value','The North Face').attr('onclick','validaFilters()').appendTo('.divider1');
            $('<label>The North Face</label>').attr('for','marca9').appendTo('.divider1');
            $('<div></div>').attr('class','talla divider2').appendTo('.formu');
            $('<h2>Escoja una talla</h2>').appendTo('.divider2');
            $('<input></input>').attr('type','radio').attr('name','talla').attr('id','talla1').attr('value','S').attr('onclick','validaFilters()').appendTo('.divider2');
            $('<label>S</label>').attr('for','talla1').appendTo('.divider2');
            $('<br></br>').appendTo('.divider2');
            $('<input></input>').attr('type','radio').attr('name','talla').attr('id','talla2').attr('value','M').attr('onclick','validaFilters()').appendTo('.divider2');
            $('<label>M</label>').attr('for','talla2').appendTo('.divider2');
            $('<br></br>').appendTo('.divider2');
            $('<input></input>').attr('type','radio').attr('name','talla').attr('id','talla3').attr('value','L').attr('onclick','validaFilters()').appendTo('.divider2');
            $('<label>L</label>').attr('for','talla3').appendTo('.divider2');
            $('<br></br>').appendTo('.divider2');
            $('<input></input>').attr('type','radio').attr('name','talla').attr('id','talla4').attr('value','XL').attr('onclick','validaFilters()').appendTo('.divider2');
            $('<label>XL</label>').attr('for','talla4').appendTo('.divider2');

            x=0;
        for (row in data){
            //CONTENIDO
            // console.log(data);
            $('<span></span>').attr('class','items sup'+x).appendTo('#Div3');
            $('<span></span>').attr('class','item-contenido suport'+x).appendTo('.sup'+x);
            $('<a></a>').attr('class','link'+x).appendTo('.suport'+x);
            $('<img></img>').attr('id',''+data[row].codigo+'').attr('class','details defin'+x).attr('src',''+data[row].img+'').attr('alt','').appendTo('.link'+x);
            $('<div>'+data[row].nombre+'</div>').attr('value',''+data[row].nombre+'').attr('class','preu'+x).appendTo('.sup'+x);
            $('<div>'+data[row].precio+'</div>').attr('class','precio'+x).appendTo('.sup'+x);
                x++;
        }
    })
    
    });
    sessionStorage.clear();
}
function validaFilters(){
    sessionStorage.clear();
    var marca="";
    var talla="";
        if (document.filtrosShop.marca1.checked){
            var filtrado=1;
             marca=document.filtrosShop.marca1.value;

        }else if (document.filtrosShop.marca2.checked){
            var filtrado=1;
             marca=document.filtrosShop.marca2.value;

        }else if (document.filtrosShop.marca3.checked){
            var filtrado=1;
             marca=document.filtrosShop.marca3.value;

        }else if (document.filtrosShop.marca4.checked){
            var filtrado=1;
             marca=document.filtrosShop.marca4.value;

        }else if (document.filtrosShop.marca5.checked){
            var filtrado=1;
             marca=document.filtrosShop.marca5.value;

        }else if (document.filtrosShop.marca6.checked){
            var filtrado=1;
             marca=document.filtrosShop.marca6.value;

        }else if (document.filtrosShop.marca7.checked){
            var filtrado=1;
             marca=document.filtrosShop.marca7.value;

        }else if (document.filtrosShop.marca8.checked){
            var filtrado=1;
             marca=document.filtrosShop.marca8.value;

        }else if (document.filtrosShop.marca9.checked){
            var filtrado=1;
             marca=document.filtrosShop.marca9.value;
        }else {
             marca="";
        }
        if (document.filtrosShop.talla1.checked){
            var filtrado=1;
             talla=document.filtrosShop.talla1.value;
        }else if (document.filtrosShop.talla2.checked){
            var filtrado=1;
             talla=document.filtrosShop.talla2.value;
        }else if (document.filtrosShop.talla3.checked){
            var filtrado=1;
             talla=document.filtrosShop.talla3.value;
        }else if (document.filtrosShop.talla4.checked){
            var filtrado=1;
             talla=document.filtrosShop.talla4.value;
        }else {
             talla="";
        }
        if(marca=="" && talla==""){
            filtrado=0;
        }

        $('body').on('click','#aplicar',function(){
            console.log("Hago clcik");
            sessionStorage.setItem('filtrado',filtrado);
            sessionStorage.setItem('marcas',marca);
            sessionStorage.setItem('tallas',talla);
            window.location.href="index.php?page=list_shop";
        });


}
function remove_filters(){
    $('body').on('click','#remove',function(){

    });
}
function details(){
$('body').on("click",".details",function(){
var codigo = this.getAttribute('id');
    $.ajax({
        type: "GET",
        dataType: "JSON",
        url: "/Ejercicios_PHP/modulo/shop/controlador/controller_shop.php?op=details&codigo="+codigo,
        error:function(){
            console.log("error details");
        },
        success:(function(data){
            $.ajax({
                type: "GET",
                dataType: "JSON",
                url: "/Ejercicios_PHP/modulo/shop/controlador/controller_shop.php?op=views&codigo="+codigo,
                error:function(){
                    console.log("error visitas");
                },
                success:(function(){
                    console.log("views updated");
                })
            });
            console.log(data);
            $('#Div3').empty();
            $('#DivHead').empty();
            // for (row in data){
                //Primera fila
                $('<div></div>').attr('class','fila cabecera1').appendTo('#Div3');

                    //Primera Columna Fila1
                    $('<div></div>').attr('class','columna precontenido1').appendTo('.cabecera1');
                    $('<img></img>').attr('src',''+data[0].img1+'').appendTo('.precontenido1');
                    //END Primera Columna Fila1

                     //Segunda Columna Fila1
                    $('<div></div>').attr('class','columna precontenido2').appendTo('.cabecera1');
                    $('<img></img>').attr('src',''+data[0].img2+'').appendTo('.precontenido2');
                    //END Segunda Columna Fila1
                    
                    //Tercera Columna Fila1
                    $('<div></div>').attr('class','columna2 precontenido3').appendTo('.cabecera1');

                    //Contenido Tercera Columna
                    $('<div></div>').attr('class','intro1').appendTo('.precontenido3');

                        //Informacion Intro1
                        $('<div></div>').attr('class','contenido1').appendTo('.intro1');
                            //Contenido
                            $('<h1>'+data[0].marca+'</h1>').appendTo('.contenido1');
                            $('<div></div>').attr('class','info contenidoE1').appendTo('.contenido1');
                                //ContenidoE
                                // $('<p>Nombre</p>').appendTo('.contenidoE1');
                                $('<p>'+data[0].descripcion+'</p>').appendTo('.contenidoE1');
                                $('<p>'+data[0].precio+'</p>').appendTo('.contenidoE1');
                                
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
                        $('<span>'+data[0].talla1+'</span>').attr('class','Button_green2').attr('value','S').appendTo('.intro3');
                        $('<span>'+data[0].talla2+'</span>').attr('class','Button_green2').attr('value','M').appendTo('.intro3');
                        $('<span>'+data[0].talla3+'</span>').attr('class','Button_green2').attr('value','L').appendTo('.intro3');
                        $('<span>'+data[0].talla4+'</span>').attr('class','Button_green2').attr('value','XL').appendTo('.intro3');
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
                        $('<img></img>').attr('src',''+data[0].img3+'').appendTo('.precontenido9');
                    //END Primera Columna Fila2

                     //Segunda Columna Fila2
                    $('<div></div>').attr('class','columna precontenido4').appendTo('.cabecera2');
                        $('<img></img>').attr('src',''+data[0].img4+'').appendTo('.precontenido4'); 
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
                                    $('<a>'+data[0].descriptotal+'</a>').attr('name','informacion').appendTo('.linques');
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
            // }
        })
    });
});
}
// function buscar(pesfesto,consulta){
//     console.log(pesfesto,consulta);
//     $.ajax({
//         type:'GET',
//         dataType: 'JSON',
//         url:"/Ejercicios_PHP/modulo/shop/controlador/controller_shop.php?op=search&consulta="+consulta,
//         // data:{consulta: consulta},
//         success:(function(data){
//         })
//     });
// }
$(document).on('keyup','#busqueda',function(){
    var valor=$(this).val();
    if(valor!=""){
        console.log(valor);
        var correcto=1;
        // buscar(correcto,valor);
        cat_shop(correcto,valor);
    }else{
        console.log("No escribi");
    }
});
function load_divs(){
    $('<div></div>').attr('id','DivHead').appendTo('#headShop');
    $('<div></div>').attr('id','Div3').appendTo('#listS');
    cat_shop();
    details();
    

}
$(document).ready(function(){
load_divs();
efectos_shop();
// buscar();

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