<?php 
  include "..\\top_p6.php";
  echo "Exercice 2";
?>
  <p class="topic">Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST.<br>
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>

  <form method="post" action="user.php" id="formIdentity">
    <fieldset class="identity">
      <legend> Identité </legend>
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