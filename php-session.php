<?php


session_start();


// $_SESSION['kullanici_adi'] = 'cagri';
// $_SESSION['parola'] = 'dueskday';

unset($_SESSION['parola']);

print_r($_SESSION);


// session_destroy();

?>