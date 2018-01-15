<!doctype html>
<html lang="en">
    <head>
        <title>Sistema RepMoney</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/custom.css">
    </head>
    <body>

    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="customtitle" href="<?php echo base_url('principal')?>">RepMoney</a>
        <p>Boas vindas, <?php  echo $this->session->userdata('userlogado')->nome;?></p>
        <a href="<?php echo base_url('usuarios/logout')?>" class="btn custombtn">SAIR</a>
            
    </nav>

  
