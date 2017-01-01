<!--Le menu de ma page-->
<div id="menu2">
    
        
         <?php 
	 include('import.php');
	$filiere = new filiere();
	$data = $filiere->select_all();
	$module = new module();
    $cours = new cours();
	
      foreach($data as $val)
	{
	$id_filiere = $val['id'];
	$data_module = $module->select_by_id($id_filiere);
	?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" 
                    href="#collapseOne<?php echo $id_filiere; ?> "><?php  echo utf8_encode($val['nom']);?></a>
                </h4>
				
            </div>
	
            <div id="collapseOne<?php echo $id_filiere; ?>" class="panel-collapse collapse in">
                <div class="panel-body" style="background-color: #DEDBDB;">
				<ul>
			<?php
		
   foreach($data_module as $val_module)
	{ 
		$id_module = $val_module['id'];
		$data_cours = $cours->select_by_module($id_module);
		?>
				
					<li>
					<?php  echo utf8_encode($val_module['nom']);?></li>
					<ul class="sous_liste">
					<?php foreach($data_cours as $val_cours) {  ?>
						&ensp;<IMG SRC="images/puce.gif">
						
						<a href="<?php echo $val_cours['format_cours'];?>"  target ="_Blank"style="color:black;text-size:10"><small>
						&ensp;<?php echo utf8_encode($val_cours['nom_cours']); ?></a></BR></small>
						<?php } ?>
					</ul>
				
	<?php } ?>

	</ul>
         </div>
		   </div>
			
        </div>
		<?php } ?>
      </div>
      
