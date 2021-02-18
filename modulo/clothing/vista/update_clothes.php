<div id="contenido">
<form method="post" name="updateform" id="updateform" >

        <div id="art" ><h1 data-tr="Actualizar artículo">Actualizar artículo </h1></div>
        <table border='0'>
            <tr>
                <td><h2 data-tr="Codigo del artículo">Codigo del artículo:</h2> </td>
                <td><input type="text" id="codigo" name="codigo" placeholder="codigo" value="<?php echo $codigo['codigo'];?>" readonly /></td>
                <td><font color="red">
                    <span id="e_codigo" class="error">
                    <?php
                            echo "$error_codigo";
                        ?>  
                    </span>
                </font></font></td>
            </tr>
            <tr>
                <td><h2 data-tr="Tipo de ropa:">Tipo de ropa:</h2> </td>
                <td><input name="nombre" id="nombre" type="text" placeholder="Pantalones, Camisetas..." value="<?php echo $codigo['nombre']; ?>" /></td>
                <td><font color="red">
                    <span id="e_nombre" class="error">
                    </span>
                </font></font></td>
            </tr>
        
            <tr>
                <td><h2 data-tr="Marca de ropa">Marca de ropa:</h2> </td>
                <td><h3>
                    <input type="checkbox" id= "marca" name="marca" placeholder= "Nike" value="Nike" />Nike<br/>
                    <input type="checkbox" id= "marca2" name="marca2" placeholder= "Adidas" value="Adidas" />Adidas<br/>
                    <input type="checkbox" id= "marca3" name="marca3" placeholder= "Carhartt" value="Carhartt"/>Carhartt<br/></h3></td>
					<td><font color="red">
					<span id="e_marca" class="error">
                    </span></font></td>
            </tr>
  
            <tr>
                <td><h2 data-tr="Color de la prenda:">Color de la prenda:</h2> </td>
                <td><input type="color" id="color" name="color" value="<?php echo $codigo['color']; ?>"></td>
                <td><font color="red">
                    <span id="e_color" class="error">
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td><h2 data-tr="Talla de ropa:">Talla de ropa: </h2></td>
                <td><select id="talla" name="talla" placeholder="talla">
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
					<option value="L">XL</option>
                    </select></td>
                <td><font color="red">
					<span id="e_talla" class="error">
                    </span></font></td>
            </tr>
            
            <tr>
                <td><h2 data-tr="Fecha de envio:">Fecha de envio:</h2> </td>
                <td><input id="fechaEnv" type="text" name="fechaEnv" placeholder="Elija la fecha de envio" value="<?php echo $codigo['fechaEnv'];?>" ></td>
	            <td><font color="red">
					<span id="e_fecha" class="error">
                    </span></font></td>
            </tr>
            
            <tr>
                <td><input name="Submit" type="button" value="Enviar" onclick="validatejsupdate();"><td>
                <td align="right"><button><a href="index.php?page=controller_clothes&op=list_clothes">Volver</a></button></td>
            </tr>
        </table>
    </form>
</div>