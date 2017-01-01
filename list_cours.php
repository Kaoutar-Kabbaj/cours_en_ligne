<?php 
@session_start();
if($_SESSION['role'] != 0) { header("Location:index_Utilisateur.php"); }
?>
<!DOCTYPE html>
<?php    
  include('import.php');
    $id_module = $_GET['id_module'];
?>
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

   <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="src/twbsResponsivePagination.js"></script>
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

 
 <style type="text/css">


      .pagination > li.overflow span:before {
        content: "...";
      }


.table {
    width: 80%;
    
    margin-bottom: 20px;
    background-color: white;
}
label{
padding: 0px;
    margin-bottom: 80px;
    font-size: 28px;
    color: rgb(120, 173, 201);
    border: 0;
    margin-top: 143px;
  }
  
.container {
    padding-right: 72px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
  </style>

  <script>
function confirme( identifiant ) 
  { 
    var confirmation = confirm( "Voulez vous vraiment supprimer ce cours?" ) ; 
    if( confirmation ) 
      { 
      document.location.href = "supprimer_cours.php?id_cours="+identifiant ; 
      } 


      $(function() {
 
  $("#demo_pag1").bs_pagination({
    totalPages: 100
  });
 
});
  } 
</script>
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
   
    <!--=========== END SLIDER SECTION ================-->

    <!--=========== BEGIN ABOUT US SECTION ================-->
  
    <!--=========== END OUR TUTORS SECTION ================-->
<section>
<?php  
        $module= new module();

        $data = $module->select_one_module($id_module);
      foreach($data as $val) {
        ?>
 <div class="container" id="demo_pag1">
<table class="table table-hover" border="1" width="80%" >

      <label>Liste des cours selon le module :&ensp;<?php echo utf8_encode($val['nom']);}?></label>
      <p><?php if (isset($_GET['message']) && $_GET['message'] = "UpdateMsg") 
        {
          echo "<div class='alert alert-success' style='width: 830px;'>
                   Votre modification est faite avec <strong>succès!</strong>
                </div>";
        } 

   if (isset($_GET['msg']) && $_GET['msg'] = "UpdateMsg2") {
     echo "<div class='alert alert-success' style='width: 830px;'>
                   Votre cours est bien <strong>ajouté!</strong>
                </div>";

       }




        ?></p>

      
      <?php 
        $cours= new cours();

      $data = $cours->Nombre_cours($id_module);
      foreach($data as $valeur) {?>
   <?php  $Nombre_cours=$valeur['total']; }?>
  

 
      <tbody class="table-bordered">
      <tr>
      <th class="active">Nom du cours </th>
      <th class="active">Action</th>
        </tr>

     <?php 
        $cours= new cours();
      $data = $cours->select_by_module($id_module);
      foreach($data as $valeur) {?>
    

      <tr>
          <td><?php echo $valeur['nom_cours']; ?></td>
          <td colspan="3"><a href="<?php echo $valeur['format_cours'];  ?>"  target ="_Blank"> <img src="images/consulter.png" alt= "Consulter" title="consulter"></a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
          <a href="modifier_cours.php?id_cours=<?php echo $valeur['id_cours']; ?>&param=update" ><img src="images/modifier.png" alt= "Modifier" title="modifier"></a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
              <a  href="supprimer_cours.php?id_cours=<?php echo $valeur['id_cours']; ?>&param=delete" onclick="return confirm('Voulez-vous vraiment supprimer ce cours?');"><img src="images/supprimer.png" alt= "Supprimer" title="Supprimer"></a></td>
      </tr>
    <?php } ?>
    </tbody>
    </table>


<div  id='ex2'>
 <nav align="center">
  <ul class="pagination">
    <?php 

      $perPage=4; 
      $nbrPages=ceil($Nombre_cours/$perPage) ;?>


    <?php  for($i=1;$i<=$nbrPages;$i++) {
 

  ?><li> <?php echo "<a href=list_cours.php?id_module=$id_module&amp;p=$i>$i  </a> ";

    }?></li>




    </ul>
          </nav>

</div>






</section>

   
        
         
         
           
     


<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="src/twbsResponsivePagination.js"></script>
 <script>
      $(function() {
       
    $('#ex2').find('.pagination').twbsResponsivePagination();
      });
    </script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


    <!--=========== END FOOTER SECTION ================--> 
<footer id="footer"><?php include('includes/footer.php'); ?></footer>
  

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