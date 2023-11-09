<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 1000px;
        }

        .form-title {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>		
    <div class="container">
	<h3 class="container text-center">Siswa yang sudah mendaftar</h3>
	<a href="form-daftar.php" class="btn btn-primary mb-2">[+] Tambah Baru</a>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Sekolah Asal</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM calon_siswa";
                $query = mysqli_query($db, $sql);
				// $no = 1;

                while ($siswa = mysqli_fetch_array($query)) {
                    echo "<tr>";

                    echo "<td>" . $siswa['id'] . "</td>";
					// echo "<td>" . $no . "</td>";
                    echo "<td>" . $siswa['nama'] . "</td>";
                    echo "<td>" . $siswa['alamat'] . "</td>";
                    echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
                    echo "<td>" . $siswa['agama'] . "</td>";
                    echo "<td>" . $siswa['sekolah_asal'] . "</td>";

                    echo "<td>";
                    echo "<a href='form-edit.php?id=" . $siswa['id'] . "' class='btn btn-warning'>Edit</a> ";
                    echo "<a href='hapus.php?id=" . $siswa['id'] . "' class='btn btn-danger'>Hapus</a>";
                    echo "</td>";

                    echo "</tr>";
                }
                ?>

            </tbody>
        </table>

        <p class="container">Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
