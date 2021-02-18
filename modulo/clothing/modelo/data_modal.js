$(document).ready(function(){
    $('#table_clothes').DataTable();

    $('body').on("click",".clothes",function (){
        var id =this.getAttribute('id');
 
    $.ajax({
        type: "GET",
        dataType: "JSON",
        url: "modulo/clothing/controlador/controller_clothes.php?op=read_modal&modal="+id,
        error:function(){
            console.log("errorrr")
        },
        success:function(data){
        $('#clothes_modal').dialog({
            autoOpen: false,
            modal: true,
        });
        $('.clothes',function(){

                    $('#clothes_modal').dialog('open');
                    $("#clothes_modal").dialog("option", "width", 350);
                    $("#clothes_modal").dialog("option", "height", 350);
                    $('<div></div>').attr('id','Div1').appendTo('#clothes_modal');
                    $("#Div1").html(
                        '<br><span>Codigo:   <span id="codigo">'+data.codigo+'</span></span></br>'+
                        '<br><span>Nombre:   <span id="nombre">'+data.nombre+'</span></span></br>'+
                        '<br><span>Marca :     <span id="marca">'+data.marca+'</span></span></br>'+
                        '<br><span>Color:     <span id="color">'+data.color+'</span></span></br>'+
                        '<br><span>Talla:     <span id="talla">'+data.talla+'</span></span></br>'+
                        '<br><span>Fecha:    <span id="fechaEnv">'+data.fechaEnv+'</span></span></br>'
                        )

                });
        }
    })

    });
});
