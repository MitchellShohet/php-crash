<?php
    
    $names_array = ['Rauru', 'Saria', 'Darunia', 'Ruto', 'Impa', 'Nabooru'];

    $associative_sages = [
        'light' => 'Rauru',
        'forest' => 'Saria',
        'fire' => 'Darunia',
        'water' => 'Ruto',
        'shadow' => 'Impa',
        'spirit' => 'Nabooru',
    ];

    $games = ['oot', 'mm'];

    echo count($names_array) . "<br>"; // count() shows length of array
    var_dump(in_array('Rauru', $names_array)); // in_array() is a search for items in array
    echo "<br>";
    array_push($games, 'ww', 'tp', 'ss'); //array_push() adds items to end of array
    print_r($games);
    echo "<br>";
    array_unshift($games, 'lttp'); //array_unshift() adds items to beginning of array
    print_r($games);
    echo "<br>";
    array_pop($games); //array_pop() removes an item from the end
    print_r($games);
    echo "<br>";
    array_shift($games); //array_shift() removes an item from the beginning
    print_r($games);
    echo "<br>";
    unset($games[1]); //unset() removes index and item in that index from the array
    print_r($games);
    echo "<br>";

    echo "------------ <br>";

    $arr1 = [1,2,3];
    $arr2 = [4,5,6];
    $arr3 = array_merge($arr1, $arr2); //array_merge() merges two arrays together under a new array
    print_r($arr3);

    $arr4 = [...$arr1];
    echo "<br>";
    print_r($arr4);

    $elements = array_keys($associative_sages); //array_keys makes an array from the keys of another array
    print_r($elements);
    $elements_and_sages = array_combine($elements, $names_array); //array_combine sets one array as the keys and another array as the values
    echo "<br>";
    print_r($elements_and_sages);
    
    echo "<br> ------------ <br>";

    $numbers = range(1,20); //range() gives an array of numbers from the first perameter to the second perameter
    foreach($numbers as $each_number) {
        echo $each_number . "<br>";
    }
    echo "<br> ------------ <br>";
    $new_numbers = array_map(fn($each_number) => "Number $each_number", $numbers); //array_map() applies a function to each item in an array, returns new array
    print_r($new_numbers);
    echo "<br> ------------ <br>";
    $less_than_10 = array_filter($numbers, fn($each_number) => $each_number < 10); //array_filter() returns each item that satisfies a conditional, returns new array
    print_r($less_than_10);
    echo "<br> ------------ <br>";
    $sum = array_reduce($numbers, fn($carry, $each_number) => $carry + $each_number); //array_reduce returns a sum of all numbers, carry keeps the return of the previous iteration
    var_dump($sum);

?>