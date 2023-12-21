<?php decorate_with('layout_home'); ?>

<?php slot('sidebar'); ?>

  <?php echo get_component('menu', 'staticPagesMenu'); ?>

  <?php echo get_component('default', 'popular', [
      'limit' => 10,
      'sf_cache_key' => $sf_user->getCulture(),
  ]); ?>

<?php end_slot(); ?>

<section id="apresentacao-ufpa" class="mb-3">
  <div class="d-flex flex-column align-items-center px-3 pt-3">
    <h1>UFPA: MAIS QUE UMA UNIVERSIDADE</h1>
    <p class="descricao"><br></p>
    <p class="descricao">A Universidade Federal do Pará está presente em 78 municípios paraenses</p>
    <p class="descricao">com atividades vinculadas a 12 <em>campi</em>: Abaetetuba, Altamira, Ananindeua, Belém, Bragança,</p>
    <p class="descricao">Breves, Cametá, Capanema, Castanhal, Salinópolis, Soure e Tucuruí.</p>
  </div>
  <div class="d-flex flex-row flex-wrap justify-content-center px-3 py-3">
    <div class="numeros flex-fill"><p>5.455</p><p>DOCENTES E TÉCNICOS</p></div>
    <div class="numeros flex-fill"><p>56.235</p><p>ALUNOS</p></div>
    <div class="numeros flex-fill"><p>157</p><p>CURSOS DE GRADUAÇÃO</p></div>
    <div class="numeros flex-fill"><p>144</p><p>CURSOS DE</p><p>PÓS-GRADUAÇÃO</p></div>
    <div class="numeros flex-fill"><p>63</p><p>CURSOS DE</p><p>RESIDÊNCIA E ESPECIALIZAÇÃO</p></div>
  </div>
  <div class="d-flex flex-column align-items-center px-3 pb-3">
    <p class="rodape">Fonte: <a href="https://www.anuario.ufpa.br/">Anuário Estatístico 2023</a></p>
  </div>
</section>

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