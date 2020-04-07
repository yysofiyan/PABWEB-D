<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <?php echo anchor('mahasiswa/tambah_data', 'Tambah Data') ?>
    <br>
    <br>
    <table border="2">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach ($mahasiswa as $row) { ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row->nim ?></td>
                    <td><?php echo $row->nama_mhs ?></td>
                    <td><?php echo $row->nama_prodi ?></td>
                    <td>
                        <?php echo anchor("mahasiswa/edit/{$row->id_mahasiswa}", "Edit") ?>
                        <?php echo anchor("mahasiswa/hapus/{$row->id_mahasiswa}", "Hapus") ?>
                    </td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>
    <?php
        $pesan = $this->session->flashdata('pesan');
        echo $pesan; 
    ?>
    <br>
    <?php echo anchor('home', 'kembali ke home'); ?>
</body>
</html>