<?=$this->extends('site.main') ?>

<?=$this->section_start('css') ?>
  <link rel="stylesheet" href="<?php echo CSS_PATH; ?>home.css" />
<?=$this->section_end() ?>

<div class="home">
  <div class="home-list">
    <?=$this->partial('site.list'); ?>
  </div>

  <?=$this->component('site.button', [
      'type' => 'link',
      'href' => '/note/create',
      'class' => 'btn-add',
      'text' => '+'
    ]); ?>
</div>