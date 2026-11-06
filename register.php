<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">

<title>Inscription</title>

<link rel="stylesheet" href="css/style.css">

<script src="js/validation.js"></script>

<style>

.register-container {

    display: flex;
    justify-content: center;
    align-items: center;
    height: 90vh;

}

.register-box {

    background: rgba(255,255,255,0.95);
    padding: 40px;
    border-radius: 15px;
    width: 420px;
    text-align: center;

}

.register-box input {

    width: 100%;
    padding: 10px;
    margin: 8px 0;
    border-radius: 8px;
    border: 1px solid #ccc;

}

.register-box button {

    width: 100%;
    padding: 12px;
    background: linear-gradient(to right, gold, #b8962e);
    border: none;
    border-radius: 8px;
    font-weight: bold;
    cursor: pointer;

}

.register-box button:hover {

    opacity: 0.9;

}

</style>

</head>

<body>

<div class="overlay">

<!-- NAVBAR -->

<div class="navbar">

<div class="logo">

Tirage Hadj

</div>

<div class="nav-links">

<a href="index.php">Accueil</a>
<a href="login.php">Connexion</a>

</div>

</div>

<!-- REGISTER -->

<div class="register-container">

<div class="register-box">

<h2 style="color:gold;">

Créer un compte

</h2>

<form 
action="php/trait_inscription.php" 
method="POST"
onsubmit="return verifierMotDePasse()"
>

<input 
type="text"
name="nom"
placeholder="Nom complet"
required
>

<input 
type="text"
name="cin"
placeholder="Numéro Carte d'Identité Nationale"
required
>

<input 
type="email"
name="email"
placeholder="Email"
required
>

<input 
type="text"
name="telephone"
placeholder="Téléphone"
required
>

<input 
type="password"
id="password"
name="password"
placeholder="Mot de passe"
required
>

<input 
type="password"
id="confirm_password"
placeholder="Confirmer mot de passe"
required
>

<button type="submit">

S'inscrire

</button>

</form>

<br>

<a href="login.php">

Déjà inscrit ? Se connecter

</a>

</div>

</div>

</div>

</body>

</html>