<?php $title = "Connexion";
include '../Elements/header.php'; 
include '../Elements/nav.php';
?>
<main class="divConnexion">
	<form class="formConnexion" action="../Elements/handling/authentification.php" method="POST" name="connexion">
		<input type="text" name="email" placeholder="Mail" class="inputFormulaireConnexion" name="email">
		<input type="password" name="mdp" placeholder="Password" class="inputFormulaireConnexion" name="mdp">
		<input type="submit" value="se connecter" class="btn btn_admin">
		<p><?php if (isset($_SESSION['erreur'])) { echo $_SESSION['erreur']; } ?></p>
	</form>
	<a href="inscription.php">Pas encore inscrit ?</a>
</main>

<?php include '../Elements/footer.php'; ?>
