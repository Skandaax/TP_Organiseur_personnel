<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>

<div id="centre">
    <h1>Ma Todolist</h1>
    <h2> Inscription </h2>
    
    <form action="index.php?route=insert_user" method="POST">
        <div id="couleur">
            <input type="text" id="id" name="id_utilisateur" placeholder="Votre identifiant"  required>
        </div>
        <div id="couleur">
            <input type="text" id="email" name="email" placeholder="Votre email" required>
        </div>
        <div id="couleur">
            <input type="password" id="password" name="password" placeholder="Votre mot de passe" required>
        </div>
        <div id="couleur">
            <input type="password" id="password2" name="password2" placeholder="Confirmer votre mot de passe">
        </div>
        <div id="couleur"> 
            <input type="submit" value="envoyer">
        </div>
    </form>    
</div>


</body>
</html>