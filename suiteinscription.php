<?php
@session_start();
include('import.php');


 if(isset($_GET['login'])){


$login=$_GET['login'];
$psw=$_GET['motdepasse'];



echo  $login ;

	$password = md5($psw);
    $Utilisateur = new Utilisateur();
	$data = $Utilisateur->Authentification($login,$password);
	
	
if(!empty($data))
{
	foreach($data as $val)
		{

      	$_SESSION['id']=$val['id'];
      	$_SESSION['nom']=$val['nom'];
        $_SESSION['login']=$val['login'];
		$_SESSION['mdp']=$val['mdp'];
		$_SESSION['role']= $val['role'];

	
			

		
           if($val['role']==1)  {header("location:index_Utilisateur.php"); }
	       else if ($val['role']==0) {header("location:presentation.php"); }
      	}
}
else
{
	header("location:index.php");
}




}


 








?>