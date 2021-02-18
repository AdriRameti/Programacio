<div id="contenido2">
    <div class="container2">
    	<div class="row">
    			<h1 data-tr="PRODUCTOS DISPONIBLES">PRODUCTOS DISPONIBLES</h1>
    	</div>
    	<div class="row">
           
    		<p class="create"><a href="index.php?page=controller_clothes&op=create_clothes"><img src="vistas/img/crear.jpg"></a></p>
    		
    		<table id="table_clothes" >
            <thead>
                <tr>
                    <td width=125 id='list' data-tr="CODIGO"><b>CODIGO</b></th>
                    <td width=125 id='list' data-tr="TIPO"><b>TIPO</b></th>
                    <td width=125 id='list' data-tr="MARCA"><b>MARCA</b></th>
                    <th width=350 id='list' data-tr="ACCION"><b>ACCION</b></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td id="artic"  colspan="4" data-tr="NO HAY NINGUN ARTÍCULO">NO HAY NINGUN ARTÍCULO</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                       		echo '<tr>';
                    	   	echo '<td width=125 id="oplist_clothes">'. $row['codigo'] . '</td>';
                    	   	echo '<td width=125 id="oplist_clothes">'. $row['nombre'] . '</td>';
                    	   	echo '<td width=125 id="oplist_clothes">'. $row['marca'] . '</td>';
                            echo '<td width=350>';
                               
                            echo '<a class="clothes Button_blue" tittle="Read Clothes" id='.$row['codigo'].'>Read</a>';
                            

                    	   	echo '<a class="Button_green" href="index.php?page=controller_clothes&op=update_clothes&id='.$row['codigo'].'" data-tr="Update">Update</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_red" href="index.php?page=controller_clothes&op=delete_clothes&id='.$row['codigo'].'" data-tr="Delete">Delete</a>'; 
                    	   	echo '</td>';
                    	   	echo '</tr>';
                        }
                    }
                ?>
                </tbody>
            </table>
    	</div>
    </div>
</div>
<div id="clothes_modal" title="Read Clothes">
</div>