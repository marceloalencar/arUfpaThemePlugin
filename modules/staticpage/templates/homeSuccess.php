<?php decorate_with('layout_home'); ?>

<?php slot('sidebar'); ?>

  <?php echo get_component('menu', 'staticPagesMenu'); ?>

  <?php echo get_component('default', 'popular', [
      'limit' => 10,
      'sf_cache_key' => $sf_user->getCulture(),
  ]); ?>

<?php end_slot(); ?>

<section id="apresentacao-ufpa" class="mb-3">
  <div class="d-flex flex-column align-items-center px-3 py-3">
    <h1>UFPA: MAIS QUE UMA UNIVERSIDADE</h1>
    <p class="descricao"><br></p>
    <p class="descricao">A Universidade Federal do Pará está presente em 78 municípios paraenses</p>
    <p class="descricao">com atividades vinculadas a 12 <em>campi</em>: Abaetetuba, Altamira, Ananindeua, Belém, Bragança,</p>
    <p class="descricao">Breves, Cametá, Capanema, Castanhal, Salinópolis, Soure e Tucuruí.</p>
  </div>
  <div class="d-flex flex-row flex-wrap justify-content-center px-3 py-3">
    <div class="numeros flex-fill"><p>5.379</p><p>DOCENTES E TÉCNICOS</p></div>
    <div class="numeros flex-fill"><p>50.374</p><p>ALUNOS</p></div>
    <div class="numeros flex-fill"><p>155</p><p>CURSOS DE GRADUAÇÃO</p></div>
    <div class="numeros flex-fill"><p>144</p><p>CURSOS DE</p><p>PÓS-GRADUAÇÃO</p></div>
    <div class="numeros flex-fill"><p>56</p><p>CURSOS DE</p><p>RESIDÊNCIA E ESPECIALIZAÇÃO</p></div>
  </div>
</section>

<?php $browseMenu = QubitMenu::getById(QubitMenu::BROWSE_ID); ?>
<?php if ($browseMenu->hasChildren()) { ?>
  <section id="menu-destaque" class="row row-cols-1 row-cols-md-4 g-4 mb-3">    
    <?php foreach ($browseMenu->getChildren() as $item) { ?>
      <div class="col">
        <div class="card h-100">
        <?php echo image_tag('/plugins/arUfpaThemePlugin/images/foto_arquivo.jpg', ['class' => 'card-img-top']); ?>
          <div class="d-flex flex-column card-body">
            <h5 class="card-title"><?php echo esc_specialchars($item->getLabel(['cultureFallback' => true])); ?></h5>
            <p class="card-text"><?php echo esc_specialchars($item->getDescription(['cultureFallback' => true])); ?></p>
            <a class="mt-auto btn btn-primary" href="<?php echo url_for($item->getPath(['getUrl' => true, 'resolveAlias' => true])); ?>">Acessar</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </section>
<?php } ?>