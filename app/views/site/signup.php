<?=$this->extends('site.main') ?>

<?=$this->section_start('css') ?>
  <link rel="stylesheet" href="<?php echo CSS_PATH; ?>form.css" />
<?=$this->section_end() ?>

<div class="form-wrapper">
  <form method="POST" action="/user/store" form="form-signup">
    <h2>Crie sua conta</h2>

    <div class="input-wrapper">
      <label for="firstname">Nome</label>
      <input type="text" id="firstname" name="firstname" placeholder="Digite seu nome" value="<?php echo old('firstname'); ?>"/>
      <?php echo flash('firstname'); ?>
    </div>

    <div class="input-wrapper">
      <label for="lastname">Sobrenome</label>
      <input type="text" id="lastname" name="lastname" placeholder="Digite seu sobrenome" value="<?php echo old('lastname'); ?>"/>
      <?php echo flash('lastname'); ?>
    </div>

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

    <div>
      <p>Ao criar sua conta, você declara que está de acordo com os <a>Termos de uso</a> & <a>Política de Privacidade</a>.
    </div>

    <div class="form-button">
      <?=$this->component('site.button', [
        'type' => 'submit',
        'class' => 'btn-form',
        'text' => 'Cadastrar'
      ]); ?>
    </div>

    <div class="change">
      <p>Já possui uma conta?</p>
      <a href="/login">Entrar agora</a>
    </div>
  </form>
</div>