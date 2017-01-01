<?php 
include('import.php');

$id_module = $_POST['id_module'];

$module =new module();

$data = $module->select_by_id($id_module);


foreach ($data as $value) 
{ ?>
<tr>
	
	<td><a href="list_cours.php?id_module=<?php echo $value['id']; ?>"><?php echo utf8_encode($value['nom']);?></a>&ensp;</td>
	
</tr>

<?php } ?>