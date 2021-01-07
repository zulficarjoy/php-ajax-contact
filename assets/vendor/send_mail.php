<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'autoload.php';

if (isset($_GET['mail'])) {

#Cleaning Html,Script Tags and special characters
function postTextClean($text) {
    $text            = trim(addslashes(htmlspecialchars(strip_tags($_POST[$text]))));
    return $text;
}

function getTextClean($text) {
    $text            = trim(addslashes(htmlspecialchars(strip_tags($_GET[$text]))));
    $search          = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü');
    $replace         = array('c','c','g','g','i','i','o','o','s','s','u','u');
    $new_text        = str_replace($search,$replace,$text);
    return $new_text;
}

?>