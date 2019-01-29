<?php
    //Implode adalah membuat seluruh isi array ditampilan menjadi string
        //struktur implode(Separator, Array);
    $hewanPeliharaan = ['Kucing', 'Anjing', 'Iguana', 'Merpati'];
            //separator merupakan pemisah antar nilai array
    echo "tanpa separator " .   implode(";", $hewanPeliharaan) . "<br>";
    echo "dengan separator " .   implode(" ", $hewanPeliharaan) . "<br>";

    //Explode adalah fungsi kebalikan dari implode, explode berguna mengubah string menjadi array
        //struktur explode(separator, string, separator kedua);
    $hewanLiar = "Buaya Harimau Singa Beruang";
            //separator kedua pada explode berfungsi menentukan jumlah array yang dimuat dari string
    echo "Tanpa separator kedua" . print_r(explode( " ", $hewanLiar) );
    echo "<br>";
    echo "Dengan Separator kedua" . print_r(explode(" ",$hewanLiar, 2) );
?>