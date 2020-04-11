<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Program Studi</title>
</head>
<body>
    <h1>Data Program Studi</h1>
    <table border="2">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Prodi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach ($prodi as $row) { ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row->nama_prodi ?></td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>
    <?php echo anchor('home', 'kembali ke home'); ?>
</body>
</html>