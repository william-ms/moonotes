<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $title ?></title>

    <script src="https://kit.fontawesome.com/360805e100.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <link rel="stylesheet" href="<?php echo CSS_PATH; ?>index.css" />
    <?=$this->section('css') ?>
  </head>

  <body>
    <aside>
      <?=$this->partial('site.sidebar'); ?>
    </aside>

    <section class="content">
      <?=$this->section('content') ?>
    </section>

    <script src="<?php echo JS_PATH; ?>xhttp.js"></script>
    <script src="<?php echo JS_PATH; ?>index.js"></script>
    <?=$this->section('scripts') ?>
  </body>
</html>