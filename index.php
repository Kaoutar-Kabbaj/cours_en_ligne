<?php 
@session_start();

if (isset($_SESSION['role']) != null) 
{
 	if ($_SESSION['role'] == 1) 
 	{
 		header("Location:index_Utilisateur.php");
 	}
 	if ($_SESSION['role'] == 0) 
 	{
 		header("Location:index_professeur.php");
 	}
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Cours en ligne </title>

	
	

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style.css">



</head>

<body>
  
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">E-<span>learning</span></span></h1>
		
		<div class="login-box animated fadeInUp">
			<div class="box-header">
			<form class="form-signin" action="" method="POST">
				<h2>Log In</h2>
			</div>
			<label for="username">Utilisateur:</label>
			<br/>
			
			<input type="text" id="username" name="username" >
			<br/>
			<label for="password">Mot de passe:</label>
			<br/>
			<input type="password" id="password" name="password">
			<br/>
			<input type="checkbox" name="check1" value="">Enregistrer le mot de passe</br>
		
			
			<button type="submit" name="connected">Se Connecter</button>
			<br/>
			
			
			<a href="inscription.php"><p class="small">Vous n'êtes pas encore inscrit?</p></a>
		</div>
	</div>
	</div>
</body>
<?php 
include('import.php');

if (isset($_POST['username'])) 
{
  extract($_POST);

if ($username && $password) 
{
 
 	$password = md5($password);
    $Utilisateur = new Utilisateur();
	$data = $Utilisateur->Authentification($username,$password);
	
	
if(!empty($data))
{
	foreach($data as $val)
		{

      	$_SESSION['id']=$val['id'];
      	$_SESSION['nom']=$val['nom'];
        $_SESSION['login']=$val['login'];
		$_SESSION['mdp']=$val['mdp'];
		$_SESSION['role']= $val['role'];

	if (isset($check1)) 
		{
			setcookie('username',$username,time()+50000);
			setcookie('password',$password,time()+50000);
		}

		
           if($val['role']==1)  {header("location:index_Utilisateur.php"); }
	       else if ($val['role']==0) {header("location:index_professeur.php"); }
      	}
}
else
{
	echo "<script>alert('Incorrect username ou password');</script>";
}
}
else
{
	echo "<script>alert('Il faut remplire les champs username et password');</script>";
}
}

 ?>

</html>