<?=$this->extends('site.main') ?>

<?=$this->section_start('css') ?>
  <link rel="stylesheet" href="<?php echo CSS_PATH; ?>form.css" />
<?=$this->section_end() ?>

<div class="form-wrapper">
  <form method="POST" action="/login/store" form="form-login">
    <h2>Acesse sua conta</h2>

    <div class="input-wrapper">
      <label for="email">E-mail</label>
      <input type="email" id="email" name="email" placeholder="Digite seu e-mail" value="<?php echo old('email'); ?>"/>
      <?php echo flash('email'); ?>
    </div>

    <div class="input-wrapper">
      <label for="password">Senha</label>
      <input type="password" id="password" name="password" placeholder="Digite sua senha" />
      <?php echo flash('password'); ?>
    </div>

    <div class="form-button">
      <?=$this->component('site.button', [
        'type' => 'submit',
        'class' => 'btn-form',
        'text' => 'Entrar'
      ]); ?>
    </div>

    <div class="change">
      <p>Não possui conta ainda?</p>
      <a href="/user/create">Cadastre-se agora</a>
    </div>
  </form>
</div>