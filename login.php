<?php
 
  if (isset($_POST['nom']) && isset($_POST['prenom'])){

    
    $txt =$_POST['nom'].';'.$_POST['prenom'].';'.$_POST['Classe'].';'.$_POST['Section'].';'.$_POST['phone'].';'.$_POST['mail'];
     file_put_contents('data.txt', $txt, FILE_APPEND);
  }
  
  header('location:merci.html');
  
?>


