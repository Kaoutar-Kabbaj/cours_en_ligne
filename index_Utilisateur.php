<?php 
@session_start();
//var_dump($_SESSION['role']);
if($_SESSION['role'] != 1) { header("Location:presentation.php"); }
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
	

.scrollToTop {
    background: url("img/bootom-top-arrow.png") no-repeat scroll 13px 12px #ffffff;
    border: 3px solid #f0f1f3;
    border-radius: 5px;
    bottom: 20px;
    display: inline-block;
    height: 54px;
    opacity: 0;
    position: fixed;
    right: 20px;
    text-align: center;
    width: 54px;
    z-index: 100;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
}
   #scroll_box {
    height: 100px;
    width: 200px;
    overflow: hidden;

  }

  .navbar-form {
    /* width: 213px; */
    padding-top: 16px;
    padding-bottom: 0;
    margin-right: -2px;
    margin-left: 5px;
    border: 0;
    -webkit-box-shadow:navbar-form;
    box-shadow: none;
}

  .container {
    padding-right: 0px;
    padding-left: 0px;
    margin-right: auto;
    margin-left: auto;
}
  
.dropdown-submenu {
    position:relative;
}


.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 10px;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 373px;
    padding: 5px 15px;
    margin: 51px 81px 68px;
    font-size: 16px;
    text-align: left;
    /* list-style: none; */
    background-color: #48575A;
    /* -webkit-background-clip: padding-box; */
    /* background-clip: padding-box; */
    /* border: 1px solid #ccc; */
    /* border: 1px solid rgba(0,0,0,7); */
    border-radius: 19px;
    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,175);
    /* box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175); */
}
.dropdown-submenu>.dropdown-menu {
    top:0;
    left:100%;
    margin-top:-6px;
    margin-left:-1px;
    -webkit-border-radius:0 6px 6px 6px;
    -moz-border-radius:0 6px 6px 6px;
    border-radius:0 6px 6px 6px;
}
.dropdown-submenu:hover>.dropdown-menu {
    display:block;
}
.dropdown-submenu>a:after {
    display:block;
    content:" ";
    float:right;
    width:0;
    height:0;
    border-color:transparent;
    border-style:solid;
    border-width:5px 0 5px 5px;
    border-left-color:#cccccc;
    margin-top:5px;
    margin-right:-10px;
}
.dropdown-submenu:hover>a:after {
    border-left-color:#ffffff;
}
.dropdown-submenu.pull-left {
    float:none;
}
.dropdown-submenu.pull-left>.dropdown-menu {
    left:-100%;
    margin-left:10px;
    -webkit-border-radius:6px 0 6px 6px;
    -moz-border-radius:6px 0 6px 6px;
    border-radius:6px 0 6px 6px;
}

.navbar-nav>li>.dropdown-menu {
    margin-top: 0;
    border-top-left-radius: 18;
    border-top-right-radius: 13;
}
p {
    margin: 0 0 10px;
    font-size: 20px;
    text-align: justify;
}




	</style>

  </head>
<body onload="javascript:StartScroll('scroll_box');">   

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
         <div class="container">
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
              <a class="navbar-brand" href="index_Utilisateur.php">E-<span>Learning</span> &ensp;&ensp;Bienvenue&ensp;<?php echo  $_SESSION["nom"] ; ?>  ! </a> 
                         
              <!-- IMG BASED LOGO  -->
               <!-- <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a>  -->            
                     
            </div>
         
       

              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
              <li class="active"><a href="index_Utilisateur.php">Accueil</a></li>
                

                
               


            <li>

         
         
 <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="#">
                Mes Cours<span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
         <?php 
   include('import.php');
  $filiere = new filiere();
  $data = $filiere->select_all();
  $module = new module();
    $cours = new cours();
  
      foreach($data as $val)
  {
  $id_filiere = $val['id'];
  $data_module = $module->select_by_id($id_filiere);

  ?>     
         <li class="dropdown-submenu">

                <a href="#"><?php  echo utf8_encode($val['nom']);?></a>
              <ul class="dropdown-menu">
<?php
    
   foreach($data_module as $val_module)
  { 
    $id_module = $val_module['id'];
    $data_cours = $cours->select_by_module2($id_module);
    ?>


                
       
                  <li class="dropdown-submenu">
                      <a href="#"><?php  echo utf8_encode($val_module['nom']);?></a>
                      <ul class="dropdown-menu ">
                       <?php foreach($data_cours as $val_cours) {  ?>
                         <li><a href="<?php echo $val_cours['format_cours'];?>"  target ="_Blank"><small>
                      &ensp;<?php echo utf8_encode($val_cours['nom_cours']); ?></a></BR></small> </li>
                         
                      <?php } ?>
                       </ul>

         
     


                    </li>
<?php }?>
  </ul>

             
      </li>
     <?php }?>  
  </ul>




</li>


















              


              <li>
			   <!-- une zone de recherche --> 
			  <form class="navbar-form navbar-left" role="button" action="Recherche.php" method="GET">
                
          <input type="text" class="form-control" name="search_field" placeholder="Mot clé !" >
            
         <button type="submit" class="btn btn-primary btn-sm" name="search_button" >
         <span class="glyphicon glyphicon-search">
         </form>  
              </li>
              
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
    <section id="slider">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="slider_area">
            <!-- Start super slider -->
            <div id="slides">
              <ul class="slides-container">                          
                <li>
                  <img src="img/slider/2.jpg" alt="img">
                   <div class="slider_caption">
                    <h2>Université Mundiapolis</h2>
                    <p>Enseignement supérieur</p>
                    <a class="slider_btn" href="http://www.mundiapolis.ma">en savoir plus</a>
                  </div>
                  </li>
                <!-- Start single slider-->
                <li>
                  <img src="img/slider/3.jpg" alt="img">
                   <div class="slider_caption slider_right_caption">
                    <h2>Université Mundiapolis</h2>
                    <p>Enseignement supérieur</p>
                    <a class="slider_btn" href="http://www.mundiapolis.ma">en savoir plus</a>
                  </div>
                </li>
                <!-- Start single slider-->
                <li>
                  <img src="img/slider/4.jpg" alt="img">
                   <div class="slider_caption">
                   <h2>Université Mundiapolis</h2>
                    <p>Enseignement supérieur</p>
                    <a class="slider_btn" href="http://www.mundiapolis.ma">en savoir plus</a>
                  </div>
                </li>
              </ul>
              <nav class="slides-navigation">
                <a href="#" class="next"></a>
                <a href="#" class="prev"></a>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END SLIDER SECTION ================-->

    <!--=========== BEGIN ABOUT US SECTION ================-->
    
    <!--=========== END SLIDER SECTION ================-->

    <!--=========== BEGIN ABOUT US SECTION ================-->
  <section id="aboutUs">

      <div class="container">

        <div class="row">
       
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="aboutus_area wow fadeInLeft">
          </div>
         <h2 ><u>À propos</u></h2>
         <br>
         <br>
         <p> Nos cours en ligne sont le moyen le plus accessible d’acquérir 
         de nouvelles compétences.</p>
        <p> Où que vous soyez, vous bénéficiez d'un encadrement souple et d'un matériel
         pédagogique conçu spécialement pour vous.</p>
        <p> Nos cours en ligne vous permettent d'allier vos études avec vos obligations familiales ou professionnelles. 
         </p>

        </div>

        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="newsfeed_area wow fadeInRight">
            <ul class="nav nav-tabs feed_tabs" id="myTab2">
              <li class="active"><a href="#news" data-toggle="tab">Les derniers cours publiés</a></li>
              


            </ul>

             


             
            <!-- Tab panes -->
            <div class="tab-content">
              <!-- Start news tab content -->
              <div class="tab-pane fade in active" id="news">                
                <ul class="news_tab">

                <?php 
                       $cours= new cours();
                       $data = $cours->select_by_Date();
                       foreach($data as $valeur) {?>
                  <li>
                    <div class="media">

                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="img/cours.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                      
                   <a href="<?php echo $valeur['format_cours'];  ?>" target ="_Blank"><?php echo utf8_encode($valeur['nom_cours']); ?></a>
                  <span class="feed_date"><?php echo utf8_encode($valeur['Date']);?></span>
                       <?php } ?>
                      </div>
                    </div>                    
                  </li>
                 
                </ul>                
               
              </div>
              <!-- Start notice tab content -->  
             

            
          
       

 </div>

      </div>
    </section>
    <!--=========== END OUR TUTORS SECTION ================-->



    <!--=========== BEGIN STUDENTS TESTIMONIAL SECTION ================-->
          <!-- End single student testimonial -->
            
    <!--=========== END STUDENTS TESTIMONIAL SECTION ================-->    
    
    <!--=========== BEGIN FOOTER SECTION ================-->
   
      <!-- Start footer top area -->
      
   <footer id="footer"><?php include('includes/footer.php'); ?></footer>
      <!-- End footer bottom area -->
  
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