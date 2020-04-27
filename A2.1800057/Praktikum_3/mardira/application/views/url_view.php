<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh URl</title>
</head>

<body>
    <h1>Contoh URL</h1>
    <p>Base_url()</p>
    <?= base_url() ?>
    <br>
    <p>ini adalah gambar</p>
    <img src="<?= base_url('assets/Sample.jpg') ?>" alt="Sample" width="200px" height="150px">
    <br>
    <p>2. Site_url()</p>
    <?= site_url() ?>
    <br>
    <p><a href="<?= site_url('halaman') ?>">Ke Halaman View</a></p>
    <br>
    <?= anchor('url/detail/1', 'ke halaman detail') ?>
    <br>
    <?= anchor('url/blank', 'ke halaman blank') ?>
</body>

</html>