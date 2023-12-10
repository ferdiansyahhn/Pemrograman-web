<?php
include 'koneksi.php';
$query = "SELECT * FROM tb_siswa;";
$sql = mysqli_query($conn, $query);
$no = 0;


?>
<html>

<head>
    <meta charset="utf-8">
    <!-- Bootsrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>ujian_crud</title>
    <!--FontAwesome-->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                CRUD - BS5
            </a>
        </div>
    </nav>
    <!-- Judul -->
    <div class="Container-fluid">
        <H1 class="mt-4"> Data Siswa</H1>
        <figure>
            <blockquote class="blockquote">
                <p>Berisi data yang telah disimpan di database</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                CRUD <cite title="Source Title">Create Read Update dan Delete</cite>
            </figcaption>
        </figure>
        <a href="mengelola.php" type="button" class="btn btn-info">
            <i class="fa fa-plus"></i>
            Tambah Data
        </a>
        <table class="table caption-top table-bordered table-hover">
            <caption>List of users</caption>
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">NISN</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Aksi</th>
                </tr>
                </tbody>
            </thead>
            <tbody>
                <?php
                while ($result = mysqli_fetch_assoc($sql)) {
                    ?>
                    <tr>
                        <td>
                            <center>
                                <?php echo ++$no; ?>.
                            </center>
                        </td>
                        <td>
                            <?php echo $result['nisn']; ?>
                        </td>
                        <td>
                            <?php echo $result['nama_siswa']; ?>
                        </td>
                        <td>
                            <?php echo $result['jenis_kelamin']; ?>
                        </td>
                        <td>
                            <?php echo $result['alamat']; ?>
                        </td>
                        <td>
                            <?php echo $result['kelas']; ?>
                        </td>
                        <td>
                            <a href="mengelola.php?ubah=<?php echo $result['id_siswa']; ?>" type="button"
                                class="btn btn-success btn-sm">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a href="proses.php?hapus=<?php echo $result['id_siswa']; ?>" button type="button"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Apakah yakin ingin menghapus data tersebut?')">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    </div>
</body>

</html>