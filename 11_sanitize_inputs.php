<?php

    if(isset($_POST['submit'])) {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        echo $name . "<br>";
        echo $email . "<br>";
    }

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="email">Email: </label>
        <input type="text" name="email">
    </div>
    <button type="submit" value="submit" name="submit">Submit</button>
</form>
