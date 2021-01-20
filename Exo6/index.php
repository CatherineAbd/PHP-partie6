<?php 
  include "..\\top_p6.php";
  echo "Exercice 6";
?>
  <p class="topic">Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, affichez-les à la place du formulaire. Sinon affichez le formulaire. <br>
    N'Utiliser qu'une seule page.<br>
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>

  <?php
    if (isset($_POST['firstname']) && isset($_POST['lastname'])){
      echo "Bonjour " . $_POST['civility'] . " " . $_POST['firstname'] . " " . $_POST['lastname'];
    } else{
      echo '
      <form method="post" action="index.php" id="formIdentity">
        <fieldset class="identity">
          <legend> Identité </legend>
          <select name="civility" id="civility">
            <option value="M.">Monsieur</option>
            <option value="Mme.">Madame</option>
          </select>
          <label for="firstname">Votre prénom</label><input type="text" name="firstname" id="firstname">
          <label for="lastname">Votre nom</label><input type="text" name="lastname" id="lastname">
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