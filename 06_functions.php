<?php 
    //functions the same as javascript
    //can use global descriptor to give a variable global scope (outside of function)
    $multiply = fn($n1, $n2) => $n1 * $n2; //anonymous arrow function
    echo $multiply(3,4);
?>