<?php
    $user = 'root';
    $pass = '';
    $db = 'btl';

    $conn = new mysqli('localhost', $user, $pass, $db) or die("False");
    mysqli_set_charset($conn,"utf8");

?>