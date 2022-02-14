<?php
    session_start();
    require "fonction.php";

    $msg = "";

    if (isset($_POST["validate"])) {
        extract($_POST);
        if (!is_empty($nom) && !is_empty($login) && !is_empty($mdp) && !is_empty($mdpC) && !is_empty($role) ) {
            if ($mdp === $mdpC) {
                if (addUser($nom,$login,$mdp,$role,'data_user')) {
                 $_SESSION['error'] ="Compte ajouté avec succés !";
                 header("location:../index.php?page=register");
                }else{
                    $_SESSION['error'] = "Ce login existe déja, Veuillez le changer Svp!";
                    header("location:../index.php?page=register");
                }
            }else{
                $_SESSION['error'] = "Les mots de passes ne sont pas identiques !"; 
                header("location:../index.php?page=register");
            }
        }else{
            $_SESSION['error'] =  "Tous les champs sont Obligatoires !";
            header("location:../index.php?page=register");

        }
    }

    if (isset($_POST["connect"])) {
        extract($_POST);
        if (!is_empty($mail) && !is_empty($mdp)) {
            if (checkemail($mail)) {
                $user = login($mail,$mdp,'data_user');
            if ($user) {
                $_SESSION["nom"] = $user["name"];
                $_SESSION["role"] = $user["role"];
                header("location:../index.php?page=admin");
            }else{
                $_SESSION['errorLog'] = "Utilisateur Introuvable veuillez verifier vos informations";
                header("location:../index.php");
            }
            }else{
                $_SESSION['errorLog'] = "Email invalide!";
                header("location:../index.php");
            }
            
        }else{
            $_SESSION['errorLog'] = "Tous les champs sont obligatoires";
            header("location:../index.php");
        }
    }