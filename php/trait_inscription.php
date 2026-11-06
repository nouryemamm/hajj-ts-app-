<?php

// Connexion à la base
require_once("../config/connexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Récupération des données

    $nom = $_POST['nom'];
    $cin = $_POST['cin'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $password = $_POST['password'];

    // Sécurisation mot de passe

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    // Rôle par défaut

    $role = "user";

    try {

        // Vérifier si CIN ou Email existe

        $check = $conn->prepare(
            "SELECT * FROM utilisateurs 
             WHERE cin = :cin OR email = :email"
        );

        $check->execute([
            'cin' => $cin,
            'email' => $email
        ]);

        if ($check->rowCount() > 0) {

            echo "<script>
                    alert('CIN ou Email déjà utilisé');
                    window.location.href='../register.php';
                  </script>";

            exit();

        }

        // Insérer utilisateur

        $sql = $conn->prepare(
            "INSERT INTO utilisateurs 
            (nom, cin, email, telephone, password, role)

            VALUES
            (:nom, :cin, :email, :telephone, :password, :role)"
        );

        $sql->execute([

            'nom' => $nom,
            'cin' => $cin,
            'email' => $email,
            'telephone' => $telephone,
            'password' => $passwordHash,
            'role' => $role

        ]);

        echo "<script>
                alert('Inscription réussie !');
                window.location.href='../login.php';
              </script>";

    }

    catch (PDOException $e) {

        echo "Erreur : " . $e->getMessage();

    }

}

?>