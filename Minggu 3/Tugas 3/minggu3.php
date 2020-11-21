<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Prak Minggu 3</title>
</head>
<body>
	<form action="tambahData.php" method="POST" enctype="multipart/form-data">>
        <hr><hr>
        <legend>Tambah Data</legend>
        <p>
            <label>NRP:</label>
            <input type="text" name="NRP" placeholder="NRP..." />
        </p>
        <p>
            <label>Nama:</label>
            <input type="text" name="Nama" placeholder="Nama Lengkap..." />
        </p>
        <p>
            <label>Foto: </label>
            <input type='File' name='foto'/>
        </p>
        <p>
            <label>Jurusan:</label>
            <select type="text" name="jurusan" id="">
                <?php
                $conn = mysqli_connect("localhost", "root", "", "mahasiswa") or die("gagal koneksi database");
                $query = mysqli_query($conn, "select * from jurusan");
                while($row = mysqli_fetch_array($query)) {
                    echo "<option value=\"${row['id_jur']}\">${row['nama']}</option>";
                }
            ?>
            </select>
        </p>
        <input type="submit" name="simpan" value="simpan"> 
    </form>
     <hr><hr>
    <h3>Search Data</h3>
    <form action="cariNama.php" method="POST">
        Nama : <input type="text" name="nama">
        <input type="submit" value="Cari Data" name='cari'>
    </form>

    <hr><hr>
</body>
</html>