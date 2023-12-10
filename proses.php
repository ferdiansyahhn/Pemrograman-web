<?php
include 'koneksi.php';


if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "add") {
        $nisn = $_POST['nisn'];
        $nama_siswa = $_POST['nama_siswa'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $kelas = $_POST['kelas'];

        $query = "INSERT INTO tb_siswa VALUES(null, '$nisn', '$nama_siswa', '$jenis_kelamin', '$alamat', '$kelas')";
        $sql = mysqli_query($conn, $query);

        if ($sql) {
            header("location: index.php");
            //echo "Data berhasil ditambahkan <a href='index.php'>[Home]</a>";
        } else {
            echo $query;
        }

        //echo $nisn . "  " . $nama_siswa . "  | " . $jenis_kelamin . "  |  " . $alamat . "  |  " . $kelas;

        echo "<br>Tambah Data <a href='index.php'>[Home]</a>";
    } else if ($_POST['aksi'] == "edit") {
        echo "Edit Data <a href='index.php'>[Home]</a>";
    }
}

if (isset($_GET['hapus'])) {
    $id_siswa = $_GET['hapus'];
    $query = "DELETE FROM tb_siswa where id_siswa = '$id_siswa';";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header("location: index.php");
        //echo "Data berhasil ditambahkan <a href='index.php'>[Home]</a>";
    } else {
        echo $query;
    }
    //echo "hapus data <a href ='index.php'>[Home]</a>";
}
?>