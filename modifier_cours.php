<?php 
@session_start();
if($_SESSION['role'] != 0) { header("Location:index_Utilisateur.php"); }
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Elearning</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSS 
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css"> 
    <!-- preloader -->
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
   <link href="css/style2.css" rel="stylesheet">
    <script src="js/jquery.min_2.js"></script>
    <script src="js/bootstrap.min.js"></script>

 
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script>
function myFunction() 
  { 
    alert('Votre document a ete modifié!');
  
  } 
  </script>
 
 <style type="text/css">
  
.container {
    padding-right: 72px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
 legend {
   display: block;
    width: 100%;
    padding: -3px;
    margin-bottom: 35px;
    font-size: 41px;
    line-height: inherit;
    color: #337ab7;
    border: 14;
    border-bottom: 2px solid #e5e5e5;
    margin-top: 143px;
}
.table {
    width: 100%;
    margin-bottom: 20px;
    background-color: white;


}


.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
  </style>
  </head>
<body style="background-image: url('images/spirale.gif');background-attachment:fixed"> 

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->
              <!-- TEXT BASED LOGO -->
             
                         
            
              <a class="navbar-brand" href="index_Utilisateur.php">E<span>Learning</span> &ensp;&ensp;Bienvenue&ensp;<?php echo  $_SESSION["nom"] ; ?>  ! </a> </div>
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">

              <li class="active"><a href="index_professeur.php">Accueil</a></li>
                
                <li ><a href="presentation.php">Gerer les cours</a></li>
               <li><a href="ajout.php">Ajouter Cours</a></li>  

              
               <li><a href="Deconnexion.php?test=1">Deconnexion</a></li>
                               
               
                </ul>           
            </div><!--/.nav-collapse -->
          </div> 

               
	
        		  
        </nav>  
      </div>

               
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================--> 

    <!--=========== BEGIN SLIDER SECTION ================-->
 
    <!--=========== END SLIDER SECTION ================-->

    <!--=========== BEGIN ABOUT US SECTION ================-->
  
    <!--=========== END OUR TUTORS SECTION ================-->
<section>


 <div class="container">
  
<br><br><br>
<!-- Code -->
<?php 
include('import.php');
$message = "";
if (isset($_POST['update_code'])) 
{
   include('connexion.php');
   $id_module=$_POST['select']; 
   extract($_POST);
   $extensions = 
  array('pdf','PDF','txt','TXT','doc','DOC','docx','DOCX',
    'ppt','PPT','pptx','PPTX','xsl','XLS','xslx','XLSX',
    'mp4','MP4','flv','FLV','avi','AVI','wmv','WMV');

//_______________________________________________

  $doc_name = $_FILES['doc']['name'];
  $doc_type = $_FILES['doc']['type'];
  $doc_size = $_FILES['doc']['size'];
  $doc_tmp_name = $_FILES['doc']['tmp_name'];

  if (empty($doc_name) OR $doc_name == null OR $doc_name == '') 
      {
        $message = "<div class='alert alert-danger'>
               <strong>Attention!</strong> SVP  veuillez sélectionner un fichier !
              </div>";
      }
      else{
  $file_parts = pathinfo($doc_name);
  //var_dump($file_parts);
  $file_exetention = $file_parts['extension'];
  if (in_array($file_exetention, $extensions)) 
  {
      move_uploaded_file($doc_tmp_name, "doc/$doc_name");
      $cours  = new cours();
      $cours->setid_cours($code_cours);
      $cours->setnom_cours($nom_cours);
      $cours->setformat_cours("doc/$doc_name");
      
      $cours->setid_module($select);
      $cours->update_cours($cours);
      $message = "<div class='alert alert-success'>
                 Votre modification est faite avec  <strong>succès!</strong> 
                </div>";
      ?><META HTTP-EQUIV="Refresh"  CONTENT="10;URL=list_cours.php?id_module=<?php echo $id_module; ?>&message=UpdateMsg" ><?php
  }
   else 
  {
      $message = "<div class='alert alert-danger'>
                <strong>Attention!</strong> Erreur d'extension !.
              </div>";
  }
}
}
  ?>
<!-- /Code -->
 <form action="" method="POST" enctype="multipart/form-data">
 
  <legend >Modifier les cours</legend>
  <?php if (isset($message)) 
  {
    echo $message;
  } ?>
<?php 
if (isset($_GET['id_cours'])) 
{
$id_cours = $_GET['id_cours'];
$cours  = new cours();
$data = $cours->select_by_cours($id_cours);
?>
  <table class="table table-hover" width="80%">
  <tbody class="table-bordered">
    <tr>
      <th class="active">Nom cours</th>
      <th class="active">Module du cours</th>
      <th class="active">Format cours</th>
      <th class="active">Action</th>
    </tr>
  
    <tr>
    <?php foreach ($data as $value) {?>
      <td><input type="hidden" name="code_cours" value="<?php echo $_GET['id_cours']; ?>" />
      <input type="text" name="nom_cours" value="<?php echo utf8_encode($value['nom_cours']); ?>" required="required" /></td>

      <td><!-- Ici on selectionne une catégorie selon sont identifiant -->
     
         <select  class="form-control" id="select" name="select" required="required">
           <?php 
            $module = new module();
            $data = $module->select_all();
           foreach($data as $val){
            $id_module_db = $val['id'];
             ?>
             <option></option>
             <option value="<?php  echo $val['id'];  ?>" ><?php echo utf8_encode($val['nom']); ?> </option>
             <?php } ?>
             <td> <span class="btn btn-default btn-file">Veuillez ajouter votre fichier<input type="file" name="doc"  /></span>
  
  
        </select>
      </td>
      <!-- J'ai ajoute l'attribut readonly pour ne pas changer le lien de fichier a la base -->
      <td><input type="submit" name="update_code" value=" Valider" class="btn btn-primary btn-sm"  /></td>

      

    </tr>
      <?php }
      } ?>
        </tbody >
  </table>

 </form>



</div>



</section>

    <!--=========== BEGIN STUDENTS TESTIMONIAL SECTION ================-->
          <!-- End single student testimonial -->
            
    <!--=========== END STUDENTS TESTIMONIAL SECTION ================-->    
    
    <!--=========== BEGIN FOOTER SECTION ================-->
  <footer id="footer"><?php include('includes/footer.php'); ?></footer>
    <!--=========== END FOOTER SECTION ================--> 

  

    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Preloader js file -->
    <script src="js/queryloader2.min.js" type="text/javascript"></script>
    <!-- For smooth animatin  -->
    <script src="js/wow.min.js"></script>  
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>
    <!-- superslides slider -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.animate-enhanced.min.js"></script>
    <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>   
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>   
   
    <!-- Custom js-->
    <script src="js/custom.js"></script>
    <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->


  </body>
</html>