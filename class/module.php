<?php 
 
class module
{   
	private $id;
	private $nom;
	
	public function setid_mod($id){$this->id=$id;}
	public function setnom_mod($n){$this->nom=$n;}
	public function getid_mod(){return $this->id;}
	public function getnom_mod(){return $this->nom;}





	function select_all()
	{
		include('connexion.php');
		$data=array();
		$query = "SELECT * FROM `module`";
		//var_dump($query);
		$resultat = $db->query($query) or die('Erreur de requete : '.mysql_error());
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
			$query = "SELECT * FROM module  WHERE id_fil = $id_filiere";
			$resultat = $db->query($query) or die('Erreur de requete : '.mysql_error());
			while($donnee = $resultat->fetch())
			{
				$data[] = $donnee;
			}
			return $data;
	}

	function select_one_module($id)
	{
			include('connexion.php');
			$data = array();
			$query = "SELECT * FROM module  WHERE id = $id";
			$resultat = $db->query($query) or die('Erreur de requete : '.mysql_error());
			while($donnee = $resultat->fetch())
			{
				$data[] = $donnee;
			}
			return $data;
	}


}
	

?>