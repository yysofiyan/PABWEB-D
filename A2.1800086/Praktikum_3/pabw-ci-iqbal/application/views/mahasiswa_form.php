<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa FORM</title>
</head>
<body>
    <h3><?=($this->uri->segment(3)) ? 'Edit' : 'Tambah' ?> Data</h3>
    <?php echo $form_open ?>
    <p>
        <?=$label_nim?>
        <?=$input_nim?>
        <?=$error_nim?>
    </p>
    <p>
        <?=$label_nama?>
        <?=$input_nama?>
        <?=$error_nama?>
    </p>
    <p>
        <?=$label_prodi?>
        <?=$dropdown_prodi?>
    </p>
    <p>
        <?=$form_submit?>
    </p>
    <?=form_close()?>
</body>
</html>