<?php 
 
class cours
{
	private $id_cours;
	private $nom_cours;
	private $format_cours;
	private $id_module;
    private $date;
	

	public function setid_cours($id_cours){$this->id_cours=$id_cours;}
	public function setnom_cours($n){$this->nom_cours=$n;}
	public function setformat_cours($format_cours){$this->format_cours=$format_cours;}
	public function setid_module($id_module){$this->id_module=$id_module;}
	public function set_date($date){$this->date=$date;}

	
	
	public function getid_cours(){return $this->id_cours;}
	public function getnom_cours(){return $this->nom_cours;}
	public function getformat_cours(){return $this->format_cours;}
	
	public function getid_module(){return $this->id_module;}
	public function get_date(){return $this->date;}


	// start database transactions


    //ici on doit selectionne le cours par la date ?
	function select_by_date()
	{
	       include('connexion.php');
		$data = array();
		$query = "SELECT DISTINCT * FROM cours ORDER BY Date DESC LIMIT 3";
		//var_dump($query);
		$resultat = $db->query($query) or die('Erreur de requete : '.mysql_error());
		
		while ($ligne = $resultat->fetch()) 
		{
			$data[] = $ligne;
		}
		return $data;
		
	}


function select_by_module($id_module)
	{

       if(isset($_GET['p'])&& $_GET['p']>0  ){
      $cPage=$_GET['p'];

      }
      else  {
           $cPage=1;
         }   
       $perPage=4;
     
      
		include('connexion.php');
		$data = array();
		$query = "SELECT DISTINCT * FROM cours where id_module = $id_module LIMIT ".(($cPage-1)*$perPage).",$perPage";
		//var_dump($query);
		$resultat = $db->query($query) or die('Erreur de requete : '.mysql_error());
		
		while ($ligne = $resultat->fetch()) 
		{
			$data[] = $ligne;
		}
		return $data;
	}







function select_by_module2($id_module)
	{

      
      
		include('connexion.php');
		$data = array();
		$query = "SELECT DISTINCT * FROM cours where id_module = $id_module";
		//var_dump($query);
		$resultat = $db->query($query) or die('Erreur de requete : '.mysql_error());
		
		while ($ligne = $resultat->fetch()) 
		{
			$data[] = $ligne;
		}
		return $data;
	}

	function select_by_cours($id)
	{
	
		include('connexion.php');
		
		$data = array();
		
			$query = "SELECT DISTINCT * FROM cours where id_cours=$id";
			$resultat = $db->query($query) or die('Erreur de requete : '.mysql_error());
			
			while ($ligne = $resultat->fetch()) 
			{
			
	  
			$data[] = $ligne;
		}
		
		return $data;
	}




function Nombre_cours($id_module)
	{
	
		include('connexion.php');
		
		$data = array();
		
			$query = "SELECT COUNT(*) AS total FROM cours where id_module=$id_module";
			$resultat = $db->query($query) or die('Erreur de requete : '.mysql_error());
			
			while ($ligne = $resultat->fetch()) 
			{
			
	  
			$data[] = $ligne;
		}
		
		return $data;
	}

	function ajouter_cours(cours $c)
	{
		$nom_cours = $c->getnom_cours();
		$format_cours = $c->getformat_cours();
		$id_module = $c->getid_module();

        include('connexion.php');
        $sql="INSERT INTO `cours`(`id_cours`, `nom_cours`, `format_cours`, `id_module`, `Date`) VALUES
		(NULL,?,?,?, NOW())";
		$resultat = $db->prepare($sql) or die("Erreur d'insertion");
		$resultat->execute(array($nom_cours,$format_cours,$id_module));
		//var_dump($resultat);     
	}





		function chercher_cours_mc($search_field)
	{
		include('connexion.php');
			$data = array();
        
        
        $query = "SELECT * FROM cours where nom_cours like '%".$search_field."%'";
		$resultat = $db->query($query) or die('Erreur de requete : '.mysql_error());
			
			while ($ligne = $resultat->fetch()) 
			{
			
	  
			$data[] = $ligne;
		}
		
		return $data;
	}





	
	function delete_cours(cours $c)
	{
		$id_cours = $c->getid_cours();

		include('connexion.php');
		$sql="DELETE FROM `cours` WHERE `id_cours` = ?";
		$resultat = $db->prepare($sql) or die("Erreur d'insertion");
		$resultat->execute(array($id_cours));
	}
	
	function update_cours(cours $c)
	{
		$id_cours = $c->getid_cours();
		$nom_cours = $c->getnom_cours();
		$format_cours = $c->getformat_cours();
		$date_cours=$c->get_date();
		$id_module = $c->getid_module();

		include('connexion.php');
		$sql="UPDATE `cours` SET `nom_cours`=?,`format_cours`=?,`id_module`=?,`Date`=NOW() WHERE `id_cours`=?";
		$resultat = $db->prepare($sql) or die("Erreur d'insertion");
		$resultat->execute(array($nom_cours,$format_cours,$id_module,$id_cours));
	}
	
	
	}

	

 ?>