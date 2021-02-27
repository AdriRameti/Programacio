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
                        '<div class="product" id="product_4">'+
                            '<img src="'+data[4]+'" width="190" height="300" />'+
                        '</div>'+
                        '<div class="product" id="product_5">'+
                          '<img src="'+data[5]+'" width="190" height="300" />'+
                      '</div>'+
                        '<div class="product" id="product_6">'+
                          '<img src="'+data[6]+'" width="190" height="300" />'+
                      '</div>'+
                        '<div class="product" id="product_7">'+
                          '<img src="'+data[7]+'" width="190" height="300" />'+
                        '</div>'+
                        '<div class="product" id="product_8">'+
                          '<img src="'+data[8]+'" width="190" height="300" />'+
                      '</div>'+
                        '<div class="product" id="product_9">'+
                          '<img src="'+data[9]+'" width="190" height="300" />'+
                        '</div>'+
                    '</div>'+
                  '</div>'
            )
      })
    })
}

function cargar_cat(){
  $.ajax({
    type:"GET",
    dataType: "JSON",
    url:("/Ejercicios_PHP/modulo/home/controlador/controller_home.php?pr=Categ"),
    error:function(){
      console.log("errorrr")
  },
    success:(function(data){
      // console.log(data);
       x=0;
      // var y=0;
      for(row in data){
        console.log(data);
      $('<div></div>').attr('class','col-lg-4 col-md-6 filter-clothes home1'+x).appendTo('#Div1');
      $('<div></div>').attr('class','portfolio-item home2'+x).appendTo('.home1'+x);
      $('<img></img>').attr('src',''+data[row].img+'').appendTo('.home2'+x);
      $('<div></div>').attr('class','portfolio-info home3'+x).appendTo('.home2'+x);
      $('<h3></h3>').attr('class','home4'+x).appendTo('.home3'+x);
      $('<a>'+data[row].nombre+'</a>').attr('href','').attr('class','venobox redicat').attr('id',''+data[row].nombre+'').attr('title',''+data[row].nombre+'').attr('data-gall','portfolioGallery').appendTo('.home4'+x);
      // $('<div></div>').attr('class',' home5'+x).appendTo('.home3'+x);
      // $('<a>'+data[row].nombre+'</a>').attr('href','').attr('class','home6'+x).attr('title',''+data[row].nombre+'').appendTo('.home5'+x);
      // $('<i></i>').attr('class',' bx bx-link').appendTo('.home6'+x);
      x++;
    }
            // $('<div></div>').attr('id','Div1').appendTo('#categories');
            // $("#Div1").html(
          
                // '<div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">'+

                  // '<div class="col-lg-4 col-md-6 filter-clothes ">'+
                  //   '<div class="portfolio-item">'+
                  //     '<img src="'+data[0].img+'" class="img-fluid" alt="">'+
                  //     '<div class="portfolio-info">'+
                  //       '<h3><a href="" data-gall="portfolioGallery" class="venobox redicat" id="'+data[0].nombre+'" title="'+data[0].nombre+'">'+data[0].nombre+'</a></h3>'+
                  //       '<div>'+
                  //         '<a href="index.php?page=controller_shop&op=Tshirt" title="'+data[0].nombre+'"><i class="bx bx-link"></i></a>'+
                  //       '</div>'+
                  //     '</div>'+
                  //   '</div>'+
                  // '</div>'+
          
                  // '<div class="col-lg-4 col-md-6 filter-sneakers ">'+
                  //   '<div class="portfolio-item">'+
                  //     '<img src="'+data[1].img+'" class="img-fluid" alt="">'+
                  //     '<div class="portfolio-info">'+
                  //       '<h3><a href="" data-gall="portfolioGallery" class="venobox redicat" id="'+data[1].nombre+'" title="'+data[1].nombre+'">'+data[1].nombre+'</a></h3>'+
                  //       '<div>'+
                  //         '<a href="" title="'+data[1].nombre+'"><i class="bx bx-link"></i></a>'+
                  //       '</div>'+
                  //     '</div>'+
                  //   '</div>'+
                  // '</div>'+
          
                  // '<div class="col-lg-4 col-md-6 filter-clothes ">'+
                  //   '<div class="portfolio-item">'+
                  //     '<img src="'+data[2].img+'" class="img-fluid" alt="">'+
                  //     '<div class="portfolio-info">'+
                  //       '<h3><a href="" data-gall="portfolioGallery" class="venobox redicat" title="'+data[2].nombre+'" id="'+data[2].nombre+'">'+data[2].nombre+'</a></h3>'+
                  //       '<div>'+
                         
                  //         '<a href="" title="'+data[2].nombre+'"><i class="bx bx-link"></i></a>'+
                  //       '</div>'+
                  //     '</div>'+
                  //   '</div>'+
                  // '</div>'+
          
                  // '<div class="col-lg-4 col-md-6 filter-sneakers ">'+
                  //   '<div class="portfolio-item">'+
                  //     '<img src="'+data[3].img+'" class="img-fluid" alt="">'+
                  //     '<div class="portfolio-info">'+
                  //       '<h3><a href="" data-gall="portfolioGallery" class="venobox redicat" title="'+data[3].nombre+'" id="'+data[3].nombre+'">'+data[3].nombre+'</a></h3>'+
                  //       '<div>'+
                          
                  //         '<a href="" title="'+data[3].nombre+'"><i class="bx bx-link"></i></a>'+
                  //       '</div>'+
                  //     '</div>'+
                  //   '</div>'+
                  // '</div>'+
                  // '<div class="col-lg-4 col-md-6 filter-more ">'+
                  //   '<div class="portfolio-item">'+
                  //     '<img src="'+data[4].img+'" class="img-fluid" alt="">'+
                  //     '<div class="portfolio-info">'+
                  //       '<h3><a href="" data-gall="portfolioGallery" class="venobox redicat" title="'+data[4].nombre+'" id="'+data[4].nombre+'">'+data[4].nombre+'</a></h3>'+
                  //       '<div>'+
                          
                  //         '<a href="" title="'+data[4].nombre+'"><i class="bx bx-link"></i></a>'+
                  //       '</div>'+
                  //     '</div>'+
                  //   '</div>'+
                  // '</div>'+
          
                  // '<div class="col-lg-4 col-md-6 filter-clothes">'+
                  //   '<div class="portfolio-item">'+
                  //     '<img src="'+data[5].img+'" class="img-fluid" alt="">'+
                  //     '<div class="portfolio-info">'+
                  //       '<h3><a href="" data-gall="portfolioGallery" class="venobox redicat" title="'+data[5].nombre+'" id="'+data[5].nombre+'">'+data[5].nombre+'</a></h3>'+
                  //       '<div>'+
                          
                  //         '<a href="" title="'+data[5].nombre+'"><i class="bx bx-link"></i></a>'+
                  //       '</div>'+
                  //     '</div>'+
                  //   '</div>'+
                  // '</div>'+
          
                  // '<div class="col-lg-4 col-md-6 filter-clothes">'+
                  //   '<div class="portfolio-item">'+
                  //     '<img src="'+data[6].img+'" class="img-fluid" alt="">'+
                  //     '<div class="portfolio-info">'+
                  //       '<h3><a href="" data-gall="portfolioGallery" class="venobox redicat" title="'+data[6].nombre+'" id="'+data[6].nombre+'">'+data[6].nombre+'</a></h3>'+
                  //       '<div>'+
                         
                  //         '<a href="" title="'+data[6].nombre+'"><i class="bx bx-link"></i></a>'+
                  //       '</div>'+
                  //     '</div>'+
                  //   '</div>'+
                  // '</div>'+
          
                  // '<div  class="col-lg-4 col-md-6 filter-clothes">'+
                  //   '<div class="portfolio-item">'+
                  //     '<img src="'+data[7].img+'" class="img-fluid" alt="">'+
                  //     '<div class="portfolio-info">'+
                  //       '<h3><a href="" data-gall="portfolioGallery" class="venobox redicat" title="'+data[7].nombre+'" id="'+data[7].nombre+'">'+data[7].nombre+'</a></h3>'+
                  //       '<div>'+
                          
                  //         '<a href="" title="'+data[7].nombre+'"><i class="bx bx-link"></i></a>'+
                  //       '</div>'+
                  //     '</div>'+
                  //   '</div>'+
                  // '</div>'+
          
                  // '<div  class="col-lg-4 col-md-6 filter-clothes">'+
                  //   '<div class="portfolio-item">'+
                  //     '<img src="'+data[8].img+'" class="img-fluid" alt="">'+
                  //     '<div class="portfolio-info">'+
                  //       '<h3><a href="" data-gall="portfolioGallery" class="venobox redicat" title="'+data[8].nombre+'" id="'+data[8].nombre+'">'+data[8].nombre+'</a></h3>'+
                  //       '<div>'+
                  //         '<a href="" title="'+data[8].nombre+'"><i class="bx bx-link"></i></a>'+
                  //       '</div>'+
                  //     '</div>'+
                  //   '</div>'+
                  // '</div>'+
                  // '</div>'
            // )

      })
    });
}

  function rediShop(){
  $(document).on('click','.redicat',function(){
  var name=this.getAttribute('id');
  localStorage.setItem('nombre',name);
  window.location.href="index.php?page=list_shop";
  // window.location.href="index.php?page=controller_shop&op="+name;
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
      
  });
