<?php
session_start();

    if ( isset($_SESSION['pengguna'])) {
        echo "Nama anda adalah " . $_SESSION['pengguna'];
    } else {
        echo "Anda Siapa ?, Silahkan login dulu";
    }
?>
<br>
<a href="logout.php">LOGOUT</a>