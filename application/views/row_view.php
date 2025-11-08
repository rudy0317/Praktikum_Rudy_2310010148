<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0">Selamat Datang di Web Rudy Metode Row</h3>
                    </div>
                    <div class="card-body">
                        <p class="lead">
                            <?php echo "Nama saya <strong>{$row->nama_mhs}</strong> dengan NIM <strong>{$row->NIM}</strong>"; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>