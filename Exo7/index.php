<?php 
  include "..\\top_p6.php";
  echo "Exercice 7";
?>
  <p class="topic">Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.<br>
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>

  <?php
    if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_FILES['myFile']) && ($_FILES['myFile']['error'] == 0)){
    // if (isset($_POST['firstname']) && isset($_POST['lastname'])){
      echo "Bonjour " . $_POST['civility'] . " " . $_POST['firstname'] . " " . $_POST['lastname'];
      $infoFile = pathinfo($_FILES['myFile']['name']);
      echo"<br> Nom du fichier : " . $_FILES['myFile']['name']. "<br>Extension : " . $infoFile['extension'];
    } else{
      echo '
      <form method="post" action="index.php" id="formIdentity" enctype="multipart/form-data">
        <fieldset class="identity">
          <legend> Identité </legend>
          <ul class="lstIdentity">
            <li class="itemLstIdentity">
              <select name="civility" id="civility">
                <option value="M.">Monsieur</option>
                <option value="Mme.">Madame</option>
              </select>
            </li>
            <li class="itemLstIdentity"><label for="firstname">Votre prénom</label><input type="text" name="firstname" id="firstname"></li>
            <li class="itemLstIdentity"><label for="lastname">Votre nom</label><input type="text" name="lastname" id="lastname"></li>
            <li class="itemLstIdentity"><label for="myFile">Fichier</label><input type="file" name="myFile"></li>
          </ul>
          <input type="submit" value="Valider" name="submitButton">
          <input type="button" value="Effacer" name="razButton" id="razButton">
        </fieldset>
      </form>';
    }
  ?>

  <script>
      document.getElementById("razButton").addEventListener("click", function(){
        // Remet les valeurs initiales
          document.getElementById("formIdentity").reset();
      });
  </script>

<?php include "..\..\bottom_html.php";