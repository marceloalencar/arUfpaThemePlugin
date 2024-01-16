<?php decorate_with('layout_home'); ?>

<?php slot('sidebar'); ?>

  <?php echo get_component('menu', 'staticPagesMenu'); ?>

  <?php echo get_component('default', 'popular', [
      'limit' => 10,
      'sf_cache_key' => $sf_user->getCulture(),
  ]); ?>

<?php end_slot(); ?>

<section id="menu-destaque" class="row row-cols-1 row-cols-md-4 g-4 mb-3">
    <div class="col">
      <div class="card h-100">
      <?php echo image_tag('/plugins/arUfpaThemePlugin/images/descricoes.jpg', ['class' => 'card-img-top']); ?>
        <div class="d-flex flex-column card-body">
          <h5 class="card-title">Descrições Arquivísticas</h5>
          <p class="card-text">Representação arquivística dos fundos (Conjunto de documentos, independentemente de sua forma ou suporte, organicamente produzido e/ou acumulado e utilizado por um indivíduo, família ou entidade coletiva no decurso das suas atividades e funções) existentes no acervo arquivístico custodiado pelo Arquivo Central da UFPA.</p>
          <a class="mt-auto btn btn-primary" href="<?php echo url_for([
            'module' => 'informationobject',
            'action' => 'browse',
          ]); ?>">Acessar</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
      <?php echo image_tag('/plugins/arUfpaThemePlugin/images/autoridades.jpg', ['class' => 'card-img-top']); ?>
        <div class="d-flex flex-column card-body">
          <h5 class="card-title">Registros de autoridade</h5>
          <p class="card-text">Forma autorizada do nome combinada com outros elementos de informação que identificam e descrevem a entidade nomeada (instituições, unidades e subunidades da UFPA, pessoas ou outras entidades identificadas nos documentos arquivísticos que possuem relação com a produção deles) e pode remeter para outros registros de autoridade relacionados.</p>
          <a class="mt-auto btn btn-primary" href="<?php echo url_for([
            'module' => 'actor',
            'action' => 'browse',
          ]); ?>">Acessar</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
      <?php echo image_tag('/plugins/arUfpaThemePlugin/images/funcoes.jpg', ['class' => 'card-img-top']); ?>
        <div class="d-flex flex-column card-body">
          <h5 class="card-title">Funções</h5>
          <p class="card-text">Qualquer objetivo de alto nível, responsabilidade ou tarefa prescrita como atribuição de uma entidade coletiva pela legislação, política ou mandato. Funções podem ser decompostas em conjuntos de operações coordenadas, tais como subfunções, procedimentos operacionais, atividades, tarefas ou transações.</p>
          <a class="mt-auto btn btn-primary" href="<?php echo url_for([
            'module' => 'function',
            'action' => 'browse',
          ]); ?>">Acessar</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
      <?php echo image_tag('/plugins/arUfpaThemePlugin/images/documentos.jpg', ['class' => 'card-img-top']); ?>
        <div class="d-flex flex-column card-body">
          <h5 class="card-title">Documentos digitais</h5>
          <p class="card-text">Relação de documentos digitais disponíveis para acesso na plataforma AtoM.</p>
          <a class="mt-auto btn btn-primary" href="<?php echo url_for([
            'module' => 'informationobject',
            'action' => 'browse',
            'view' => 'card',
            'onlyMedia' => true,
            'topLod' => false,
          ]); ?>">Acessar</a>
        </div>
      </div>
    </div>
</section>