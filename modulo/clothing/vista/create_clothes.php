<div id="contenido2">
<form method="post" name="clothesforms" id="clothesforms" >

        <div id="art"><h1 data-tr="Artículo nuevo">Artículo nuevo</h1></div>
        <table border='0'>
            <tr>
                <td><h2 data-tr="Codigo del artículo">Codigo del artículo:</h2> </td>
                <td><input type="text" id="codigo" name="codigo" placeholder="codigo" value=""/></td>
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
                <td><input name="nombre" id="nombre" type="text" placeholder="Pantalones, Camisetas..." value="" /></td>
                <td><font color="red">
                    <span id="e_nombre" class="error">
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td><h2 data-tr="Marca de ropa">Marca de ropa:</h2> </td>
                <td><h3>
                <select id="marca" name="marca" placeholder="marca">
                    <option value="Nike">Nike</option>
                    <option value="Adidas">Adidas</option>
                    <option value="Carhartt">Carhartt</option>
                    <option value="Bape">Bape</option>
                    <option value="Supreme">Supreme</option>
                    <option value="Guess">Guess</option>
                    <option value="Obey">Obey</option>
                    <option value="The North Face">The North Face</option>
                    <option value="Polo Ralph Lauren">Polo Ralph Lauren</option>
                    </select></h3></td>
					<td><font color="red">
					<span id="e_marca" class="error">
                    </span></font></td>
            </tr>
  
            <tr>
                <td><h2 data-tr="Color de la prenda:">Color de la prenda:</h2> </td>
                <td><input type="color" id="color" name="color"></td>
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
					<option value="XL">XL</option>
                    </select></td>
                <td><font color="red">
					<span id="e_talla" class="error">
                    </span></font></td>
            </tr>
            
            <tr>
                <td><h2 data-tr="Fecha de envio:">Fecha de envio:</h2> </td>
                <td><input id="fechaEnv" type="text" name="fechaEnv" placeholder="Elija la fecha de envio" ></td>
	            <td><font color="red">
					<span id="e_fecha" class="error">
                    </span></font></td>
            </tr>
            
            <tr>
                <td><input name="Submit" type="button" value="Enviar" onclick="validatejs();"><td>
                <td align="right"><button><a href="index.php?page=controller_clothes&op=list_clothes">Volver</a></button></td>
            </tr>
        </table>
    </form>
</div>