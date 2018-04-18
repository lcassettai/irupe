<?php defined('BASEPATH') OR exit('Not direct script allowed')?>

<main class='container-fluid'>
	<div class="row">
		<?php for($i = 0; $i < 4; $i++){?>
		<div class="col-sm-3">
 		 <div class="panel text-center">
 			 <img src="<?php echo assets_url('assets');?>/img/persona-nula.jpg" alt="" class="img-responsive img-round">
 			 <p><b>Luciano Cassettai</b></p>
 			 <small>Tecnico Superior en Programacion</small>
 		 </div>
 	 </div>
 	    <?php }?>
        
        <ul>
        <?php foreach($listas as $l){
                echo "<li>".$l->lista."</li>";
        }?>    

        </ul>
	</div>
</main>
