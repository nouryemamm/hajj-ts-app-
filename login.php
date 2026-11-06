<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">

<title>Connexion</title>

<link rel="stylesheet" href="css/style.css">

<style>

/* LOGIN BOX */

.login-container {

    display: flex;

    justify-content: center;

    align-items: center;

    height: 90vh;

}

.login-box {

    background: rgba(255,255,255,0.95);

    padding: 40px;

    border-radius: 15px;

    width: 350px;

    text-align: center;

}

/* INPUTS */

.login-box input {

    width: 100%;

    padding: 10px;

    margin: 10px 0;

    border-radius: 8px;

    border: 1px solid #ccc;

}

/* BUTTON */

.login-box button {

    width: 100%;

    padding: 12px;

    background: linear-gradient(to right, gold, #b8962e);

    border: none;

    border-radius: 8px;

    font-weight: bold;

    cursor: pointer;

}

.login-box button:hover {

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

<a href="register.php">Inscription</a>

</div>

</div>

<!-- LOGIN -->

<div class="login-container">

<div class="login-box">

<h2 style="color:gold;">

Connexion

</h2>

<form action="php/trait_connexion.php" method="POST">

<input 
type="email" 
name="email"
placeholder="Email"
required
>

<input 
type="password"
name="password"
placeholder="Mot de passe"
required
>

<button type="submit">

Se connecter

</button>

</form>

<br>

<a href="register.php">

Créer un compte

</a>

</div>

</div>

</div>

</body>

</html>