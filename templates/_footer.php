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

  <div id="info-footer" class="bg-dark text-light text-center lh-sm px-3 py-3">
      <strong>Universidade Federal do Pará</strong><br>
      Rua Augusto Corrêa, 1 - Guamá - Belém/PA - Brasil
  </div>
</footer>

<?php $gaKey = sfConfig::get('app_google_analytics_api_key', ''); ?>
<?php if (!empty($gaKey)) { ?>
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $gaKey; ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    <?php include_slot('google_analytics'); ?>
    gtag('config', '<?php echo $gaKey; ?>');
  </script>
<?php } ?>
