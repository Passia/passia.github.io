<!DOCTYPE html>
<html>
    <head>
        <title>code secret</title>
		<meta charset="utf-8">
		</head>
    <body>
        <?php
// J'ai choisi le mot de passe "toto"
if (isset($_POST['pwd'])&& isset($_POST['login'])) // Si la variable existe
{
// On se crée une variable $mot_de_passe avec le mot de passe entré et login
$mot_de_passe = $_POST['pwd'];
$login= $_POST['login'];
}
else // La variable n'existe pas encore
{
$mot_de_passe = ""; // On crée une variable $mot_de_passe vide
$login="" ;  // On crée une variable login vide
}
if ($mot_de_passe == "toto" AND $login=="toto") // Si le mot de passe est bon
{
// On affiche la page cachée.
header ("Location: personnel.php?signup=success");

}
else  // le mot de passe n'est pas bon
{
// On affiche la zone de texte pour rentrer le mot de passe.
?>
<!DOCTYPE html>
<html>
<head>
<title>Page protégée par mot de passe</title>
<meta charset="utf-8" />
</head>
<body>
<p><?php echo"mot de passe incorrect";?></p>
<p>Veuillez entrer vos identifiants
</p>
<form action="secret.php" method="post">
<p>
    login:
<input type="text" name="login" /> 
</p>
<p>
    mot de passe:
<input type="password" name="pwd" /> <input type="submit" value="envoyer" />

</body>
</html>
<?php
} // Fin du else
// Fin du code :)
?>
    </body>
</html>
