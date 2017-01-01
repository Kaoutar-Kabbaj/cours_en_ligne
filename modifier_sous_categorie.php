<html>
<head>
 	<title>Page de traitement </title>
 	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style/style.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<script src="js/jquery.min_2.js"></script>
	<script src="js/bootstrap.min.js"></script>
 </head>
 
 <body>
<div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">Elearning<span class="logo_colour"></span></a></h1>
          <h2>Bienvenue!</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="presentation.php">Gerer les cours</a></li>
          <li><a href="ajout.php">Ajouter Cours</a></li>
          
          <li><a href="another_page.html">Deconnexion</a></li>
         
        </ul>
      </div>
 
 
 
<body>
 <center>
 <br><br><br>
 <form action="" method="POST">
 <fieldset>
  <legend>Gérer les cours</legend>
<?php 
include('import.php');
if (isset($_GET['id_cours'])) 
{
$id_cours = $_GET['id_cours'];
$cours  = new cours();
$data = $cours->select_by_cours($id_cours);
?>
  <table border="1" width="80%">
    <tr>
      <th>Nom cours</th>
      <th>Format cours</th>
      <th>Categorie cours</th>
      <th>Action</th>
    </tr>



    <tr>
    <?php foreach ($data as $value) {?>
      <td><input type="hidden" name="code_cours" value="<?php echo $_GET['id_cours']; ?>">
      <input type="text" name="nom_cours" value="<?php echo utf8_encode($value['nom_cours']); ?>" /></td>

      <td><!-- Ici en selectionne une catégorie selon sont identifiant -->
         <select id="select" name="select" >
           <option>Selectioné une categorie ...</option>
           <?php 
            $sous_categorie = new sous_categorie();
            $data = $sous_categorie->select_all();
           foreach($data as $val){  ?>
             <option value="<?php  echo $val['id'];  ?>" ><?php echo utf8_encode($val['nom']); ?> </option>
             <?php } ?>
        </select>
      </td>
      <!-- J'ai ajouter l'attribut readonly pour ne pas changer le lien de fichier a la base -->
      <td><input type="text" name="format_cours" value="<?php echo $value['format_cours']; ?>" readonly/></td>
      <td><input type="submit" name="update_code" value=" Valider " /></td>
    </tr>
    <?php }
      } ?>
  </table>
 </fieldset>
 </form>
 <?php 
if (isset($_POST['update_code'])) 
{
    extract($_POST);
    $cours  = new cours();
    $cours->setid_cours($code_cours);
    $cours->setnom_cours($nom_cours);
    $cours->setformat_cours($format_cours);
    $cours->setidcat_cours($select);

    $cours->update_cours($cours);
    header("Location:presentation.php");
}

  ?>
 </center>
 </body>
 </html>
    