function validateSneakers() {
	console.log("Entra validate");
	// correcto=valida_marca();

    if (document.sneakersforms.codS.value.length==0){
	    document.getElementById('e_codigo').innerHTML = "Introduzca el codigo del artículo";
		document.sneakersforms.codS.focus();
		return 0;
    }else if(document.sneakersforms.codS.value.length!=0){
		document.getElementById('e_codigo').innerHTML = "";
		
	}
    if (document.sneakersforms.talla.value.length==0){
	    document.getElementById('e_talla').innerHTML = "Introduzca el tipo de ropa que desea";
		document.sneakersforms.talla.focus();
		return 0;
	}else if(document.sneakersforms.talla.value.length!=0){
		document.getElementById('e_talla').innerHTML = "";
	}
	if (document.sneakersforms.fechaE.value.length==0){
	    document.getElementById('e_fecha').innerHTML = "Tiene que elegir una fecha";
		document.sneakersforms.fechaE.focus();
		return 0;
	}else if(document.sneakersforms.fechaE.value.length!=0){
		document.getElementById('e_fecha').innerHTML = "";
	}


		document.sneakersforms.submit();
		document.sneakersforms.action="index.php?page=controller_sneakers&op=create_sneakers";

}
function validatejsupdate() {
	correcto=valida_marca();

    if (document.updateform.codigo.value.length==0){
	    document.getElementById('e_codigo').innerHTML = "Introduzca el codigo del artículo";
		document.updateform.codigo.focus();
		return 0;
    }else if(document.updateform.codigo.value.length!=0){
		document.getElementById('e_codigo').innerHTML = "";
		
	}
    if (document.updateform.nombre.value.length==0){
	    document.getElementById('e_nombre').innerHTML = "Introduzca el tipo de ropa que desea";
		document.updateform.nombre.focus();
		return 0;
	}else if(document.updateform.nombre.value.length!=0){
		document.getElementById('e_nombre').innerHTML = "";
	}
    if (correcto==0){
	    document.getElementById('e_marca').innerHTML = "Tiene que elegir una marca";
		document.updateform.marca.focus();
		return 0;
	}else if(correcto!=0){
		document.getElementById('e_marca').innerHTML = "";
	}
	if (document.updateform.fechaEnv.value.length==0){
	    document.getElementById('e_fecha').innerHTML = "Tiene que elegir una fecha";
		document.updateform.fechaEnv.focus();
		return 0;
	}else if(document.updateform.fechaEnv.value.length!=0){
		document.getElementById('e_fecha').innerHTML = "";
	}
		document.updateform.submit();
		document.updateform.action="index.php?page=controller_clothes&op=update_clothes";
	}