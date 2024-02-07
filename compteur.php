<?php 
// function afficherNbreVues($nbre_vues){
    // for ($i=0; $i < $nbre_vues; $i++) { 
    //     echo "Ce site a été visité $nbre_vues fois <br>";
    // }

//  }

 if (isset($_SESSION['nbre_vues'])) {
    $_SESSION['nbre_vues']++;
 } else {
    $_SESSION['nbre_vues'] = 1;
 }
 $nbre_vues = $_SESSION['nbre_vues'];
//  afficherNbreVues($nbre_vues);
//  var_dump($nbre_vues);
 
 ?>