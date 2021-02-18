$(document).ready(function(){
    $('#table_sneakers').DataTable();

    $('body').on("click",".sneakers",function (){
        var id =this.getAttribute('id');
 
    $.ajax({
        type: "GET",
        dataType: "JSON",
        url: "modulo/sneakers/controlador/controller_sneakers.php?op=read_modal&modal="+id,
        error:function(){
            console.log("errorrr")
        },
        success:function(data){
        $('#sneakers_modal').dialog({
            autoOpen: false,
            modal: true,
        });
        $('.sneakers',function(){

                    $('#sneakers_modal').dialog('open');
                    $("#sneakers_modal").dialog("option", "width", 350);
                    $("#sneakers_modal").dialog("option", "height", 350);
                    $('<div></div>').attr('id','Div1').appendTo('#sneakers_modal');
                    $("#Div1").html(
                        '<br><span>Codigo:   <span id="codS">'+data.codS+'</span></span></br>'+
                        '<br><span>Marca:   <span id="marca">'+data.marca+'</span></span></br>'+
                        '<br><span>Modelo :     <span id="modelo">'+data.modelo+'</span></span></br>'+
                        '<br><span>Talla:     <span id="talla">'+data.talla+'</span></span></br>'+
                        '<br><span>Fecha:    <span id="fechaE">'+data.fechaE+'</span></span></br>'
                        )

                });
        }
    })

    });
});
