<?php
    if (isset ($_POST['Pilih'])) {
        $nama = $_POST['nama'];
        echo "Nama Anda : $nama <br>";
        $nis = $_POST['nis'];
        echo "Nomer Induk Siswa : $nis <br>";
        $alamat = $_POST['alamat'];
        echo "Alamat : $alamat <br>";
        $jeniskelamin = $_POST['jeniskelamin'];
        echo "Jenis Kelamin : $jeniskelamin <br>";
        $agama = $_POST['Agama'];
        echo "Agama : $agama <br>";
        $asalsekolah = $_POST['asalsekolah'];
        echo "Asal Sekolah : $asalsekolah <br>";
        $namaortu = $_POST['namaortu'];
        echo "Nama Orang Tua : $namaortu <br>"; 

        if (isset($_POST['Pilih'])) {
            echo "Pelajaran Yang Disukai:<br>";
            if (isset($_POST['IPS'])) {
            echo "-> " . $_POST['IPS'] . "<br>";
            }
            if (isset($_POST['PAI'])) {
            echo "-> " . $_POST['PAI'] . "<br>";
            }
            if (isset($_POST['IPA'])) {
            echo "-> " . $_POST['IPA'] . "<br>";
            }
            if (isset($_POST['MTK'])) {
            echo "-> " . $_POST['MTK'] . "<br>";
            }
            if (isset($_POST['PJK'])) {
            echo "-> " . $_POST['PJK'] . "<br>";
            }
            if (isset($_POST['INFORMATIKA'])) {
            echo "-> " . $_POST['INFORMATIKA'] . "<br>";
            }
        }
        $Total = $_POST['Total'];
        echo "Total Nilai Ijazah : $Total <br>";
        $email = $_POST['email'];
        echo "Email : $email <br>";
    }
?>