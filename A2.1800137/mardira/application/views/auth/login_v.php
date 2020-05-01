<?php 
if ($this->session->has_userdata('status') == 'login') {
    redirect('home');
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url("assets/bootstrap4/css/bootstrap.min.css") ?>" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body{
            padding:20px;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="d-sm-flex justify-content-center mb-4">
        <h3>Login</h3>
    </div>

    <?= $form_open ?>

    <div class="row justify-content-center">

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">

                    <?php
                        if($this->session->flashdata('pesan')){
                        $pesan = '<div class="alert alert-danger" role="alert">'.$this->session->flashdata('pesan').'</div>';
                        echo $pesan;
                        }
                    ?>

                    <div class="form-group">
                        <?= $label_email ?>
                        <?= $input_email ?>
                    </div>

                    <div class="form-group mb-4">
                        <?= $label_password ?>
                        <?= $input_password ?>
                    </div>

                    <div class="form-group">
                        <?= $submit ?>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <?= $form_close ?>


</div>
    
</body>
</html>