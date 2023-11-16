<?php decorate_with('layout_home'); ?>

<?php slot('sidebar'); ?>

  <?php echo get_component('menu', 'staticPagesMenu'); ?>

  <?php echo get_component('default', 'popular', [
      'limit' => 10,
      'sf_cache_key' => $sf_user->getCulture(),
  ]); ?>

<?php end_slot(); ?>

<section id="apresentacao-ufpa" class="mb-3">
  <div class="py-3">
    <h1>UFPA: MAIS QUE UMA UNIVERSIDADE</h1>
    <p class="descricao"><br></p>
    <p class="descricao">A Universidade Federal do Pará está presente em 78 municípios paraenses</p>
    <p class="descricao">com atividades vinculadas a 12 <em>campi</em>: Abaetetuba, Altamira, Ananindeua, Belém, Bragança,</p>
    <p class="descricao">Breves, Cametá, Capanema, Castanhal, Salinópolis, Soure e Tucuruí.</p>
  </div>
  <div class="py-3">
    <div><p><span>5.379</span></p><p><span>DOCENTES E TÉCNICOS</span></p></div>
    <div><p><span>50.374</span></p><p><span>ALUNOS</span></p></div>
    <div><p><span>155</span></p><p><span>CURSOS DE GRADUAÇÃO</span></p></div>
    <div><p><span>144</span></p><p><span>CURSOS DE PÓS-GRADUAÇÃO</span></p></div>
    <div><p><span>56</span></p><p><span>CURSOS DE RESIDÊNCIA E ESPECIALIZAÇÃO</span></p></div>
  </div>
</section>

<?php $browseMenu = QubitMenu::getById(QubitMenu::BROWSE_ID); ?>
<?php if ($browseMenu->hasChildren()) { ?>
  <section class="card mb-3">
    <div class="list-group list-group-flush">
      <?php foreach ($browseMenu->getChildren() as $item) { ?>
        <a
          class="list-group-item list-group-item-action"
          href="<?php echo url_for($item->getPath(['getUrl' => true, 'resolveAlias' => true])); ?>">
          <?php echo esc_specialchars($item->getLabel(['cultureFallback' => true])); ?>: <?php echo esc_specialchars($item->getDescription(['cultureFallback' => true])); ?>
        </a>
      <?php } ?>
    </div>
  </section>
<?php } ?>