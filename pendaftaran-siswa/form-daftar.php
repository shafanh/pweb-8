<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            width: 500px;
        }

        .form-title {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container form-container">
        <form action="proses-pendaftaran.php" method="POST">
            <fieldset>
			<h3 class="text-center">Formulir Pendaftaran Siswa Baru</h3>
                <div class="form-group" style="font-size: small;">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama lengkap" style="font-size: small;">
                </div>
                <div class="form-group" style="font-size: small;">
                    <label for="alamat">Alamat:</label>
                    <textarea class="form-control" name="alamat" style="font-size: small;"></textarea>
                </div>
                <div class="form-group" style="font-size: small;">
                    <label>Jenis Kelamin:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki" id="laki-laki" style="font-size: small;">
                        <label class="form-check-label" for="laki-laki">Laki-laki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan" id="perempuan" style="font-size: small;">
                        <label class="form-check-label" for="perempuan">Perempuan</label>
                    </div>
                </div>
                <div class="form-group" style="font-size: small;">
                    <label for="agama">Agama:</label>
                    <select class="form-control" name="agama" style="font-size: small;">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Atheis</option>
                    </select>
                </div>
                <div class="form-group" style="font-size: small;">
                    <label for="sekolah_asal">Sekolah Asal:</label>
                    <input type="text" class="form-control" name="sekolah_asal" placeholder="Nama sekolah" style="font-size: small;">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" name="daftar">Daftar</button>
                </div>
            </fieldset>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

