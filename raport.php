<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
    <title>Data Siswa</title>
<body>
<h1><center>DATA RAPORT</center></h1>
<form action="soalraport.php" method="post">
    <table border="0" width="75%">
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama" size="20"/>
                </td>
            </tr>
            <tr>
                <td>NIS</td>
                <td>
                    <input type="number" name="nis" size=20/>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                <textarea cols=50 rows=1 name="alamat"></textarea>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                <input type="radio" name="jeniskelamin" value="Pria">
                <label>Pria</label>
                <input type="radio" name="jeniskelamin" value="Wanita">
                <label>Wanita</label>
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>
                    <select name="Agama">
                    <option value ="" selected="selected"> Pilih Agama
                    <option value ="ISLAM">ISLAM</option>
                    <option value ="KRISTEN">KRISTEN</option>
                    <option value ="HINDU">HINDU</option>
                    <option value ="BUDHA">BUDHA</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td>
                    <input type="text" name="asalsekolah" size="20"/>
                </td>
            </tr>
            <tr>
                <td>Nama Orang Tua</td>
                <td>
                    <input type="text" name="namaortu" size="20"/>
                </td>
            </tr>
            <tr>
                <td>MatPel yang Disukai</td>
                <td>
                    <input type="checkbox" name="IPS" value="IPS">IPS
                    <input type="checkbox" name="PAI" value="PAI">PAI
                    <input type="checkbox" name="IPA" value="IPA">IPA
                    <input type="checkbox" name="MTK" value="MTK">MTK
                    <input type="checkbox" name="PJK" value="PJK">PJK
                    <input type="checkbox" name="INFORMATIKA" value="INFORMATIKA">INFORMATIKA
            <tr>
            <tr>
                <td>Total Nilai Ijazah</td>
                <td>
                    <input type="text" name="Total" size="30"/>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="email" size="30"/>
                </td>
            </tr>
            <tr>
                <th>
                <td><input type="submit" name="Pilih"></td>
                </th>
            </tr>
</table></form>
</html>