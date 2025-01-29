<?php

    setcookie('name', 'Link', time() + 86400 * 7); //setcookie function with perameters (the name of the cookie, the data stored in the cookie, the amount of time for the cookie to expire)
    if(isset($_COOKIE['name'])) {
        echo $_COOKIE['name'];
    }

?>