function cargar_menus(){
var token1 = localStorage.getItem('token');
var tojen =token1.split(" ");
var token = tojen[1].replace(/['"]+/g, '');
console.log(token);

if (token != null || token!=0){
    $.ajax({
        type:'GET',
        dataType:'JSON',
        url:'modulo/login/controlador/controller_login.php?op=menu&token='+token,
        success:(function(data){
            console.log(data);
        })
    });
}
}
function adminMenu(){
    $('<li></li>').attr('class','men').appendTo('#opc_menus');
    $('<a>Clothing</a>').attr('href','index.php?page=opciones').attr('data-tr','Clothing').appendTo('.men');
    $('<li></li>').attr('class','men1').appendTo('#opc_menus');
    $('<a>Tienda</a>').attr('href','index.php?page=list_shop').appendTo('.men1');
}
function clienteMenu(){
    $('<li></li>').attr('class','men1').appendTo('#opc_menus');
    $('<a>Tienda</a>').attr('href','index.php?page=list_shop').appendTo('.men1');
}

function load_funciones(){
    cargar_menus();
}

$(document).ready(function(){
load_funciones();
});