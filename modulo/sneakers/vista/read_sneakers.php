<div id="contenido2">
    <h1>Informacion del artículo</h1>
    <p>
    <br/>
    <table border='2' align="center">
    <tr>
            <td data-tr="Codigo del artículo">Codigo del artículo: </td>
            <td>
                <?php
                    echo $codS['codS'];
                ?>
            </td>
        </tr>
        <tr>
            <td >Marca de zapatilla: </td>
            <td>
                <?php
                    echo $codS['marca'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td >Modelo de zapatilla: </td>
            <td>
                <?php 

                echo $codS['modelo'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td >Talla de zapatilla : </td>
            <td>
                <?php
                    echo $codS['talla'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td data-tr="Fecha de envio:">Fecha de envio: </td>
            <td>
                <?php
                    echo $codS['fechaE'];
                ?>
            </td>
        </tr>
    </table>
    </p>
    <p><button><a href="index.php?page=controller_sneakers&op=list_sneakers">Volver</a></button></p>
</div>