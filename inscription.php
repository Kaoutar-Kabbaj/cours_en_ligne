<HTML>
<HEAD>
<style >
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro);
body {
 background-image: url("images/photo_bg.jpg");
   
	 
  	-webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	  background-size:1400px;
    padding-top:100px;
}

form{ margin-left: auto;
    margin-right: auto;
    width: 292px;
    height: 405px;
    padding: 30px;
    border: 1px solid rgba(0,0,0,.2);
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    background: rgba(0, 0, 0, 0.6);
    -moz-box-shadow: 0 0 13px 3px rgba(0,0,0,.5);
    -webkit-box-shadow: 0 0 13px 3px rgba(0,0,0,.5);
    box-shadow: 0 0 13px 3px rgba(0,0,0,.5);
    overflow: hidden;
}

textarea{
	  background: rgba(255, 255, 255, 0.4) url(http://luismruiz.com/img/gemicon_message.png) no-repeat scroll 16px 16px; 
    width: 276px;
    height: 110px;
    border: 1px solid rgba(255,255,255,.6);
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box; 
    display:block;
    font-family: 'Source Sans Pro', sans-serif;
    font-size:18px;
    color:#fff;
    padding-left:45px;
    padding-right:20px;
    padding-top:12px;
    margin-bottom:20px;
    overflow:hidden;
}



input[type=submit] {
    cursor:pointer;
}

input.name {
	  background: rgba(255, 255, 255, 0.4) url(http://luismruiz.com/img/gemicon_name.png) no-repeat scroll 16px 16px; 
	  padding-left:45px;

      width: 276px;
    height: 48px;
    border: 1px solid rgba(255,255,255,.4);
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box; 
    display:block;
    font-family: 'Source Sans Pro', sans-serif;
    font-size:18px;
    color:#fff;
    padding-left:20px;
    padding-right:20px;
    margin-bottom:20px;
}

input.prenom {
	  background: rgba(255, 255, 255, 0.4) url(http://luismruiz.com/img/gemicon_name.png) no-repeat scroll 16px 16px; 
	  padding-left:45px;
      width: 276px;
    height: 48px;
    border: 1px solid rgba(255,255,255,.4);
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box; 
    display:block;
    font-family: 'Source Sans Pro', sans-serif;
    font-size:18px;
    color:#fff;
    padding-left:20px;
    padding-right:20px;
    margin-bottom:20px;
}


input.login {
	  background: rgba(255, 255, 255, 0.4) url(http://luismruiz.com/img/gemicon_name.png) no-repeat scroll 16px 16px; 
	  padding-left:45px;
      width: 276px;
    height: 48px;
    border: 1px solid rgba(255,255,255,.4);
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box; 
    display:block;
    font-family: 'Source Sans Pro', sans-serif;
    font-size:18px;
    color:#fff;
    padding-left:20px;
    padding-right:20px;
    margin-bottom:20px;
}

input.pwd {
	  background: rgba(255, 255, 255, 0.4) url(http://luismruiz.com/img/gemicon_name.png) no-repeat scroll 16px 16px; 
	  padding-left:45px;
      width: 276px;
    height: 48px;
    border: 1px solid rgba(255,255,255,.4);
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box; 
    display:block;
    font-family: 'Source Sans Pro', sans-serif;
    font-size:18px;
    color:#fff;
    padding-left:20px;
    padding-right:20px;
    margin-bottom:20px;
}

input.email {
	  background: rgba(255, 255, 255, 0.4) url(http://luismruiz.com/img/gemicon_email.png) no-repeat scroll 16px 20px;
	  padding-left:45px;
      width: 276px;
    height: 48px;
    border: 1px solid rgba(255,255,255,.4);
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box; 
    display:block;
    font-family: 'Source Sans Pro', sans-serif;
    font-size:18px;
    color:#fff;
    padding-left:20px;
    padding-right:20px;
    margin-bottom:20px;
}

input.message {
	  background: rgba(255, 255, 255, 0.4) url(http://luismruiz.com/img/gemicon_message.png) no-repeat scroll 16px 16px;
	  padding-left:45px;
      width: 276px;
    height: 48px;
    border: 1px solid rgba(255,255,255,.4);
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box; 
    display:block;
    font-family: 'Source Sans Pro', sans-serif;
    font-size:18px;
    color:#fff;
    padding-left:20px;
    padding-right:20px;
    margin-bottom:20px;
}




::-webkit-input-placeholder {
	  color: #fff;
}

:-moz-placeholder{ 
    color: #fff; 
}

::-moz-placeholder {
    color: #fff;
}

:-ms-input-placeholder {  
	  color: #fff; 
}

input:focus, textarea:focus { 
	  background-color: rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 0 0 5px 1px rgba(255,255,255,.5);
    -webkit-box-shadow: 0 0 5px 1px rgba(255,255,255,.5);
    box-shadow: 0 0 5px 1px rgba(255,255,255,.5);
	  overflow: hidden; 
}

.btn {
   
    width: 123px;
    height: 45px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 38px;
    border-radius: 4px;
    float: right;
    border: 3px solid #253737;
    background: #416b68;
    background: -webkit-gradient(linear, left top, left bottom, from(#6da5a3), to(#416b68));
    background: -webkit-linear-gradient(top, #6da5a3, #416b68);
    background: -moz-linear-gradient(top, #6da5a3, #416b68);
    background: -ms-linear-gradient(top, #6da5a3, #416b68);
    background: -o-linear-gradient(top, #6da5a3, #416b68);
    background-image: -ms-linear-gradient(top, #6da5a3 0%, #416b68 100%);
    padding: 6.5px 18px;
    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    border-radius: 14px;
    -webkit-box-shadow: rgba(255,255,255,0.1) 0 1px 0, inset rgba(255,255,255,0.7) 0 1px 0;
    -moz-box-shadow: rgba(255,255,255,0.1) 0 1px 0, inset rgba(255,255,255,0.7) 0 1px 0;
    box-shadow: rgba(255,255,255,0.1) 0 1px 0, inset rgba(255,255,255,0.7) 0 1px 0;
    text-shadow: #333333 0 1px 0;
    color: #e1e1e1;
}

.btn:hover {
    border: 1px solid #253737;
    text-shadow: #333333 0 1px 0;
    background: #416b68;
    background: -webkit-gradient(linear, left top, left bottom, from(#77b2b0), to(#416b68));
    background: -webkit-linear-gradient(top, #77b2b0, #416b68);
    background: -moz-linear-gradient(top, #77b2b0, #416b68);
    background: -ms-linear-gradient(top, #77b2b0, #416b68);
    background: -o-linear-gradient(top, #77b2b0, #416b68);
    background-image: -ms-linear-gradient(top, #77b2b0 0%, #416b68 100%);
    color: #fff;
 }

.btn:active {
    margin-top:1px;
    text-shadow: #333333 0 -1px 0;
    border: 1px solid #253737;
    background: #6da5a3;
    background: -webkit-gradient(linear, left top, left bottom, from(#416b68), to(#416b68));
    background: -webkit-linear-gradient(top, #416b68, #609391);
    background: -moz-linear-gradient(top, #416b68, #6da5a3);
    background: -ms-linear-gradient(top, #416b68, #6da5a3);
    background: -o-linear-gradient(top, #416b68, #6da5a3);
    background-image: -ms-linear-gradient(top, #416b68 0%, #6da5a3 100%);
    color: #fff;
    -webkit-box-shadow: rgba(255,255,255,0) 0 1px 0, inset rgba(255,255,255,0.7) 0 1px 0;
    -moz-box-shadow: rgba(255,255,255,0) 0 1px 0, inset rgba(255,255,255,0.7) 0 1px 0;
    box-shadow: rgba(255,255,255,0) 0 1px 0, inset rgba(255,255,255,0.7) 0 1px 0;
   }
h1#title {
    font-family: 'Roboto Slab', serif;
    font-size: 3.2em;
    color: rgba(255,255,255,0.7);
    text-shadow: 0 0 10px rgb(214, 188, 138);
    margin: -25px auto;
    padding-top: 108$px;
    max-width: 300px;
    text-align: justify;
    position: relative;
    top: -46px;
}
user agent stylesheeth1 {
    display: block;
    font-size: 2em;
    -webkit-margin-before: 0.67em;
    -webkit-margin-after: 0.67em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    font-weight: bold;
}
   #logo {
    -webkit-animation-duration: 1s;
    -webkit-animation-delay: 2s;
}


</style>

<script language="javascript">
        /*
            Via ce script vous spécifiez que l'email doit : 
            - contenir une arobase et un point
            - avant la présence de l'arobase nous pouvons trouver, des lettres quelconques
                (en minuscule ou majuscule), n'importe quel chiffre, et les caractères "-" ou "_"
            - aprés l'arobase, la vérification reste la même mais on interdit la présence de "_"
                et il faut impérativement au moins de caractères entre l'arobase et le point
            - aprés le point, nous devons une succession de 2 ou 3 caractères doivent être
                présentes afin de pouvoir valider l'adresse email.  

        
*/

        
        
        function validation()
        {
            var email   = document.formulaire.EMAIL.value.toLowerCase();

            var verif   = /^[a-zA-Z0-9_-]{1,}[.][a-zA-Z0-9_-]+@[mundiapolis]{2,}[.][ma]{2,3}$/
            if (verif.exec(email) == null)
            {
                alert("Votre email est incorrecte");
                return false;
            }
            else
            {
                alert("Votre email est correcte");
                return true;
            }   

        }
</script>
</head>
<BODY>
<h1 id="title" class="hidden"><span id="logo">I<span>nscription</span></span></h1>
<form name="formulaire" onsubmit="return validation();" method="POST">

		<input name="name" placeholder="Entrer votre nom!" class="name" required />
		<input name="prenom" placeholder="Entrer votre prenom!" class="prenom" required />
		<input name="login" placeholder="Entrer votre login!" class="login" required />
		<input name="psw" placeholder="Entrer votre mot de passe!" class="pwd" required />
	    <input name="EMAIL" placeholder="Entrer votre Email!" class="email" type="email" size=35/> 
        <input type="radio" name="role" value="1"  /><B style="font-family: 'Roboto Slab', serif;
        font-size: 20px ;color: white;text-shadow: 0 0 10px rgb(0, 0, 0);">Etudiant</B>&ensp;&ensp;&ensp;&ensp;&ensp;
        <input type="radio" name="role" value="0"  /><B style="font-family: 'Roboto Slab', serif;
        font-size: 20px ;color: white;text-shadow: 0 0 10px rgb(0, 0, 0);">Professeur</B>  
        <br><br>
        <input name="submit" class="btn" type="submit" value="Envoyer" />
</form>
</BODY>
</HTML>
<?php 
include('import.php');
include('connexion.php');
if (isset($_POST['submit'])) 
{

    extract($_POST);
    $user = new Utilisateur();
    $user->setnom_utilisateur($name);
    $user->setprenom_utilisateur($prenom);
    $user->setlogin_utilisateur($login);
    $password = md5($psw);
    $user->setmdp_utilisateur($password);
    $user->setemail_utilisateur($EMAIL);
    $user->setrole_utilisateur($role);
    
    $query = "SELECT  * FROM utilisateur where email='$EMAIL' ";
        //var_dump($query);
   $resultat = $db->query($query) or die('Erreur de requete : '.mysql_error());
    $nombre_utilisateur = $resultat->rowCount();
    if($nombre_utilisateur < 1){

    $user->ajouter_utilisateur($user); 
    echo "<script>alert('Votre insertion est bien passé!');</script>";
    header("location:index.php");
   /* header("location:suiteinscription.php?login=".$login."&motdepasse=".$psw."");*/

    }
        else{
            echo "<script>alert('Attention votre compte existe deja dans notre site !');</script>";
            
        }
        



   
  
    # code...
  
    }




 ?>