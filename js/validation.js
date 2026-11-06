function verifierMotDePasse() {

    let mdp = document.getElementById("password").value;
    let confirm = document.getElementById("confirm_password").value;

    if (mdp !== confirm) {

        alert("Les mots de passe ne correspondent pas !");
        return false;

    }

    return true;
}