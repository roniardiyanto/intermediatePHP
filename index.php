<?php
include_once('header.php');

$namaPengguna = "roni";
$kataSandi = "ardiyanto";
if (isset($_POST['submit'])) {

    if ($_POST['namaPengguna'] == $namaPengguna &&
        $_POST['kataSandi'] === $kataSandi
        ) {
        #cookie untuk menyimpan data sementara , tergantung pada waktu yang kita berikan(detik)
            setcookie('namaPengguna', $_POST['namaPengguna'], time()+2000);
        #untuk memindahkan user ke halaman jika berhasil login atau gagal
            header('Location: redirect.php?nama=' . $namaPengguna);
    } else {
        echo "login gagal";
    }
}

?>
<main>
    <h2>Halo Selamat Datang</h2>
    <form action="index.php" method="post">
            <div>
                    <input type="text" placeholder="Nama Pengguna" name="namaPengguna">
            </div>
            <div>
                    <input type="password" name="kataSandi">
            </div>
            <input class="btn" type="submit" name="submit" value="MASUK">

        </form>
</main>
<?php
include_once('footer.php');

?>