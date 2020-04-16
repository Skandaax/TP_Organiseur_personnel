<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<div class="tab">
<table id="table1">
    <thead>
        <tr>
            <th> Inscription </th>
        </tr>
        
        <tr>
            <th><form action="index.php?route=insert_user" method="POST"></th>
        </tr>
        <tr>
            <th><label for="id">Votre identifiant</label></th>
        </tr>
        <tr>
            <th><input type="text" id="id" name="id_utilisateur" placeholder="Votre identifiant" required></th>
        </tr>
        <tr>
            <th><label for="mail">Votre email</label></th>
        </tr>
        <tr>
        <th><input type="text" id="email" name="email" placeholder="Votre email" required></th>
        </tr>
        <tr>
            <th><label for="password">Votre mot de passe</label>
        </tr>
        <tr>    
            <th><input type="password" id="password" name="password" placeholder="Votre mot de passe" required><th>
        </tr>
        <th><label for="password2">Votre mot de passe</label>
        </tr>
        <tr>    
            <th><input type="password" id="password2" name="password2" placeholder="Confirmer votre mot de passe"><th>
        </tr>
        <tr>
            <th><input type="submit" value="envoyer"></th> 
        </form>    
        </tr>
    </thead>
</table>
</div>

</body>
</html>