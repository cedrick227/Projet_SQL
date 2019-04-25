<?php
include '../config.php';

if ($login == 1) {
    echo "<meta http-equiv='refresh' content='0; url=profile.php'>";
}else {

if (isset($_POST["u_btn"])) {
    $u_email = $_POST['u_email'];
    $u_pass = $_POST['u_pass'];
    if(empty($u_email) || empty($u_pass)) {
        echo "Données incorrectes";
    }else{
        $selectfdb = mysqli_query($conn,"SELECT * FROM users WHERE u_email ='$u_email' AND u_pass = '$u_pass'");
        $row = mysqli_fetch_array($selectfdb);
        if ($row["u_email"] == $u_email && $row["u_pass"] == $u_pass) {
            setcookie('uid',$row["u_id"],time()+(3600 * 24));
            setcookie('login',1,time()+(3600 * 24));
            echo "<meta http-equiv='refresh' content='0; url=../pages/profil.php'>";
        }else{
           echo "Email ou Mot de pass incorrect";
        }
    }
}
?>



<!DOCTYPE html>
<html>
    <head>
        <title>Connexion</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body >
        <form class="box" action="login.php" method="post">
            <h1>CONNEXION</h1>
            <input type="email" name="u_email" placeholder="Email" required>
            <input type="password" name="u_pass" placeholder="Password" required>
            <input type="submit" name="u_btn" value="SE CONNECTER">
            <p style="color:white">Pas encore de compte ?</p><a href="../pages/register.php">Inscrivez-vous</a>
        </form>
<?php } ?>
    </body>
</html>