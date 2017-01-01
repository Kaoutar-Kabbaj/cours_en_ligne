<?php

class Utilisateur{
private $id;
private $nom;
private $prenom;
private $email;
private $login;
private $mdp;
private $role;

 


public function getid_utilisateur(){return $this->id;}
	public function getnom_utilisateur(){return $this->nom;}
	public function getprenom_utilisateur(){return $this->prenom;}
	public function getlogin_utilisateur(){return $this->login;}
	public function getmdp_utilisateur(){return $this->mdp;}
	public function getemail_utilisateur(){return $this->email;}
	public function getrole_utilisateur(){return $this->role;}

	

	public function setnom_utilisateur($nom){$this->nom=$nom;}
	public function setprenom_utilisateur($prenom){$this->prenom=$prenom;}
	public function setlogin_utilisateur($login){$this->login=$login;}
	public function setmdp_utilisateur($mdp){$this->mdp=$mdp;}
	public function setemail_utilisateur($email){$this->email=$email;}
	public function setrole_utilisateur($role){$this->role=$role;}

	

	

  function Authentification($username,$password)
	{

       include('connexion.php');
	   $data = array();
       $query = "SELECT * FROM utilisateur WHERE login = '$username' AND mdp = '$password' ";
       	//var_dump($query);
       $resultat = $db->query($query) or die('Erreur de requete : '.mysql_error());
		
		while ($ligne = $resultat->fetch()) 
		{
			$data[] = $ligne;
		}
		return $data;
		
	}



	function ajouter_utilisateur(Utilisateur $u)
	{
		$nom = $u->getnom_utilisateur();
		$prenom = $u->getprenom_utilisateur();
		$email = $u->getemail_utilisateur();
		$login = $u->getlogin_utilisateur();
		$mdp = $u->getmdp_utilisateur();
		$role=$u->getrole_utilisateur();
		
        include('connexion.php');
        $sql="INSERT INTO `utilisateur`(`id`, `login`, `mdp`, `role`, `nom`, `prenom`, `email`) VALUES
		(NULL,?,?,?,?,?,?)";
		$resultat = $db->prepare($sql) or die("Erreur d'insertion");
        $resultat->execute(array($login,$mdp,$role,$nom,$prenom,$email)); 
 }
		
		//var_dump($resultat);     
	}























?>