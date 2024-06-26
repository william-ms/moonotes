<?=$this->section_start('css') ?>
  <link rel="stylesheet" href="<?php echo CSS_PATH; ?>sidebar.css" />
<?=$this->section_end() ?>

<?=$this->section_start('scripts') ?>
  <script src="<?php echo JS_PATH; ?>showSidebar.js"></script>
  <script src="<?php echo JS_PATH; ?>backSidebar.js"></script>
  <script src="<?php echo JS_PATH; ?>addSection.js"></script>
  <script src="<?php echo JS_PATH; ?>getNotes.js"></script>
<?=$this->section_end() ?>

<div class="sidebar">
  <div class="sidebar-content">
    <?php if(!isset($user)): ?>
      <div class="sidebar-header">
        <div class="perfil-img">
          <img src="https://www.pngall.com/wp-content/uploads/5/Profile.png" />
        </div>

        <div class="login">
          <a href="/login" class="signin">SignIn</a>
          <a href="/user/create" class="signup">SignUp</a>
        </div>
      </div>
    <?php else: ?>
      <div class="sidebar-header">
        <div class="perfil-img">
          <img src="https://www.pngall.com/wp-content/uploads/5/Profile.png" />
        </div>

        <div class="perfil-name">
          <p>Olá, <?php echo $user->firstname; ?></p>
        </div>

        <div class="perfil-logout">
          <a href="/login/destroy">sair</a>
        </div>
      </div>

      <div class="sidebar-list">
        <div class="sidebar-sections">
          <div class="sidebar-title">
            <h2>Minhas seções</h2>
          </div>

          <ul>
            <?php foreach($sections as $section): ?>
              <li>
                <button onclick="getNotes(<?php echo $section->id; ?>)">
                  <?php echo $section->title ?>
                </button>
              </li>
            <?php endforeach; ?>
          </ul>

          <div class="sidebar-add">
            <form id="form-section">
              <input type="text" name="section-title" placeholder="Nova seção"/>
              <button onclick="addSection(event)">Adicionar</button>
            </form>
          </div>
        </div>

        <div class="sidebar-notes"></div>
      </div>
    <?php endif; ?>
  </div>

  <div class="sidebar-button">
    <button onclick="showSidebar(this)"><i class="fa-solid fa-bars"></i></button>
  </div>
</div>