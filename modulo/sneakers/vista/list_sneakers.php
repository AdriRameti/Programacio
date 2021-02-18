<div id="contenido2">
    <div class="container2">
    	<div class="row">
    			<h1 data-tr="PRODUCTOS DISPONIBLES">PRODUCTOS DISPONIBLES</h1>
    	</div>
    	<div class="row">
           
    		<p class="create"><a href="index.php?page=controller_sneakers&op=create_sneakers"><img src="vistas/img/crear.jpg"></a></p>
    		
    		<table id="table_sneakers">
            <thead>
                <tr>
                    <td width=125 id='list' ><b>CODIGO</b></th>
                    <td width=125 id='list' ><b>MARCA</b></th>
                    <td width=125 id='list' ><b>MODELO</b></th>
                    <th width=350 id='list' ><b>ACCION</b></th>
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
                    	   	echo '<td width=125 id="oplist_clothes">'. $row['codS'] . '</td>';
                    	   	echo '<td width=125 id="oplist_clothes">'. $row['marca'] . '</td>';
                    	   	echo '<td width=125 id="oplist_clothes">'. $row['modelo'] . '</td>';
                            echo '<td width=350>';
                               
                            echo '<a class="sneakers Button_blue" tittle="Read sneakers" id='.$row['codS'].'>Read</a>';

                    	   	echo '<a class="Button_green" href="index.php?page=controller_sneakers&op=update_sneakers&id='.$row['codS'].'" data-tr="Update">Update</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_red" href="index.php?page=controller_sneakers&op=delete_sneakers&id='.$row['codS'].'" data-tr="Delete">Delete</a>'; 
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
<div id="sneakers_modal" title="Read sneakers">
</div>