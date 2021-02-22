
// function valida_marca(){

// 	var v_marca1=document.getElementById('marca').checked;
// 	var v_marca2=document.getElementById('marca2').checked;
// 	var v_marca3=document.getElementById('marca3').checked;
// 	var ok=0;
// 	if((v_marca1==false)&&(v_marca2==false)&&(v_marca3==false)){
// 		ok=0;
// 	}else{
// 		ok=1;
// 	}
// 	return ok;
// }
function validatejs() {
	console.log("Entra validate");
	// correcto=valida_marca();

    if (document.clothesforms.codigo.value.length==0){
	    document.getElementById('e_codigo').innerHTML = "Introduzca el codigo del artículo";
		document.clothesforms.codigo.focus();
		return 0;
    }else if(document.clothesforms.codigo.value.length!=0){
		document.getElementById('e_codigo').innerHTML = "";
		
	}
    if (document.clothesforms.nombre.value.length==0){
	    document.getElementById('e_nombre').innerHTML = "Introduzca el tipo de ropa que desea";
		document.clothesforms.nombre.focus();
		return 0;
	}else if(document.clothesforms.nombre.value.length!=0){
		document.getElementById('e_nombre').innerHTML = "";
	}
	if (document.clothesforms.fechaEnv.value.length==0){
	    document.getElementById('e_fecha').innerHTML = "Tiene que elegir una fecha";
		document.clothesforms.fechaEnv.focus();
		return 0;
	}else if(document.clothesforms.fechaEnv.value.length!=0){
		document.getElementById('e_fecha').innerHTML = "";
	}


		document.clothesforms.submit();
		document.clothesforms.action="index.php?page=controller_clothes&op=create_clothes";

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