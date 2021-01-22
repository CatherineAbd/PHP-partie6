<?php 
  include "..\\top_p6.php";
  echo "Exercice 9";
?>
  <p class="topic">Créer un formulaire de création de profil sur la page index.php avec :<br>

•             Une des bouton radio pour civilité (Mr ou Mme)<br>

•             Un champ texte pour le nom<br>

•             Un champ texte pour le prénom<br>

•             Un champ date pour la date de naissance<br>

•             Un champ d"envoi de fichier pour l'image de profil.<br>

A la soumission du formulaire, si tous les champs sont correctement renseignés, uploadez l'image de profil dans un dossier image que vous auriez créer en amont. Afficher le profil de l"utilisateur dans une page profile.php<br>
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>

  <?php
      $infoFile = pathinfo($_FILES["imgProfil"]["name"]);
      $authExt = array("jpg", "gif", "png", "jpeg");
      if (!(in_array($infoFile["extension"], $authExt))){
        echo "Le fichier doit être un jpg, jpeg, png ou gif";
      }elseif ($_FILES["imgProfil"]["error"]){
        echo "Problème à la transmission du fichier";
      }else{
        $completeNameFile = "../img/" . basename($_FILES["imgProfil"]["name"]);
        move_uploaded_file($_FILES["imgProfil"]["tmp_name"], $completeNameFile);
        echo "<strong>Votre profil </strong>:";
        echo "<p><img src='$completeNameFile' alt='image de profil' width='100' height='100'></p>";
        echo "<br> Nom : " . $_POST["lastname"];
        echo "<br> Prénom : " . $_POST["firstname"];
        echo "<br> Date de naissance : {$_POST["birthdate"]}";
        echo "<br> Date de naissance : <input type ='date' value='{$_POST["birthdate"]}'> ";
      }
  ?>

<?php include "..\..\bottom_html.php";