<?php

    // $login = $_GET['login']; 
	// $password = $_GET['password'];

    // echo '<h3>Connecté </h3>';
    // echo 'Login : ' . $login . ' Password : ' . $password;

   
    // on simule une base de données
    $users = array(
    // login => password
    'riri' => 'fifi',
    'yoda' => 'maitrejedi' );

    $login = "anonymous";
    $errorText = "";
    $successfullyLogged = false;

    if(isset($_POST['login']) && isset($_POST['password'])) {
    $tryLogin=$_POST['login'];
    $tryPwd=$_POST['password'];

// si login existe et password correspond
if( array_key_exists($tryLogin,$users) && $users[$tryLogin]==$tryPwd ) {
    $successfullyLogged = true;
    $login = $tryLogin;
    } else
    $errorText = "Erreur de login/password";
    } else
    $errorText = "Merci d'utiliser le formulaire de login";
    if(!$successfullyLogged) {
    echo $errorText;
    } 
    else {

    echo "<h1>Bienvenu ".$login."</h1>";
    echo 'ID : ' .$login. ' Password : ' .$tryPwd."<br>";
    session_start();

    $_SESSION['id'] = $login;
    echo 'session enregistrée, Identifiant  : '.$_SESSION['id']."<br>";
    }

    echo '<a href="test_navigation.php">Test Navigation</a> <br>';
   echo '<a href="fermeture_session.php">Déconnexion</a>';


    
    ?>
        







<!-- On remarque qu'il y a les mdp et id dans l'URL -->

