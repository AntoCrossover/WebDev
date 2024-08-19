<?php

  // La variable globale $_POST vous donne accès aux données envoyées avec la méthode POST par leur nom
  // Pour avoir accès aux données envoyées avec la méthode GET, utilisez $_GET

  $say = htmlspecialchars($_POST['nom']);
  $to  = htmlspecialchars($_POST['prenom']);
  $societe = htmlspecialchars($_POST['societe']);
  $email  = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);
  $region  = htmlspecialchars($_POST['region']);

  echo  $say, '</br>', $to, '</br>',$societe,'</br>', $email,'</br>', $societe, '</br>', $region,'</br>', $message,'</br>';

  if($region=="Auvergne-Rhône-Alpes"){

    echo "Salut Nathalie";

  }else{

echo "Salut les autres";

  }

?>