function cargar_menus(){
var token1 = localStorage.getItem('token');
if(token1 != null){
    var token2 =token1.split(" ");
    var token = token2[0].replace(/['"]+/g, '');

    $.ajax({
        type:'GET',
        dataType:'JSON',
        url:'modulo/login/controlador/controller_login.php?op=menu&token='+token,
        success:(function(data){
            switch (data[2]){
               case 'Cliente':
                clienteMenu(data[0],data[1]);
                   break;
                case 'Admin':
                    adminMenu(data[0],data[1]);
                    break;
                default:
                    menu_global();
                    break;
            }
            console.log(data);
            log_out();
        })
    });
}else if(token1==null){
    menu_global();
}
}
function log_out(){
    $(document).on('click','.user-out',function(){
        console.log('hago_click');
        localStorage.removeItem('token');
        window.location.href="index.php?page=homepage";
    })
}
function adminMenu(nombre,avatar){
    $('<li></li>').attr('class','homeMen').appendTo('#opc_menus');
    $('<div></div>').attr('class','home homeMen1').appendTo('.homeMen');
    $('<a>Homepage</a>').attr('href','index.php?page=homepage').attr('data-tr','Homepage').appendTo('.homeMen');


    $('<li></li>').attr('class','men').appendTo('#opc_menus');
    $('<a>Clothing</a>').attr('href','index.php?page=opciones').attr('data-tr','Clothing').appendTo('.men');
   
    $('<li></li>').attr('class','men1').appendTo('#opc_menus');
    $('<a>Tienda</a>').attr('href','index.php?page=list_shop').appendTo('.men1');


    $('<li></li>').attr('class','about').appendTo('#opc_menus');
    $('<a>About Us</a>').attr('href','index.php?page=aboutus').attr('data-tr','About Us').appendTo('.about');

    $('<li></li>').attr('class','contact').appendTo('#opc_menus');
    $('<a>Contact Us</a>').attr('href','index.php?page=contactus').attr('data-tr','Contact Us').appendTo('.contact');

    $('<li></li>').attr('class','drop-down idiom').appendTo('#opc_menus');
    $('<a>Languages</a>').attr('href','').attr('data-tr','Languages').appendTo('.idiom');
    $('<ul></ul>').attr('class','idiom2').appendTo('.idiom');
    $('<li></li>').attr('class','idiom3').appendTo('.idiom2');
    $('<a>Spanish</a>').attr('id','opc_es').attr('data-tr','Spanish').appendTo('.idiom3');
    $('<li></li>').attr('class','idiom4').appendTo('.idiom2');
    $('<a>English</a>').attr('id','opc_en').attr('data-tr','English').appendTo('.idiom4');
    $('<li></li>').attr('class','idiom5').appendTo('.idiom2');
    $('<a>Valencian</a>').attr('id','opc_vlc').attr('data-tr','Valencian').appendTo('.idiom5');

    $('<li></li>').attr('class','drop-down iconoLog').appendTo('#opc_menus');
    $('<a></a>').attr('class','iconoLog1').appendTo('.iconoLog');
    $('<i></i>').attr('class','fas fa-user-plus icono_login').appendTo('.iconoLog1');
    $('<ul></ul>').attr('class','usuario iconoLog2').appendTo('.iconoLog');

    $('<li></li>').attr('class','iconoLog3').appendTo('.iconoLog2');
    $('<a>'+nombre+' </a>').attr('class','nom1 user').appendTo('.iconoLog3');
    $('<span></span>').attr('class','nom2').appendTo('.nom1');
    $('<img></img>').attr('class','avatar').attr('src',''+avatar+'').appendTo('.nom2'); 

    $('<li></li>').attr('class','logOut').appendTo('.iconoLog2');
    $('<a>Log Out </a>').attr('class','logOut1 user-out').appendTo('.logOut');
    $('<span></span>').attr('class','logOut2').appendTo('.logOut1');
    $('<i></i>').attr('class','fas fa-user-times').appendTo('.logOut2');

    $('<li></li>').attr('class','drop-down iconoCart').appendTo('#opc_menus');
    $('<a></a>').attr('class','iconoCart1').appendTo('.iconoCart');
    $('<i></i>').attr('class','fas fa-shopping-cart icono_login').appendTo('.iconoCart1');

}
function clienteMenu(nombre,avatar){
    $('<li></li>').attr('class','homeMen').appendTo('#opc_menus');
    $('<div></div>').attr('class','home homeMen1').appendTo('.homeMen');
    $('<a>Homepage</a>').attr('href','index.php?page=homepage').attr('data-tr','Homepage').appendTo('.homeMen');

    $('<li></li>').attr('class','men1').appendTo('#opc_menus');
    $('<a>Tienda</a>').attr('href','index.php?page=list_shop').appendTo('.men1');

    $('<li></li>').attr('class','about').appendTo('#opc_menus');
    $('<a>About Us</a>').attr('href','index.php?page=aboutus').attr('data-tr','About Us').appendTo('.about');

    $('<li></li>').attr('class','contact').appendTo('#opc_menus');
    $('<a>Contact Us</a>').attr('href','index.php?page=contactus').attr('data-tr','Contact Us').appendTo('.contact');

    $('<li></li>').attr('class','drop-down idiom').appendTo('#opc_menus');
    $('<a>Languages Us</a>').attr('href','').attr('data-tr','Languages').appendTo('.idiom');
    $('<ul></ul>').attr('class','idiom2').appendTo('.idiom');
    $('<li></li>').attr('class','idiom3').appendTo('.idiom2');
    $('<a>Spanish</a>').attr('id','opc_es').attr('data-tr','Spanish').appendTo('.idiom3');
    $('<li></li>').attr('class','idiom4').appendTo('.idiom2');
    $('<a>English</a>').attr('id','opc_en').attr('data-tr','English').appendTo('.idiom4');
    $('<li></li>').attr('class','idiom5').appendTo('.idiom2');
    $('<a>Valencian</a>').attr('id','opc_vlc').attr('data-tr','Valencian').appendTo('.idiom5');

    $('<li></li>').attr('class','drop-down iconoLog').appendTo('#opc_menus');
    $('<a></a>').attr('class','iconoLog1').appendTo('.iconoLog');
    $('<i></i>').attr('class','fas fa-user icono_login').appendTo('.iconoLog1');
    $('<ul></ul>').attr('class','usuario iconoLog2').appendTo('.iconoLog');
    
    $('<li></li>').attr('class','iconoLog3').appendTo('.iconoLog2');
    $('<a>'+nombre+' </a>').attr('class','nom1 user').appendTo('.iconoLog3');
    $('<span></span>').attr('class','nom2').appendTo('.nom1');
    $('<img></img>').attr('class','avatar').attr('src',''+avatar+'').appendTo('.nom2'); 

    $('<li></li>').attr('class','logOut').appendTo('.iconoLog2');
    $('<a>Log Out </a>').attr('class','logOut1 user-out').appendTo('.logOut');
    $('<span></span>').attr('class','logOut2').appendTo('.logOut1');
    $('<i></i>').attr('class','fas fa-user-times').appendTo('.logOut2');

    $('<li></li>').attr('class','drop-down iconoCart').appendTo('#opc_menus');
    $('<a></a>').attr('class','iconoCart1').appendTo('.iconoCart');
    $('<i></i>').attr('class','fas fa-shopping-cart icono_login').appendTo('.iconoCart1');
}
function menu_global(){
    $('<li></li>').attr('class','homeMen').appendTo('#opc_menus');
    $('<div></div>').attr('class','home homeMen1').appendTo('.homeMen');
    $('<a>Homepage</a>').attr('href','index.php?page=homepage').attr('data-tr','Homepage').appendTo('.homeMen');
    /////////////////////////////////////////////
    $('<li></li>').attr('class','men1').appendTo('#opc_menus');
    $('<a>Tienda</a>').attr('href','index.php?page=list_shop').appendTo('.men1');
    ////////////////////////////////////////////
    $('<li></li>').attr('class','about').appendTo('#opc_menus');
    $('<a>About Us</a>').attr('href','index.php?page=aboutus').attr('data-tr','About Us').appendTo('.about');

    $('<li></li>').attr('class','contact').appendTo('#opc_menus');
    $('<a>Contact Us</a>').attr('href','index.php?page=contactus').attr('data-tr','Contact Us').appendTo('.contact');

    $('<li></li>').attr('class','drop-down idiom').appendTo('#opc_menus');
    $('<a>Languages Us</a>').attr('href','').attr('data-tr','Languages').appendTo('.idiom');
    $('<ul></ul>').attr('class','idiom2').appendTo('.idiom');
    $('<li></li>').attr('class','idiom3').appendTo('.idiom2');
    $('<a>Spanish</a>').attr('id','opc_es').attr('data-tr','Spanish').appendTo('.idiom3');
    $('<li></li>').attr('class','idiom4').appendTo('.idiom2');
    $('<a>English</a>').attr('id','opc_en').attr('data-tr','English').appendTo('.idiom4');
    $('<li></li>').attr('class','idiom5').appendTo('.idiom2');
    $('<a>Valencian</a>').attr('id','opc_vlc').attr('data-tr','Valencian').appendTo('.idiom5');

    $('<li></li>').attr('class','drop-down iconoLog').appendTo('#opc_menus');
    $('<a></a>').attr('class','iconoLog1').appendTo('.iconoLog');
    $('<i></i>').attr('class','fas fa-user-plus icono_login').appendTo('.iconoLog1');

    $('<li></li>').attr('class','drop-down iconoCart').appendTo('#opc_menus');
    $('<a></a>').attr('class','iconoCart1').appendTo('.iconoCart');
    $('<i></i>').attr('class','fas fa-shopping-cart icono_login').appendTo('.iconoCart1');
}
function load_funciones(){
    cargar_menus();
}

$(document).ready(function(){
load_funciones();
});