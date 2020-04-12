<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <h3>Halaman Login</h3>
    <?= $form_open ?>
    <p>
        <?= $label_email ?>
        <?= $input_email ?>
    </p>
    <p>
        <?= $label_password ?>
        <?= $input_password ?>
    </p>
    <p>
        <?php
        $pesan = $this->session->flashdata('pesan');
        echo $pesan;
        ?>
    </p>
    <?= $submit ?>
    <?= $form_close ?>
</body>
</html>