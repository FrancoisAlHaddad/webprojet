<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    session_start();

//    if(isset($_SESSION) && $_SESSION['login'] = 'cestbon') {
//    }
    ?>
    <meta charset="UTF-8">
    <title>FreeNote</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header id="menu">
    <img alt="menu icon" class='corner' id="hamburger" src="media/ham.png" >
    <img alt="logo site" id='mainimg' src="media/freenote.png" >
    <img alt="logo utilisateur" class='corner' id="user" src="media/user.png" >
</header>

<header class="menuphonehamburger">
    <img alt="logo site" id='mainimg2' src="media/freenote.png" >
    <a class="menulink" href="test.php">Lien 1</a>
    <a class="menulink" href="">Lien 2</a>
    <a class="menulink" href="">Lien 3</a>
    <a class="menulink" href="">Lien 4</a>
    <img alt="logo utilisateur" class='submenupc' id="userpc" src="media/user.png" >
</header>

<form class="menuphoneuser" method="post">
    <input name="username" id="usernameinput" class="login" type="text" value="username">
    <input name="password" id="passwordinput" class="login" type="password" value="password">
    <div id="divsubbutton">
        <button formaction="php/login.php" type="submit" name="submit" class="subbutton">Connection</button>
        <button formaction="forgetpassword.php" class="subbutton">Mdp forget</button>
    </div>
    <button formaction="singup.php" id='singup'>Inscrivez vous</button>
</form>
<div id='midpage'>
