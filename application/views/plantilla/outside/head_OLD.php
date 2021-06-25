<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title data-baseurl='<?= base_url() ?>'><?= $titulo ?></title>

  <?php /* css y js común, para cualquier vista */ ?>

  <!-- jquery y bootstrap -->
  <script src="<?= base_url('assets/libraries/Jquery/jquery-1.6.3.min.js') ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
  <link rel="stylesheet" href="<?= base_url('assets/libraries/bootstrap/css/bootstrap.min.css') ?>">
  <script src="<?= base_url('assets/libraries/bootstrap/js/bootstrap.min.js') ?>"></script>

  <!-- confirm -->
  <link rel="stylesheet" href="<?php echo base_url('assets/libraries/jquery-confirm/css/jquery-confirm.css'); ?>">
  <script type="text/javascript" src="<?php echo base_url('assets/libraries/jquery-confirm/js/jquery-confirm.js'); ?>"></script>

  <!-- Fontawesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/libraries/fontawesome/css/all.css'); ?>">

  <?php /* css y js común para vistas fuera de la app */ ?>

  <!-- modernizr -->
  <script src="<?= base_url('assets/libraries/modernizr/modernizr.min.js') ?>"></script>

  <!-- animate -->
  <link rel="stylesheet" href="<?= base_url('assets/libraries/animate/animate.min.css') ?>">

  <!-- Outside -->
  <link rel="stylesheet" href="<?= base_url('assets/custom/outside/css/estilo.css') ?>">

  <script>
    $(document).ready(function() {

      $("#letras").hide().fadeIn(2000);
    });








    /*$("#boto").toggle(function(){
      $("#panel").animate(

        {
          left:"0vw"
        });
    },function(){

      $("#panel").animate(

        {
          left:"-18vw"
        });

    });*/
  </script>
</head>

<body>