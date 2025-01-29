<?php 

    $file = 'extras/users.txt';

    if(file_exists($file)) {
        $handle = fopen($file, 'r');
        $contents = fread($handle, filesize(($file)));
        fclose($handle);
        echo $contents;
    }
    else {
        $handle = fopen($file, 'w');
        $contents = 'Purah' . PHP_EOL . 'Robbie' . PHP_EOL . "Sidon";
        fwrite($handle, $contents);
        fclose($handle);
    }

?>