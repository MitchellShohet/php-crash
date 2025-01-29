<?php

    session_start();

    if(isset($_POST['submit'])) {
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST['password'];

        if($username == 'Link' && $password == 'password') {
            $_SESSION['username'] = $username;
            header('Location: /php-crash/extras/dashboard.php');
        }
        else {
            echo "username or password incorrect. <br>"; 
        }
        echo $username . "<br>";
        echo $email . "<br>";
    }

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="email">Email: </label>
        <input type="text" name="email">
    </div>
    <div>
        <label for="password">Password: </label>
        <input type="text" name="password">
    </div>
    <button type="submit" value="submit" name="submit">Submit</button>
</form>