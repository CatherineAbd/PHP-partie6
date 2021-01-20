<?php 
  include "..\\top_p6.php";
  echo "Exercice 5";
?>
  <p class="topic">Créer un formulaire sur la page index.php avec :  <br>
    Une liste déroulante pour la civilité (Mr ou Mme)<br>
    Un champ texte pour le nom<br>
    Un champ texte pour le prénom <br><br>
    Ce formulaire doit rediriger vers la page index.php. <br>
    Vous avez le choix de la méthode.<br>
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>

  <form method="post" action="index.php" id="formIdentity">
    <fieldset class="identity">
      <legend> Identité </legend>
      <select name="civility" id="civility">
        <option value="Mr">Monsieur</option>
        <option value="Ms">Madame</option>
      </select>
      <label for="firstname">Votre prénom</label><input type="text" name="firstname" id="firstname">
      <label for="lastname">Votre nom</label><input type="text" name="lastname" id="lastname">
      <input type="submit" value="Valider" name="submitButton">
      <input type="button" value="Effacer" name="razButton" id="razButton">
    </fieldset>
  </form>

  <script>
      document.getElementById("razButton").addEventListener("click", function(){
        // Remet les valeurs initiales
          document.getElementById("formIdentity").reset();
      });
  </script>
<?php include "..\..\bottom_html.php";