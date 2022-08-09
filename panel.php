<div class="table-responsive">
	
	<table class="table table-bordered table-condensed table-hover table-striped " cellspacing="0" width="100%">
        <thead>
            <tr style="background-color: #ad86a3;">
            	<th>ID</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Unidad</th>
				<th>Precio</th>
				<th>Tipo</th>
                <th>Action</th>
            </tr>
        </thead>
        
        <tbody>
            
            <?php
			
			require_once 'dbcon.php';
			$query = "SELECT * FROM productos";
			$stmt = $DBcon->prepare($query);
			$stmt->execute();
			
			if($stmt->rowCount() > 0) {
				
				while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
				extract($row);
				?>
				<tr>
		        <td><?php echo $Id_prod; ?></td>
                <td><?php echo $nombre_prod; ?></td>
                <td><?php echo $cantidad; ?></td>
                <td><?php echo $unidad; ?></td>
				<td><?php
					if($precio_detalle >0){
						echo $precio_detalle;
					}elseif($precio_detalle == 0){
						echo $precio_mayor;
					}
				
				 ?></td>
				<td><?php echo $tipo; ?></td>
		        <td> 
		        <a class="btn btn-sm btn-danger" id="delete_product" data-id="<?php echo $Id_prod; ?>" href="javascript:void(0)"><i class="glyphicon glyphicon-trash"></i></a>
		        </td>
		        </tr>
				<?php
				}	
				
			} else {
				
				?>
		        <tr>
		        <td colspan="3">No hay productos en lista</td>
		        </tr>
		        <?php
				
			}
			?>
             
        </tbody>
    </table>
    
</div>
