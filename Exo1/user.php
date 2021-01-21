<p>Bonjour !</p>

<!-- <p>Tu t'appelles <?php echo $_GET['firstname'] . " " . $_GET['lastname']; ?> </p> -->

<!-- Version Anousone -->

<p>Bonjour, vous vous appelez : <?= $_GET['lastname'] ?? 'vous n\'avez pas renseigné de nom' ?> </p>

<!-- équivalent à  -->

<?= isset($_GET['firstname']) ? $_GET['firstname'] : 'Vous n\'avez pas renseigné de nom' ?> <br>

<?= isset($_GET['firstname']) ? $_GET['firstname'] : 'Vous n\'avez pas renseigné de prénom', isset($_GET['lastname']) ? $_GET['lastname'] : ' Vous n\'avez pas renseigné de nom' ?>