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
    <nav class="navbar bg-body-tertiary mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                CRUD - BS5
            </a>
        </div>
    </nav>
    <div class="container">
        <form method="post" action="proses.php">
            <div class="mb-3 row">
                <label for="nisn" class="col-sm-2 col-form-label">
                    NISN
                </label>
                <div class="col-sm-10">
                    <input type="text" name="nisn" class="form-control" id="nisn" placeholder="ex : 1235523">
                </div>
            </div>
            <div class="container">
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">
                        Nama Siswa
                    </label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_siswa" class="form-control" id="nama" placeholder="ex : Jajang">
                    </div>
                </div>
                <div class="container">
                    <div class="mb-3 row">
                        <label for="jenis_kelamin" name="jenis_kelamin" class="col-sm-2 col-form-label">Jenis
                            Kelamin</label>
                        <div class="col-sm-10">
                            <select id="jkel" class="form-select">
                                <option selected>Jenis Kelamin</option>
                                <option value="1">Laki - laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    </select>
                    <div class="container">
                        <div class="mb-3 row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="container">
                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-2 col-form-label">
                                    Kelas
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="kelas" class="form-control" id="kelas"
                                        placeholder="ex : 5">
                                </div>
                            </div>
                            <div class="mb-3 row mt-4">
                                <div class="col">
                                    <?php
                                    if (isset($_GET['ubah'])) {
                                        ?>
                                        <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                                            <i class="fa fa-floppy-o" aria-hidden="true"></i>
                                            Simpan Perubahan
                                        </button>
                                        <?php
                                    } else {
                                        ?>
                                        <button type="submit" type="submit" name="aksi" value="add" class="btn btn-primary">
                                            <i class="fa fa-floppy-o" aria-hidden="true"></i>
                                            Tambahkan
                                        </button>
                                        <?php
                                    }
                                    ?>
                                    <a href="index.php" type="button" class="btn btn-danger">
                                        <i class="fa fa-step-backward" aria-hidden="true"></i>
                                        Batal
                                    </a>
                                </div>
        </form>
    </div>
</body>

</html>