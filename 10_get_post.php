<?php

    if(isset($_POST['submit'])) {
        echo $_POST['name'] . "<br>";
        echo $_POST['email'] . "<br>";
    }

?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Bill">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
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
