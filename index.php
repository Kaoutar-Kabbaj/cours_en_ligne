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


<?php 

$dsn = 'pgsql:'
. 'host=ec2-54-225-127-147.compute-1.amazonaws.com;'
.'dbname=d54dn62mjkd08a ;'
.'user=xnlnrywqahiiep;'
.'port=5432;'
.'sslmode=require;'
.'password=0df30479f2ab19bb6aeae8c3a666274fdea141110bc393c9f0b995754cc97378';


try
{
  $db = new PDO($dsn);
 
}
catch(PDOException $pe)
{
  die('Connection error, because: ' .$pe->getMessage());
}




$query = 'CREATE TABLE IF NOT EXISTS `cours` (
  `id_cours` int(100) NOT NULL AUTO_INCREMENT,
  `nom_cours` varchar(150) NOT NULL,
  `format_cours` varchar(150) NOT NULL,
  `id_module` int(100) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_cours`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;';
$db->query($query);
 
$query = 'INSERT INTO `cours` (`id_cours`, `nom_cours`, `format_cours`, `id_module`, `Date`) 
VALUES
(23, 'Heuristique', 'doc/devoir_correction_04_2006_INGE4.pdf', 10, '2016-01-14 17:42:02'),
(24, 'SolutionsExercice2', 'doc/1. Introduction aux STR.pdf', 1, '2016-01-14 17:57:12'),
(25, 'programmation-sacados', 'doc/prog-dyn-sac-a-dos.pdf', 1, '2016-01-14 10:30:18'),
(26, 'Filtre adapte', 'doc/Filtre adapte2.pptx', 17, '2016-01-14 11:31:08'),
(27, 'InitiationMatlab', 'doc/tp-math-ing initiation matlab (2).pdf', 1, '2016-01-14 10:38:15'),
(28, 'IntroductionHeuristique', 'doc/heuristiques.pdf', 1, '2016-01-14 10:42:52'),
(30, 'corr-exo3', 'doc/corr-exo2.pdf', 1, '2016-01-14 14:31:55'),
(31, 'devoir_correction', 'doc/devoir_correction_.pdf', 16, '2016-01-14 10:44:08'),
(32, 'Rappels_Partie_Ordo', 'doc/Rappels_Partie_Ordo.pdf', 16, '2016-01-14 10:44:32'),
(33, 'recap_ordo', 'doc/recap_ordo.pdf', 16, '2016-01-14 10:44:56'),
(34, 'Soluce_TR', 'doc/Soluce_TR.pdf', 16, '2016-01-14 10:45:22'),
(35, 'td_correction', 'doc/td_correction.pdf', 16, '2016-01-14 10:45:54'),
(36, 'reseaux3G', 'doc/TP3G TDD Receiver Implementation Using Matlab (1).pdf', 15, '2016-01-14 10:56:06'),
(37, 'Exemplevideo', 'doc/Wildlife.wmv', 18, '2016-01-14 11:07:38'),
(39, 'TP', 'doc/TP 4.docx', 15, '2016-01-14 11:35:38'),
(44, 'combinatoire', 'doc/opt-comb-chap1-30oct-2015.pdf', 1, '2016-01-14 17:43:46'),
(46, 'Combinatoire-2', 'doc/opt-comb-chap1-30oct-2015.pdf', 1, '2016-01-14 17:55:11'),
(47, 'Nouveau', 'doc/opt-comb-chap1-30oct-2015.pdf', 1, '2016-01-14 18:03:12'),
(49, 'NouveauCours', 'doc/Partie 2.pdf', 1, '2016-01-14 18:07:19');
';
$db->query($query);
var_dump($db->errorInfo());

 ?> 
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