<div id="contenido2">
    <h1>Informacion del artículo</h1>
    <p>
    <br/>
    <table border='2' align="center">
    <tr>
            <td data-tr="Codigo del artículo">Codigo del artículo: </td>
            <td>
                <?php
                    echo $codigo['codigo'];
                ?>
            </td>
        </tr>
        <tr>
            <td data-tr="Tipo de ropa:">Tipo de artículo: </td>
            <td>
                <?php
                    echo $codigo['nombre'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td data-tr="Marca de ropa">Marca de ropa: </td>
            <td>
                <?php 

                echo $codigo['marca'];
                ?>
            </td>
        </tr>
        <tr>
            <td data-tr="Color de la prenda:">Color del artículo : </td>
            <td>
                <?php
                    echo $codigo['color'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td data-tr="Talla de ropa:">Talla de ropa : </td>
            <td>
                <?php
                    echo $codigo['talla'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td data-tr="Fecha de envio:">Fecha de envio: </td>
            <td>
                <?php
                    echo $codigo['fechaEnv'];
                ?>
            </td>
        </tr>
    </table>
    </p>
    <p><button><a href="index.php?page=controller_clothes&op=list_clothes">Volver</a></button></p>
</div>