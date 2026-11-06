<?php

session_start();

// Connexion BD
require_once("../config/connexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    try {

        // Chercher utilisateur

        $sql = $conn->prepare(
            "SELECT * FROM utilisateurs 
             WHERE email = :email"
        );

        $sql->execute([
            'email' => $email
        ]);

        $user = $sql->fetch();

        if ($user) {

            // Vérifier mot de passe

            if (password_verify($password, $user['password'])) {

                // Créer session

                $_SESSION['id'] = $user['id'];
                $_SESSION['nom'] = $user['nom'];
                $_SESSION['role'] = $user['role'];

                // Redirection selon rôle

                if ($user['role'] == "admin") {

                    header("Location: ../admin/dashboard.php");

                } else {

                    header("Location: ../user/dashboard.php");

                }

                exit();

            }

            else {

                echo "<script>
                        alert('Mot de passe incorrect');
                        window.location.href='../login.php';
                      </script>";

            }

        }

        else {

            echo "<script>
                    alert('Email introuvable');
                    window.location.href='../login.php';
                  </script>";

        }

    }

    catch (PDOException $e) {

        echo "Erreur : " . $e->getMessage();

    }

}

?>