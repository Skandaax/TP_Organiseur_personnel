<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

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
            <th><input type="text" id="id" name="id" placeholder="Votre identifiant"></th>
        </tr>
            <th><label for="pass">Votre mot de passe</label>
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