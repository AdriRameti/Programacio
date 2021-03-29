function show_cart(){
    $(document).on('click','.cesta',function(){
        if(localStorage.getItem('token')){
            var usuario = localStorage.getItem('nomUser');
            $.ajax({
                type: 'GET',
                dataType:'JSON',
                url:'modulo/carrito/controlador/controller_cart.php?op=showCart&user='+usuario,
                success:(function(data){

                })
            });
        }
    });

}

$(document).ready(function(){
show_cart();
});