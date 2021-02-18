<div id="contenido">
    <form autocomplete="on" method="post" name="delete_sneakers" id="delete_sneakers" action="index.php?page=controller_sneakers&op=delete_sneakers&id=<?php echo $_GET['id']; ?>">
        <table border='0'>
            <tr>
                <td align="center"  colspan="2"><h3 data-tr="¿Desea borrar el artículo?">¿Desea borrar el artículo? <?php echo $_GET['id']; ?>?</h3></td>
                
            </tr>
            <tr>
                <td align="center"><button type="submit" class="Button_green"name="delete_sneakers" id="delete_sneakers" data-tr="Aceptar">Aceptar</button></td>
                <td align="center"><a class="Button_red" href="index.php?page=controller_sneakers&op=list_sneakers" data-tr="Cancelar">Cancelar</a></td>
            </tr>
        </table>
    </form>
</div>