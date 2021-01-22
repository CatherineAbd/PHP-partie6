<?php 
  include "..\\top_p6.php";
  echo "Exercice 9";
?>
  <p class="topic">Créer un formulaire de création de profil sur la page index.php avec :<br>

•             Une des bouton radio pour civilité (Mr ou Mme)<br>

•             Un champ texte pour le nom<br>

•             Un champ texte pour le prénom<br>

•             Un champ date pour la date de naissance<br>

•             Un champ d'envoi de fichier pour l'image de profil.<br>

A la soumission du formulaire, si tous les champs sont correctement renseignés, uploadez l'image de profil dans un dossier image que vous auriez créer en amont. Afficher le profil de l'utilisateur dans une page profile.php<br>
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>

  <form method="post" action="profile.php" id="formIdentity" enctype="multipart/form-data">
    <fieldset class="identity">
      <legend> Identité </legend>
      <select name="civility" id="civility">
        <option value="M." required>Monsieur</option>
        <option value="Mme." required>Madame</option>
        </select>
        <label for="firstname">Votre prénom</label><input type="text" name="firstname" id="firstname" required>
        <label for="lastname">Votre nom</label><input type="text" name="lastname" id="lastname" required><br>
        <label for="birthdate">Votre date de naissance</label><input type="date" name="birthdate" id="birthdate" required><br><br>
        <label for="imgProfil">Fichier image de profil</label><input type="file" name="imgProfil" required><br><br>
        <input type="submit" value="Valider" name="submitButton">
        <input type="button" value="Effacer" name="razButton" id="razButton">
        </fieldset>
  </form>
  <?php
  ?>

  <script>
      document.getElementById("razButton").addEventListener("click", function(){
        // Remet les valeurs initiales
          document.getElementById("formIdentity").reset();
      });
  </script>
<?php include "..\..\bottom_html.php";