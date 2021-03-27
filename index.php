<?php
	if ((isset($_GET['page'])) && ($_GET['page']===("controller_clothes")||("controller_sneakers")||("controller_home")||("controller_shop")||("list_shop") ||("contactus")) ){
		include("vistas/incluir/top_pages_clothes.html");
	}else{
		include("vistas/incluir/top_pages.html");
	}
	session_start();
?>
<div id="wrapper">		
    <div id="header">    	
		<?php include("vistas/incluir/header.html"); ?>        
    </div>  
    <div id="menu">
    		<?php include("vistas/incluir/menu.html"); ?>
	    </div>	
    <div id="contenido">
    	<?php 		
		include("vistas/incluir/paginas.php"); ?>        
        <br style="clear:both;" />
    </div>
	
    <div id="footer">	   
		<?php
		if($_GET['page']==="list_shop"){

		}else{
			include("vistas/incluir/footer.html");
		}
		?> 
    </div>
</div>
<?php include("vistas/incluir/bottom_page.html"); ?>