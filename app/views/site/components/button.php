<?=$this->section_start('css') ?>
  <link rel="stylesheet" href="<?php echo CSS_PATH; ?>components/button.css" />
<?=$this->section_end(); ?>

<div class="btn-wrapper">
  <?php if($type === 'link'): ?>
    <a href="<?php echo $href; ?>" class="btn <?php echo $class; ?>">
      <?php echo $text ?>
    </a>

  <?php elseif($type === 'submit'): ?>
    <button type="submit" class="btn <?php echo $class; ?>"><?php echo $text ?></button>

  <?php endif; ?>
</div>