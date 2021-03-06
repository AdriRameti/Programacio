// function validate_login(){

// }
// function validate_register(){

// }

function login_view(){
    $.ajax({
        url:"/Ejercicios_PHP/modulo/login/controlador/controller_login.php?op=showLogin",
        type:'GET',
        dataType:'JSON',
        success: function (data){
                    $('<form></form>').attr('class','formulario_register log1').appendTo('#login_views1');
                    $('<h1>Registrate</h1>').appendTo('.log1');
                    $('<div></div>').attr('class','contenedor_register log2').appendTo('.log1');
                    $('<div></div>').attr('class','input_contenedor log5').appendTo('.log2');
                    $('<i></i>').attr('class','fas fa-user icono').appendTo('.log5');
                    $('<input></input>').attr('type','text').attr('placeholder','Nombre Completo').attr('class','caja_texto').appendTo('.log5');
                    $('<div></div>').attr('class','input_contenedor log3').appendTo('.log2');
                    $('<i></i>').attr('class','fas fa-envelope icono').appendTo('.log3');
                    $('<input></input>').attr('type','text').attr('placeholder','Correo Electrónico').attr('class','caja_texto').appendTo('.log3');
                    $('<div></div>').attr('class','input_contenedor log4').appendTo('.log2');
                    $('<i></i>').attr('class','fas fa-key icono').appendTo('.log4');
                    $('<input></input>').attr('type','password').attr('placeholder','Contraseña').attr('class','caja_texto').appendTo('.log4');
                    $('<input></input>').attr('type','button').attr('value','Registar').attr('class','boton_register').appendTo('.log2');
                    $('<p>Al registrarte, aceptas nuestas Condiciones de uso y Políticas de privacidad</p>').appendTo('.log2');
                    $('<p>¿Ya tienes una cuenta?</p>').attr('class','redi').appendTo('.log2');
                    $('<a>Iniciar Sesion</a>').attr('class','link_regist logeo').appendTo('.redi');
                    logins();
                    registers(); 
        }
        
    })
    
}
function logins(){
    $(document).on('click','.logeo',function(){;
        $('#login_views1').empty(); 
        $('<form></form>').attr('class','formulario_register log1').appendTo('#login_views1');
        $('<h1>Login</h1>').appendTo('.log1');
        $('<div></div>').attr('class','contenedor_register log2').appendTo('.log1');
        $('<div></div>').attr('class','input_contenedor log3').appendTo('.log2');
        $('<i></i>').attr('class','fas fa-envelope icono').appendTo('.log3');
        $('<input></input>').attr('type','text').attr('placeholder','Correo Electrónico').attr('class','caja_texto').appendTo('.log3');
        $('<div></div>').attr('class','input_contenedor log4').appendTo('.log2');
        $('<i></i>').attr('class','fas fa-key icono').appendTo('.log4');
        $('<input></input>').attr('type','password').attr('placeholder','Contraseña').attr('class','caja_texto').appendTo('.log4');
        $('<input></input>').attr('type','button').attr('value','Login').attr('class','boton_register').appendTo('.log2');
        $('<p>Al registrarte, aceptas nuestas Condiciones de uso y Políticas de privacidad</p>').appendTo('.log2');
        $('<p>¿No tienes una cuenta?</p>').attr('class','redi').appendTo('.log2');
        $('<a>Registrate</a>').attr('class','link_regist registro').appendTo('.redi');

    });
}
function registers(){
    $(document).on('click','.registro',function(){
        $('#login_views1').empty();
        $('<form></form>').attr('class','formulario_register log1').appendTo('#login_views1');
        $('<h1>Registrate</h1>').appendTo('.log1');
        $('<div></div>').attr('class','contenedor_register log2').appendTo('.log1');
        $('<div></div>').attr('class','input_contenedor log5').appendTo('.log2');
        $('<i></i>').attr('class','fas fa-user icono').appendTo('.log5');
        $('<input></input>').attr('type','text').attr('placeholder','Nombre Completo').attr('class','caja_texto').appendTo('.log5');
        $('<div></div>').attr('class','input_contenedor log3').appendTo('.log2');
        $('<i></i>').attr('class','fas fa-envelope icono').appendTo('.log3');
        $('<input></input>').attr('type','text').attr('placeholder','Correo Electrónico').attr('class','caja_texto').appendTo('.log3');
        $('<div></div>').attr('class','input_contenedor log4').appendTo('.log2');
        $('<i></i>').attr('class','fas fa-key icono').appendTo('.log4');
        $('<input></input>').attr('type','password').attr('placeholder','Contraseña').attr('class','caja_texto').appendTo('.log4');
        $('<input></input>').attr('type','button').attr('value','Registrar').attr('class','boton_register').appendTo('.log2');
        $('<p>Al registrarte, aceptas nuestas Condiciones de uso y Políticas de privacidad</p>').appendTo('.log2');
        $('<p>¿Ya tienes una cuenta?</p>').attr('class','redi').appendTo('.log2');
        $('<a>Iniciar Sesion</a>').attr('class','link_regist logeo').appendTo('.redi');

    });
}
function load_div(){
    
    $('<div></div>').attr('id','login_views1').appendTo('#login_views');
    login_view();
  
}
$(document).ready(function(){
load_div();
});