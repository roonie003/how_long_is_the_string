<?php

if(isset($_POST['submit'])){
    $greeting = $_POST['greeting'];
    $character = $_POST['character'];

    if ($character == "yes"){
        $length =  strlen($greeting);
    }else {
    $length =  str_word_count ($greeting);
}
echo "The string is " . $length . " characters long ";

} 