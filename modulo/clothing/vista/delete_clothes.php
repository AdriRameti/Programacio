<div id="contenido">
    <form autocomplete="on" method="post" name="delete_clothes" id="delete_clothes" action="index.php?page=controller_clothes&op=delete_clothes&id=<?php echo $_GET['id']; ?>">
        <table border='0'>
            <tr>
                <td align="center"  colspan="2"><h3 data-tr="¿Desea borrar el artículo?">¿Desea borrar el artículo? <?php echo $_GET['id']; ?>?</h3></td>
                
            </tr>
            <tr>
                <td align="center"><button type="submit" class="Button_green"name="delete_clothes" id="delete_clothes" data-tr="Aceptar">Aceptar</button></td>
                <td align="center"><a class="Button_red" href="index.php?page=controller_clothes&op=list_clothes" data-tr="Cancelar">Cancelar</a></td>
            </tr>
        </table>
    </form>
</div>