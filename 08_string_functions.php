<?php

$phrase = 'Hello World';

// Get the length of a string
echo strlen($phrase) . "<br>";

// Find the position of the first occurrence of a substring in a string
echo strpos($phrase, 'o') . "<br>";

// Find the position of the last occurrence of a substring in a string
echo strrpos($phrase, 'o') . "<br>";

// Reverse a string
echo strrev($phrase) . "<br>";

// Convert all characters to lowercase
echo strtolower($phrase) . "<br>";

// Convert all characters to uppercase
echo strtoupper($phrase) . "<br>";

// Uppercase the first character of each word
echo ucwords($phrase) . "<br>";

// String replace
echo str_replace('World', 'Everyone', $phrase) . "<br>";

// Return portion of a string specified by the offset and length
echo substr($phrase, 0, 5) . "<br>";
echo substr($phrase, 5) . "<br>";

// Starts with
if (str_starts_with($phrase, 'Hello')) {
    echo 'YES' . "<br>";
}

// Ends with
if (str_ends_with($phrase, 'ld')) {
    echo 'YES' . "<br>";
}

// HTML Entities
$phrase2 = '<h1>Hello World</h1>';
echo htmlspecialchars($phrase2) . "<br>";

// Formatted Strings - useful when you have outside data
// Different specifiers for different data types
printf('%s is a %s', 'Brad', 'nice guy');
printf('1 + 1 = %f', 1 + 1); // float

//look up different specifiers for string concatting