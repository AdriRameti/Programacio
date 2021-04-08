function show_cart(){
        if(localStorage.getItem('token')){
            var usuario = localStorage.getItem('nomUser');
            $.ajax({
                type: 'GET',
                dataType:'JSON',
                url:'modulo/carrito/controlador/controller_cart.php?op=showCart&user='+usuario,
                success:(function(data){
                    console.log(data);
                    var total=0;
                    $('<div></div>').attr('class','table_tittle').attr('id','titul').appendTo('#contenedor');
                    $('<a>Pedido</a>').appendTo('#titul');
                    
                    $('<div></div>').attr('class','table_header').attr('id','header0').appendTo('#contenedor');
                    $('<a>Imagen</a>').appendTo('#header0');
                    $('<div></div>').attr('class','table_header').attr('id','header1').appendTo('#contenedor');
                    $('<a>Precio</a>').appendTo('#header1');
                    $('<div></div>').attr('class','table_header').attr('id','header2').appendTo('#contenedor');
                    $('<a>Cantidad</a>').appendTo('#header2');
                    $('<div></div>').attr('class','table_header').attr('id','header3').appendTo('#contenedor');
                    $('<a>Subtotal</a>').appendTo('#header3');
                    x=0;
                    for(row in data){
                        var codigoProd = data[row].codigo;
                        console.log(codigoProd);
                    $('<div></div>').attr('class','table_item').attr('id','item'+x).appendTo('#contenedor');
                    $('<img></img>').attr('src',''+data[row].img+'').attr('class','imag').appendTo('#item'+x);
                    $('<div></div>').attr('class','table_item').attr('id','item1'+x).appendTo('#contenedor');
                    $('<a>'+data[row].precio+'€</a>').appendTo('#item1'+x);
                    $('<div></div>').attr('class','table_item').attr('id','item2'+x).appendTo('#contenedor');
                    $('<i></i>').attr('class','cantity2 fas fa-minus').attr('id',''+codigoProd+'').appendTo('#item2'+x);
                    $('<a>'+data[row].cantidad+'</a>').appendTo('#item2'+x);
                    $('<i></i>').attr('class','cantity fas fa-plus').attr('id',''+codigoProd+'').appendTo('#item2'+x);
                    $('<div></div>').attr('class','table_item').attr('id','item3'+x).appendTo('#contenedor');
                    $('<a>'+data[row].subtotal+'€</a>').appendTo('#item3'+x);
                    x++;
                    var subtotal =Number.parseInt(data[row].subtotal);
                    total = total + subtotal;
                    }

                    $('<div></div>').attr('class','table_tot').attr('id','total').appendTo('#contenedor');
                    $('<a>Total</a>').appendTo('#total');

                    $('<div></div>').attr('class','table_preu').attr('id','preu').appendTo('#contenedor');
                    $('<a>'+total+'€</a>').appendTo('#preu');
                })
            });
        }

}
function rediCart(){
    $(document).on('click','.cesta',function(){
        window.location.href='index.php?page=list_cart';
        return false;
    });
}
function update_cantity(){
    $(document).on('click','.cantity' ,function(){
        var codProd = this.getAttribute('id');
        $.ajax({
            type: 'GET',
            dataType: 'JSON',
            url:'modulo/carrito/controlador/controller_cart.php?op=upadate_cantity&codProd='+codProd,
            success:(function(data){
                console.log(data);
            })
        });
    });
    $(document).on('click','.cantity2' ,function(){
        var codProd = this.getAttribute('id');
        $.ajax({
            type: 'GET',
            dataType: 'JSON',
            url:'modulo/carrito/controlador/controller_cart.php?op=less_cantity&codProd='+codProd,
            success:(function(data){
                console.log(data);
                if (data==0){
                    $.ajax({
                        type: 'GET',
                        dataType: 'JSON',
                        url:'modulo/carrito/controlador/controller_cart.php?op=sup_item&codProd='+codProd,
                        success:(function(data){
                            console.log(data);
                        })
                    });
                }
            })
        });
    });
}

function click_items_cart(){
    $(document).on('click','.cart',function(){
        alert('hago click');
        if (localStorage.getItem('token')===null){
            window.location.href="index.php?page=login"
        }else{
            var usuario = localStorage.getItem('nomUser');
            var idHeart = this.getAttribute('id'); 
            insert_items(usuario,idHeart);
        }
    });
}
function insert_items(usuario,codArticulo){
    $.ajax({
        type:'GET',
        dataType:'JSON',
        url:'modulo/carrito/controlador/controller_cart.php?op=insertItems&usuario='+usuario+'&codArticulo='+codArticulo,
        success:(function(data){
            console.log(data);
        })
    });
}
function load_div(){
    $('<div></div>').attr('class','container-table').attr('id','contenedor').appendTo('#table_cart');
    show_cart();
    update_cantity();
}
$(document).ready(function(){
load_div();
click_items_cart();
rediCart();
});