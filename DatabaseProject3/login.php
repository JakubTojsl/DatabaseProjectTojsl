<?php

session_start();
include("connect.php");
include("functions.php");

$user_data = check_loginlogin($con);

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $login = $_POST['login'];
    $password = $_POST['password'];

    if (!empty($login) && !empty($password) && !is_numeric($login)) {
        $query = "select * from employee where login = '$login' limit 1";
        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                if ($user_data['password'] === $password) {
                    $_SESSION['employee_id'] = $user_data['employee_id'];
                    header("Location: index.php");
                    die;
                }
            }
        }
        echo "Chybné jméno nebo heslo";
    }
    else{ echo "Chybné jméno nebo heslo";}
}

?>

<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form method="post">
            <h2 class="form-login">Přihlášení</h2><br>
            <input id="text" type="text" name="login" placeholder="Username" required><br>
            <input id="text" type="password" name="password" placeholder="Password" required><br>
            <input id="button" type="submit" value="Login">

        </form>
    </div>
</body>
</html>