<?php 
include('import.php');
if (isset($_GET['id_cours'])) 
{
	
	$param = $_GET['param'];
	

	if ($param == "update") 
	{
		echo "<script>alert('update panel');</script>";
	}
	if ($param == "delete") 
	{
		$cours  = new cours();
		$id_cours = $_GET['id_cours'];
		//var_dump($id_cours);
		$cours->setid_cours($id_cours);
		$cours->delete_cours($cours);
		//var_dump($cours);
		//echo "<script>alert('Votre cours est supprimé');</script>";i
		header("location:presentation.php");
	}
}

  ?>