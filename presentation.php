<?php 
@session_start();
if($_SESSION['role'] != 0) { header("Location:index_Utilisateur.php"); }
?>
<html>
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

 
 <style type="text/css">
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
  
.container {
    padding-right: 72px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

table {
    background-color: #FFFFF2;
}
h2 {
    color: rgb(44, 173, 187);
    font-size: 30px;
    font-weight: 700;
    line-height: 40px;
    margin: 0;
    padding-bottom: 10px;
}
legend {
    display: block;
    width: 100%;
    padding: -3px;
    margin-bottom: 35px;
    font-size: 41px;
    line-height: inherit;
    color: #36B1BE;
    border: 14;
    border-bottom: 2px solid #e5e5e5;
    margin-top: 143px;
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
    
    <!--=========== END SLIDER SECTION ================-->

    <!--=========== BEGIN ABOUT US SECTION ================-->
  
    <!--=========== END OUR TUTORS SECTION ================-->
<section>


 <div class="container">
  <legend align="center">Gérer les cours</legend>

  <h2>Veuillez sélectionner une filière !</h2>
  <p> </p>
<form role="form">
    <div class="form-group">
      
        
<table>
    <?php 
   include('import.php');
  $fil = new filiere();
  $data = $fil->select_all();
  ?>
   <!-- Ici on selectionne une catégorie selon sont identifiant -->
  
      <select class="form-control" id="select" name="select">
  
      <option>Sélectionner une filière...</option>
   <?php foreach($data as $val){  ?>

     <option value="<?php  echo $val['id'];  ?>" ><?php echo utf8_encode($val['nom']); ?></option>  
   <?php } ?>
  </select>

  </td>

  </tr>
  </table>
   <br></br>
  <table  class="table table-hover"  width="80%">
   
    <tr>
      <th class="active">Nom du module</th>
      
    </tr>
     <tbody  class="table-bordered" id="BodyTable">
      
    </tbody>
  </table>


  
  
    </div>


</div>



</section>
<script type="text/javascript" src="js/jquery.min_2.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

    $('#select').change(function()
    {
      
      var id_module = $('#select').val();
      

      $.ajax({
              type:"POST",
              url: 'select_by_module.php',
              data: 'id_module='+id_module,
              success:function(data)
              {
                $('#BodyTable').html(data);
              },
              error:function(data)
              {
                $('#BodyTable').html(data);
              }
          });

    });
    /**/

  });
</script>
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