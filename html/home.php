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
        <div>
            <input type="text" id="utilisateur" name="utilisateur" placeholder="Votre identifiant"  required>
        </div>
        <div>
            <input type="text" id="email" name="email" placeholder="Votre email" required>
        </div>
        <div>
            <input type="password" id="password" name="password" placeholder="Votre mot de passe" required>
        </div>
        <div>
            <input type="password" id="password2" name="password2" placeholder="Confirmer votre mot de passe">
        </div>
        <div>
            <input type="submit" value="envoyer">
        </div>
    </form>    
</div>

<div class="tab">
<table id="table2">
    <thead>
        <tr>
            <th> Connexion </th>
        </tr>
        
        <tr>
            <th><form action="index.php?route=connect_user" method="POST"></th>
        </tr>
        <tr>
            <th><label for="id">Votre identifiants</label></th>
        </tr>
        <tr>
            <th><input type="text" id="utilisateur" name="utilisateur" placeholder="Votre identifiant"></th>
        </tr>
            <th><label for="password">Votre mot de passe</label>
        </tr>
        <tr>    
            <th><input type="password" id="mdp" name="mdp" placeholder="Votre mot de passe"><th>
        </tr>
        <tr>
            <th><input type="submit" value="Se connecter"></th> 
        </form>    
        </tr>
</table>
</div>


</body>
</html>