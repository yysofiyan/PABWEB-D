<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contoh URL</title>
</head>
<body>
	<h1>Contoh URL</h1>
	<p>Base_url()</p>
	<?php echo base_url() ?>
	<br>
    <p>ini adalah gambar</p>
    <img src="<?= base_url('assets/logo.png') ?>" width="300px" height="300px">
    <br>
    <p>2. Site_url()</p>
    <?= site_url() ?>
    <br>
    <p><a href="<?= site_url('halaman') ?>">Ke Halaman View</a></p>
    <br>
    <?= anchor('url/detail/1', 'ke halaman detail') ?>
    <br>
    <?php echo anchor('url/blank', 'ke halaman blank') ?>
</body>
</html>