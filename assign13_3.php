<?php
$dir    = '/home/mcv20002/public_html/week13/data';
$files = scandir($dir, 1);
// $output;
foreach($files as $file){
    if (strpos($file, "txt") !== false){
        $name = '/home/mcv20002/public_html/week13/data/' . $file;
        $results = file_get_contents($name);
        echo "$results <br>";
    }
}

// echo($output);
?>