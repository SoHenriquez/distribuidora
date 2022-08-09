<?php 
 require_once 'dbcon.php';
 $query = "SELECT * FROM productos";
 $stmt = $DBcon->prepare($query);
 $stmt->execute();
 if($stmt->rowCount() > 0) {
?>
<div class="container text-center">
    <div class="row row-cols-3">
        <div class="col border rounded-5" style="height: 300px; ">
            <?php
                $stmt->execute();
                while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                            ?>
                            
                            <?php if($Id_prod==1 ){?>
                                <img src="img/descarga.jpg" height="250px" alt=""><br>
                                            <a class="text-dark" href="#"><?php echo $nombre_prod; ?></a><br>
                                            <p>Precio:
                                                <?php 
                                                    if($precio_detalle >0){
                                                        echo $precio_detalle;
                                                    }elseif($precio_detalle == 0){
                                                        echo $precio_mayor;
                                                    }
                                                ?>
                                                Cantidad: <?php echo $cantidad; ?><?php echo $unidad; ?>
                                            </p>        
                             <?php }?>
            <?php } ?>

        </div>
        <div class="col border rounded-5" style="height: 300px;">
            <?php
                $stmt->execute();
                while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                            ?>
                            
                            <?php if($Id_prod==2 ){?>
                                <img src="img/iansa-azucar-1kg-7001003.jpg" height="250px" alt=""><br>
                                    <a class="text-dark" href="#"><?php echo $nombre_prod; ?></a><br>
                                            <p>Precio:
                                                <?php 
                                                    if($precio_detalle >0){
                                                        echo $precio_detalle;
                                                    }elseif($precio_detalle == 0){
                                                        echo $precio_mayor;
                                                    }
                                                ?>
                                                Cantidad: <?php echo $cantidad; ?><?php echo $unidad; ?>
                                            </p>     
                                        <?php }?>

                                        
                            
            <?php } ?>

        </div>
        <div class="col border rounded-5" style="height: 300px;">
            <?php
                $stmt->execute();
                while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                            ?>
                            
                            <?php if($Id_prod==3 ){?>
                                <img src="img/azucar-antihumedad-buket-saco-15-kg-norte.jpg" height="250px" alt=""><br>
                                <a class="text-dark" href="#"><?php echo $nombre_prod; ?></a><br>
                                            <p>Precio:
                                                <?php 
                                                    if($precio_detalle >0){
                                                        echo $precio_detalle;
                                                    }elseif($precio_detalle == 0){
                                                        echo $precio_mayor;
                                                    }
                                                ?>
                                                Cantidad: <?php echo $cantidad; ?><?php echo $unidad; ?>
                                            </p>     
                                        <?php }?>

                                        
                            
            <?php } ?>

        </div>
        <div class="col border rounded-5" style="height: 300px;"><!-- la imagen debe medir 250 max -->
            <?php
                $stmt->execute();
                while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                            ?>
                            
                            <?php if($Id_prod==4 ){?>
                                <img src="img/cob-caravella-negro-1kg7453.jpg" height="250px" alt=""><br>
                                <a class="text-dark" href="#"><?php echo $nombre_prod; ?></a><br>
                                            <p>Precio:
                                                <?php 
                                                    if($precio_detalle >0){
                                                        echo $precio_detalle;
                                                    }elseif($precio_detalle == 0){
                                                        echo $precio_mayor;
                                                    }
                                                ?>
                                                Cantidad: <?php echo $cantidad; ?><?php echo $unidad; ?>
                                            </p>     
                                        <?php }?>

                                        
                            
            <?php } ?>

        </div>
        <div class="col border rounded-5" style="height: 300px;">
            <?php
                $stmt->execute();
                while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                            ?>
                            
                            <?php if($Id_prod==5 ){?>
                                <img src="img/mantequilla-018342.jpg" height="250px" alt=""><br>
                                <a class="text-dark" href="#"><?php echo $nombre_prod; ?></a><br>
                                            <p>Precio:
                                                <?php 
                                                    if($precio_detalle >0){
                                                        echo $precio_detalle;
                                                    }elseif($precio_detalle == 0){
                                                        echo $precio_mayor;
                                                    }
                                                ?>
                                                Cantidad: <?php echo $cantidad; ?><?php echo $unidad; ?>
                                            </p>     
                                        <?php }?>

                                        
                            
            <?php } ?>

        </div>
        <div class="col border rounded-5" style="height: 300px;">
            <?php
                $stmt->execute();
                while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                            ?>
                            
                            <?php if($Id_prod==6 ){?>
                                <img src="img/cacaoamargo1kg5932.jpg" height="250px" alt=""><br>
                                <a class="text-dark" href="#"><?php echo $nombre_prod; ?></a><br>
                                            <p>Precio:
                                                <?php 
                                                    if($precio_detalle >0){
                                                        echo $precio_detalle;
                                                    }elseif($precio_detalle == 0){
                                                        echo $precio_mayor;
                                                    }
                                                ?>
                                                Cantidad: <?php echo $cantidad; ?><?php echo $unidad; ?>
                                            </p>     
                                        <?php }?>

                                        
                            
            <?php } ?>

        </div>
        <div class="col border rounded-5" style="height: 300px;">
            <?php
                $stmt->execute();
                while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                            ?>
                            
                            <?php if($Id_prod==7 ){?>
                                <img src="img/cacaoamargo1kg5932.jpg" height="250px" alt=""><br>
                                <a class="text-dark" href="#"><?php echo $nombre_prod; ?></a><br>
                                            <p>Precio:
                                                <?php 
                                                    if($precio_detalle >0){
                                                        echo $precio_detalle;
                                                    }elseif($precio_detalle == 0){
                                                        echo $precio_mayor;
                                                    }
                                                ?>
                                                Cantidad: <?php echo $cantidad; ?><?php echo $unidad; ?>
                                            </p>     
                                        <?php }?>

                                        
                            
            <?php } ?>

        </div>
        <div class="col border rounded-5" style="height: 300px; " >
            <?php
                $stmt->execute();
                while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                            ?>
                            
                            <?php if($Id_prod==8 ){?>
                                <img src="img/descarga (2).jpg" class="mt-2" height="247px" width="100%" alt=""><br>
                                <a class="text-dark" href="#"><?php echo $nombre_prod; ?></a><br>
                                            <p>Precio:
                                                <?php 
                                                    if($precio_detalle >0){
                                                        echo $precio_detalle;
                                                    }elseif($precio_detalle == 0){
                                                        echo $precio_mayor;
                                                    }
                                                ?>
                                                Cantidad: <?php echo $cantidad; ?><?php echo $unidad; ?>
                                            </p>     
                                        <?php }?>

                                        
                            
            <?php } ?>

        </div>
        <div class="col border rounded-5" style="height: 300px;">
            <?php
                $stmt->execute();
                while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                            ?>
                            
                            <?php if($Id_prod==9 ){?>
                                <img src="img/descarga (3).jpg" height="250px" alt=""><br>
                                <a class="text-dark" href="#"><?php echo $nombre_prod; ?></a><br>
                                            <p>Precio:
                                                <?php 
                                                    if($precio_detalle >0){
                                                        echo $precio_detalle;
                                                    }elseif($precio_detalle == 0){
                                                        echo $precio_mayor;
                                                    }
                                                ?>
                                                Cantidad: <?php echo $cantidad; ?><?php echo $unidad; ?>
                                            </p>     
                                        <?php }?>

                                        
                            
            <?php } ?>

        </div>
    </div>
</div>
<?php } else {
                        
                        ?>
                        <tr>
                        <td colspan="3">No hay productos en lista</td>
                        </tr>
                        <?php
                        
                    }
                    ?>