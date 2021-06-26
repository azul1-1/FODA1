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

  <!-- All -->
  <link rel="stylesheet" href="<?= base_url('assets/custom/all/css/generico.css') ?>">
  <script type="text/javascript" src="<?php echo base_url('assets/custom/all/js/divs-bloqueadores.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/custom/all/js/divs-ocultadores.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/custom/all/js/forms-acciones-usuario.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/custom/all/js/forms-marcas.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/custom/all/js/forms-mensajes.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/custom/all/js/forms-verificadores.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/custom/all/js/funct-conversores.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/custom/all/js/funct-validadores.js'); ?>"></script>

  <!-- Outside -->
  <link rel="stylesheet" href="<?= base_url('assets/custom/outside/css/estilo.css') ?>">
</head>

<body>