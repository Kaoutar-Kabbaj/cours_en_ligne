<?php 
//
$message = "";
if (isset($_POST['add_cours'])) 
{ 
  include('connexion.php');
  $id_module=$_POST['select']; 
  $extensions = 
  array('pdf','PDF','txt','TXT','doc','DOC','docx','DOCX',
    'ppt','PPT','pptx','PPTX','xsl','XLS','xslx','XLSX',
    'mp4','MP4','flv','FLV','avi','AVI','wmv','WMV');

  extract($_POST);
//_______________________________________________

  $doc_name = $_FILES['doc']['name'];
  $doc_type = $_FILES['doc']['type'];
  $doc_size = $_FILES['doc']['size'];
  $doc_tmp_name = $_FILES['doc']['tmp_name'];

  $file_parts = pathinfo($doc_name);

  $file_exetention = $file_parts['extension'];
  if (in_array($file_exetention, $extensions)) 
  {
      //echo "Votre extension est : ".$file_exetention;
      if (empty($doc_name) OR $doc_name == null) 
      {
        $message = "<div class='alert alert-danger'>
                <strong>Attention!</strong> SVP selectionner un fichier !.
              </div>";
      }
        move_uploaded_file($doc_tmp_name, "doc/$doc_name");
        $cours = new cours();
        $cours->setnom_cours($nom_cours);
        $cours->setformat_cours("doc/$doc_name");
        $cours->setid_module($id_module);
        $cours->ajouter_cours($cours);
        $message = "<div class='alert alert-success'>
                  <strong>Success!</strong> Votre nouvelle cours est est bien ajouté.
                </div>";
  }
  else 
  {
      $message = "<div class='alert alert-danger'>
                <strong>Attention!</strong> Erreur d'extension !.
              </div>";
  }
}
  ?>