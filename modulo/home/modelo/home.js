function cargar_cat_slider(){
  $.ajax({
    type:"GET",
    dataType: "JSON",
    url:("/Ejercicios_PHP/modulo/home/controlador/controller_home.php?pr=Slider"),
    error:function(){
      console.log("errorrr")
  },
    success:(function(data){
      // console.log(data);
    
            $('<div></div>').attr('id','Div2').appendTo('.cat_slider');
            $("#Div2").html(
                  '<div id="carrusel">'+
                    '<a href="#" class="left-arrow"><img src="vistas/img/left-arrow.png" /></a>'+
                    '<a href="#" class="right-arrow"><img src="vistas/img/right-arrow.png" /></a>'+
                    '<div class="carrusel">'+
                        '<div class="product" id="product_0">'+
                            '<img src="'+data[0]+'" width="190" height="300" />'+
                        '</div>'+
                        '<div class="product" id="product_1">'+
                            '<img src="'+data[1]+'" width="190" height="300" />'+
                        '</div>'+
                        '<div class="product" id="product_2">'+
                            '<img src="'+data[2]+'" width="190" height="300" />'+
                        '</div>'+
                        '<div class="product" id="product_3">'+
                            '<img src="'+data[3]+'" width="190" height="300" />'+
                        '</div>'+
                      //   '<div class="product" id="product_4">'+
                      //       '<img src="'+data[4]+'" width="190" height="300" />'+
                      //   '</div>'+
                      //   '<div class="product" id="product_5">'+
                      //     '<img src="'+data[5]+'" width="190" height="300" />'+
                      // '</div>'+
                      //   '<div class="product" id="product_6">'+
                      //     '<img src="'+data[6]+'" width="190" height="300" />'+
                      // '</div>'+
                      //   '<div class="product" id="product_7">'+
                      //     '<img src="'+data[7]+'" width="190" height="300" />'+
                      //   '</div>'+
                      //   '<div class="product" id="product_8">'+
                      //     '<img src="'+data[8]+'" width="190" height="300" />'+
                      // '</div>'+
                      //   '<div class="product" id="product_9">'+
                      //     '<img src="'+data[9]+'" width="190" height="300" />'+
                      //   '</div>'+
                    '</div>'+
                  '</div>'
            )
      })
    })
}

function cargar_cat(correcto2,valor2){
  if (correcto2==1){
    var url="/Ejercicios_PHP/modulo/home/controlador/controller_home.php?pr=BuscHome&valor2="+valor2;
  }else if(correcto2!=1){
    var url="/Ejercicios_PHP/modulo/home/controlador/controller_home.php?pr=Categ";
  }
  $.ajax({
    type:"GET",
    dataType: "JSON",
    url:url,
    error:function(){
      console.log("errorrr")
  },
    success:(function(data){
      // console.log(data);
      $('#Div1').empty();
       x=0;
      for(row in data){
      $('<div></div>').attr('class','col-lg-4 col-md-6 filter-clothes home1'+x).appendTo('#Div1');
      $('<div></div>').attr('class','portfolio-item home2'+x).appendTo('.home1'+x);
      $('<img></img>').attr('src',''+data[row].img+'').appendTo('.home2'+x);
      $('<div></div>').attr('class','portfolio-info home3'+x).appendTo('.home2'+x);
      $('<h3></h3>').attr('class','home4'+x).appendTo('.home3'+x);
      $('<a>'+data[row].nombre+'</a>').attr('href','').attr('class','venobox redicat').attr('id',''+data[row].nombre+'').attr('title',''+data[row].nombre+'').attr('data-gall','portfolioGallery').appendTo('.home4'+x);
      x++;
    }

      })
    });

}
function buscar2(){
  $(document).on('keyup','#busqueda2',function(){
      var valor2=$(this).val();
      console.log(valor2);
      if(valor2!=""){
          console.log(valor2);
          var correcto2=1;
          // buscar(correcto,valor);
          cargar_cat(correcto2,valor2);
      }else{
        correcto2=0;
        cargar_cat(correcto2);
          console.log("No escribi");
      }
  });
}
  function rediShop(){
  $(document).on('click','.redicat',function(){
  var name=this.getAttribute('id');
  localStorage.setItem('nombre',name);
  window.location.href="index.php?page=list_shop";
  return false;
  });
  }
  function cargar_divs(){
  $('<div></div>').attr('id','Div1').attr('class','row portfolio-container').attr('data-aos','fade-up').attr('data-aos-easing','ease-in-out').attr('data-aos-duration','500').appendTo('#categories');
    cargar_cat_slider();
    cargar_cat();
  }
  $(document).ready(function(){
  cargar_divs();
  rediShop();
  buscar2();
  });
