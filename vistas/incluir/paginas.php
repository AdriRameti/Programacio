<?php
if (isset($_GET['page'])){
	switch($_GET['page']){
		case "homepage":
			include("modulo/home/vista/".$_GET['page'].".html");
			break;
		case "list_shop":
			include("modulo/shop/vista/".$_GET['page'].".html");
			break;
		case "list_cart":
			include("modulo/carrito/vista/".$_GET['page'].".html");
			break;
		case "login":
			include("modulo/login/vista/".$_GET['page'].".html");
			break;
		case "opciones":
			include("vistas/incluir/opciones/".$_GET['page'].".html");
			break;
		case "controller_shop":
			include("modulo/shop/controlador/".$_GET['page'].".php");
			break;
		case "controller_clothes":
		include("modulo/clothing/controlador/".$_GET['page'].".php");
		break;
		case "controller_home":
			include("modulo/home/controlador/".$_GET['page'].".php");
			break;
		case "controller_sneakers":
		include("modulo/sneakers/controlador/".$_GET['page'].".php");
		break;
		case "aboutus":
			include("modulo/aboutus/".$_GET['page'].".html");
			break;
		case "contactus":
			include("modulo/contactus/".$_GET['page'].".html");
			break;
		case "404":
			include("vistas/incluir/error".$_GET['page'].".html");
			break;
		case "503":
		include("vistas/incluir/error".$_GET['page'].".html");
			break;
		case "controller_home":
		include("modulo/home/controlador/".$_GET['page'].".php");
		break;
		default:
			include("vistas/incluir/inicio.html");
			break;
		}
	}else{
		include("modulo/home/vista/homepage.html");
	}


?>