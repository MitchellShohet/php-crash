<?php 
    //for loops are exactly the same as javascript
    for ($x=0; $x <= 7; $x++) {
        echo "The first number is $x. <br>";
    }

    echo "----------- <br>";

    //while loops are exactly the same as javascript
    $be = 4;
    while($be <8) {
        echo "This number is $be. <br>";
        $be++;
    }

    echo "----------- <br>";

    //do while loops always run the first time because they run before condition is checked.
    do {
        echo "The numbers added are " . $x + $be . "<br>";
        $x++;
        $be++;
    }
    while($be < 6);

    echo "----------- <br>";
    
    //Foreach is for arrays
    $names_array = ['Rauru', 'Saria', 'Darunia', 'Ruto', 'Impa', 'Nabooru'];
    
    foreach($names_array as $each_name) {
        echo $each_name . "<br>";
    }

    echo "----------- <br>";

    foreach($names_array as $index => $each_name) {
        echo $index +1 . " - $each_name. <br>";
    }
    
    echo "----------- <br>";

    $associative_sages = [
        'light' => 'Rauru',
        'forest' => 'Saria',
        'fire' => 'Darunia',
        'water' => 'Ruto',
        'shadow' => 'Impa',
        'spirit' => 'Nabooru',
    ];

    foreach($associative_sages as $element => $sage) {
        echo "The sage of $element is $sage. <br>";
    }

?>