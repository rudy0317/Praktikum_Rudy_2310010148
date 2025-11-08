<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Mahasiswa</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            font-size: 14px;
        }
        table, th, td {
            border: 1px solid #000;
        }
        th, td {
            padding: 6px;
            text-align: left;
        }
        h2, h4 {
            text-align: center;
            margin: 4px 0;
        }
    </style>
</head>
<body onload="window.print()">

    <h2>LAPORAN DATA MAHASISWA</h2>
    <h4>Universitas Islam Kalimantan Selatan Muhammad Arsyad AlBanjari Banjarmasin</h4>
    <br>

    <table>
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Program Studi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($mahasiswa as $m): ?>
                <tr>

                    <td><?php echo $m->NIM; ?></td>
                    <td><?php echo $m->nama_mhs; ?></td>
                    <td><?php echo $m->nama_prodi; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
