<?php 
  include "..\\top_p6.php";
  echo "Exercice 8";
?>
  <p class="topic">Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, vérifier que le fichier transmis est bien un fichier pdf.<br>
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>

  <?php
    if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_FILES['myFile']) && ($_FILES['myFile']['error'] == 0)){
      echo "Bonjour " . $_POST['civility'] . " " . $_POST['firstname'] . " " . $_POST['lastname'];
      $infoFile = pathinfo($_FILES['myFile']['name']);
      echo"<br> Nom du fichier : " . $_FILES['myFile']['name']. "<br>Type : " . $infoFile['extension'];
      echo "<br> Type fichier " . $_FILES['myFile']['type'];
      if ($infoFile['extension'] != 'pdf'){
        echo "<br><br> <span style='color: red'> Le fichier doit être au format pdf </span>";
      }
    } else{ ?>
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
            <li class="itemLstIdentity"><label for="myFile">Fichier (vous devez choisir un pdf)</label><input type="file" name="myFile"></li>
          </ul>
          <input type="submit" value="Valider" name="submitButton">
          <input type="button" value="Effacer" name="razButton" id="razButton">
        </fieldset>
      </form>
    <?php } ?>

  <script>
      document.getElementById("razButton").addEventListener("click", function(){
        // Remet les valeurs initiales
          document.getElementById("formIdentity").reset();
      });
  </script>

<?php include "..\..\bottom_html.php";