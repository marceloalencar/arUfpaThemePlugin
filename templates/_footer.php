<footer>

  <?php echo get_component_slot('footer'); ?>

  <div id="print-date">
    <?php echo __('Printed: %d%', ['%d%' => date('Y-m-d')]); ?>
  </div>

  <div id="js-i18n">
    <div id="read-more-less-links"
      data-read-more-text="<?php echo __('Read more'); ?>" 
      data-read-less-text="<?php echo __('Read less'); ?>">
    </div>
  </div>

  <script async src="https://www.googletagmanager.com/gtag/js?id=G-S3JSPPJCX4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-S3JSPPJCX4');
</script>

  <div id="info-footer" class="text-light text-center lh-sm px-3 py-3">
      <strong>Universidade Federal do Pará</strong><br>
      Rua Augusto Corrêa, 1 - Guamá - Belém/PA - Brasil.
  </div>
</footer>


