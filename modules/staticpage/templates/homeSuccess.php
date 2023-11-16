<?php decorate_with('layout_home'); ?>

<?php slot('sidebar'); ?>

  <?php echo get_component('menu', 'staticPagesMenu'); ?>

  <?php echo get_component('default', 'popular', [
      'limit' => 10,
      'sf_cache_key' => $sf_user->getCulture(),
  ]); ?>

<?php end_slot(); ?>

<div class="mb-3">
  <div>
    <p>UFPA: MAIS QUE UMA UNIVERSIDADE</p>
    <p>A Universidade Federal do Pará está presente em 78 municípios paraenses com atividades vinculadas a 12 campi: Abaetetuba, Altamira, Ananindeua, Belém, Bragança, Breves, Cametá, Capanema, Castanhal, Salinópolis, Soure e Tucuruí.</p>
  </div>
  <div><p><span>5.379</span></p><p><span>DOCENTES E TÉCNICOS</span></p></div>
  <div><p><span>50.374</span></p><p><span>ALUNOS</span></p></div>
  <div><p><span>155</span></p><p><span>CURSOS DE GRADUAÇÃO</span></p></div>
  <div><p><span>144</span></p><p><span>CURSOS DE PÓS-GRADUAÇÃO</span></p></div>
  <div><p><span>56</span></p><p><span>CURSOS DE RESIDÊNCIA E ESPECIALIZAÇÃO</span></p></div>
</div>

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