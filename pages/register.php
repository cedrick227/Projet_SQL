<?php
include '../config.php';

if ($login == 1) {
    echo "<meta http-equiv='refresh' content='0; url=profile.php'>";
}else {

if (isset($_POST["u_btn"])) {
    $u_name = $_POST["u_name"];
    $u_prenom = $_POST["u_prenom"];
    $u_phone = $_POST["u_phone"];
    $u_email = $_POST["u_email"];
    $u_pass = $_POST["u_pass"];
    if (empty($u_name) || empty($u_email) || empty($u_pass) || empty($u_phone)) {
        echo "Veuillez remplir tout les champs";
    }else{
        $insert = mysqli_query($conn,"INSERT INTO `users` (`u_name`, `u_prenom`, `u_phone`, `u_email`, `u_pass`) VALUES ('$u_name', '$u_prenom', '$u_phone', '$u_email', '$u_pass')");  
    }
}

?>








<!DOCTYPE html>
<html>
    <head>
        <title>Inscription</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <form class="box" action="register.php" method="post">
            <h1>Inscription</h1>
            <input type="text" name="u_name" placeholder="Nom" required>
            <input type="text" name="u_prenom" placeholder="Prénom" required>
            <input type="tel" name="u_phone" placeholder="Téléphone" required>
            <input type="email" name="u_email" placeholder="Email" required>
            <input type="password" name="u_pass" placeholder="Password" required>
            <input type="submit" name="u_btn" value="S'enregistrer">
            <p style="color:white">Déja un compe ?</p><a href="../pages/login.php">Connectez-vous</a>
        </form>
<?php } ?>        
    </body>
</html>