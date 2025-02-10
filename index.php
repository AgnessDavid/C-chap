
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>
    <h2>Inscription</h2>

    <form action="index2.php" method="POST">
        <label for="pseudo">Nom d'utilisateur :</label>
        <input type="text" name="pseudo" placeholder="Entrer votre pseudo" required>

        <label for="MDP">Mot de passe :</label>
        <input type="password" name="MDP" placeholder="Entrer votre mot de passe" required>

        <button type="submit" name="envoyer">S'inscrire</button>



    </form>

    <p>Déjà inscrit ? <a href="connexion.php">Connectez-vous ici</a>.</p>

</body>

</html>