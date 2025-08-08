<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Permohonan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h3>Data Permohonan</h3>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Pemohon</th>
                    <th>Jenis Kegiatan</th>
                    <th>Tanggal Permohonan</th>
                    <!-- Tambahkan kolom lain sesuai struktur tabel -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($berkas as $row): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['nama_pemohon'] ?? '-' ?></td>
                        <td><?= $row['jenis_kegiatan'] ?? '-' ?></td>
                        <td><?= $row['tanggal_permohonan'] ?? '-' ?></td>
                        <!-- Tambahkan data lain sesuai kebutuhan -->
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>