function cargar_menus(){
var token1 = localStorage.getItem('token');
var token2 =token1.split(" ");
var token = token2[1].replace(/['"]+/g, '');

if (token != null || token!=0){
    $.ajax({
        type:'GET',
        dataType:'JSON',
        url:'modulo/login/controlador/controller_login.php?op=menu&token='+token,
        success:(function(data){
            console.log(data[2]);
            if (data[2] == 'Cliente'){
                // console.log('Entrado');
                clienteMenu();
            }else if (data[2] == 'Admin'){
                adminMenu();
            }
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