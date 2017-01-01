<?php 
class filiere
{
	private $id;
	private $nom;
	
	
	public function setid_fil($id){$this->id=$id;}
	public function setnom_fil($n){$this->nom=$n;}
	
	
	
	public function getid_fil(){return $this->id;}
	public function getnom_fil(){return $this->nom;}
	
	function select_all()
	{
		include('connexion.php');
		$data=array();
		$query = "SELECT * FROM `filiere`";
		$resultat = $db->query($query) or die('Erreur de requete: '.mysql_error());
  	while ($donnee= $resultat->fetch()) 
		{ 
			$data[]=$donnee;
		}
	return $data;
	}

function select_by_id($id_filiere)
{
		include('connexion.php');
		$data = array();
		$query = "SELECT * FROM filiere WHERE id = ".$id_filiere;
		$resultat = $db->query($query) or die('Erreur de requete : '.mysql_error());
		while($donnee = $resultat->fetch())
		{
			$data[] = $donnee;
		}
		return $data;
}
	
		
	}
	
		


 ?>
 