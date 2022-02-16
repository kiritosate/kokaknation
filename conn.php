<?php 
    $s_name = "localhost";
    $username = "root";
    $db_nam = "kokakmembers";

    $conn = new mysqli($s_name, $username, "root", $db_nam);

    $sql = 'SELECT * FROM member';

    $data = mysqli_query($conn, $sql);
?> 