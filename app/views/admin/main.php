<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $title ?></title>

    <link rel="stylesheet" href="/assets/css/index.css" />
  </head>

  <body>
    <header>
      <?=$this->partial('admin.header') ?>
    </header>

    <section class="content">
      <?=$this->section('content') ?>
    </section>

    <script src="/assets/js/index.js"></script>
  </body>
</html>