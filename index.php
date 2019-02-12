<?php
$message = "<h1>Je fais du PHP - Boucle <em>for</em></h1>";


for ($i = 0 ; $i < 11; $i++) {
    $message .="<li>" . $i . "</li>";
};


$message .= "</ul>";

echo $message;