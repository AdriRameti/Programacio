<div id="contenido2">
<form method="post" name="sneakersforms" id="sneakersforms" >

        <div id="art"><h1 data-tr="Artículo nuevo">Artículo nuevo</h1></div>
        <table border='0'>
            <tr>
                <td><h2 data-tr="Codigo del artículo">Codigo del artículo:</h2> </td>
                <td><input type="text" id="codS" name="codS" placeholder="codS" value=""/></td>
                <td><font color="red">
                    <span id="e_codigo" class="error">
                    <?php
                            echo "$error_codigo";
                        ?>  
                    </span>
                </font></font></td>
            </tr>
            <tr>
                <td><h2 >Marca de sneakers</h2> </td>
                <td><h3>
                <select id="marca" name="marca" placeholder="marca">
                    <option value="Nike">Nike</option>
                    <option value="Adidas">Adidas</option>
                    <option value="Puma">Puma</option>
                    <option value="Fila">Fila</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Sil-Silk">Sil-Silk</option>
                    <option value="Lacoste">Lacoste</option>
                    <option value="Vans">Vans</option>
                    </select></h3></td>
                <td><font color="red">
                    <span id="e_marca" class="error">
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td><h2 >Modelo de sneakers:</h2> </td>
                <td><h3>
                <select id="modelo" name="modelo" placeholder="modelo">
                    <option value="Air Max">Air Max</option>
                    <option value="Air Force 1">Air Force 1</option>
                    <option value="Ultraboost">Ultraboost</option>
                    <option value="Yeezy">Yeezy</option>
                    <option value="ZX">ZX</option>
                    <option value="Superstar">Superstar</option>
                    <option value="Spectra">Spectra</option>
                    <option value="Future Rider">Future Rider</option>
                    <option value="Jordan 1">Jordan 1</option>
                    <option value="Jordan 4">Jordan 4</option>
                    <option value="Jordan 6">Jordan 6</option>
                    <option value="Jordan 9">Jordan 9</option>
                    <option value="Old School">Old School</option>
                    <option value="Old School">Sk8-Hi</option>
                    <option value="No model">No model</option>
                    </select></h3></td>
					<td><font color="red">
					<span id="e_modelo" class="error">
                    </span></font></td>
            </tr>
  

            
            <tr>
                <td><h2 data-tr="Talla de sneaker:">Talla de zapatilla: </h2></td>
                <td><input type="text" id="talla" name="talla" placeholder="talla" value=""/></td>
                <td><font color="red">
					<span id="e_talla" class="error">
                    </span></font></td>
            </tr>
            
            <tr>
                <td><h2 data-tr="Fecha de envio:">Fecha de envio:</h2> </td>
                <td><input id="fechaE" type="text" name="fechaE" placeholder="Elija la fecha de envio" ></td>
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