function show_cart(){
    $(document).on('click','.cesta',function(){
        if(localStorage.getItem('token')){
            var usuario = localStorage.getItem('nomUser');
            $.ajax({
                type: 'GET',
                dataType:'JSON',
                url:'modulo/carrito/controlador/controller_cart.php?op=showCart&user='+usuario,
                success:(function(data){
                    console.log(data);
                })
            });
        }
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
    alert(codArticulo);
    $.ajax({
        type:'GET',
        dataType:'JSON',
        url:'modulo/carrito/controlador/controller_cart.php?op=insertItems&usuario='+usuario+'&codArticulo='+codArticulo,
        success:(function(data){
            console.log(data);
        })
    });
}
$(document).ready(function(){
show_cart();
click_items_cart();
// insert_items();
});