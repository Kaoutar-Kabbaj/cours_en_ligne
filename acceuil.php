<?php 
echo "<div height='100px'>";
include('testconnexion.php');//Tes des informations 
echo "</div><br>";

$role = $_SESSION['role'];//
$id = $_SESSION['id'];

$query = "SELECT utilisateur.role  , contact.id_contact , contact.nom_prenom , contact.email , contact.tel ,contact.avatar ,contact.id_user
FROM contact , utilisateur WHERE 
utilisateur.id = contact.id_user AND
contact.id_user=$id";
$resultat = mysql_query($query);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Gestion contacts</title>
 	<meta charset="UTF-8">
 	<style type="text/css">
 	fieldset 
 	{
 		width:420px;
 		height: 130px;
 		border-color: white;
 		background-color: white;
 		border-radius: 30px;
 	}
 	legend
 	{
 		text-transform: uppercase;
 		font-weight: bold;
 		float:center;
 		background-color: white;
 		border-color: black;
 		border-radius: 5px;
 	}
 	div#avatar
 	{
 		float: right;
 		position: relative;
 		border-radius: 30px;
 		box-shadow: 4px 4px 4px 4px #ccc;
 	}
 	div#avatar img
 	{
 		border-radius: 30px;
 		box-shadow: 4px 4px 4px 4px #ccc;
 	}
 	 div#contact
 	 {
 	 	width:300px;
 		height: 100px;
 		border-color: white;
 		background-color: white;
 	 }
 	 a
 	 {
 	 	text-decoration: none;
 	 	color: orange;
 	 	font-weight: bold;
 	 }
 	</style>
 </head>
 <?php 

while ($ligne = mysql_fetch_assoc($resultat)) 
{?>
 <body>
 <center>
 <fieldset>
 <legend>Contact <?php echo $ligne['id_contact']; ?></legend>
<div id="contact">
<div id="avatar">
	<img src="<?php echo $ligne['avatar']; ?>" width="110" height="110" />
</div>
	<label><b>Nom :<?php echo $ligne['nom_prenom']; ?></b></label><br>
	<label><b>Email : <?php echo $ligne['email']; ?></b></label><br>
	<label><b>Telephone :<?php echo $ligne['tel']; ?></b></label><br>
	<div id="modification">
	<label><a href="update.php?code=<?php echo $ligne['id_contact']; ?>&nom_prenom=<?php echo $ligne['nom_prenom']; ?>&email=<?php echo $ligne['email']; ?>&tel=<?php echo $ligne['tel']; ?>&avatar=<?php echo $ligne['avatar']; ?>">Modifier</a></label>
	<label><a href="delete.php?code=<?php echo $ligne['id_contact']; ?>">Supprimer</a></label><br>
	</div>
</div>
</fieldset>
</center>
<br><?php 

if ($ligne['role'] != 1) 
{
	echo "<style type='text/css'> div#modification {  display:none; } </style>";
}

 ?>
 </body>
 <?php } ?>
 </html>