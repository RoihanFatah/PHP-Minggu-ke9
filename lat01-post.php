<form action="lat01-action.php" method="post">
    <label for="email">email : </label>
    <input type="email" name="email" autocomplete="off">
    <label for="password" autocomplete="off">password : </label>
    <input type="password" name="password">
    <input type="submit" name="submit" value="login">
</form>

<?php 

if (isset ($_POST ['submit'])) {
    $email = $_POST ['email'];
    $password = $_POST ['password'];

    echo $email;
    echo "<br>";
    echo $password;
}

?>
