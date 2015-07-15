<?php

/**
 * @file
 * Display Suite 1 column super-stacked template.
 */
?>
  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>
  <header>
    <div class="jumbotron">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="col-xs-4 col-md-4">
              <div id="image" class="center-block"> </div>
            </div>
            <div class="col-xs-8 col-md-8">
              <?php print $header; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
<section>
  <div class="container">
    <div class="row">
      <?php print $main; ?>
    </div>
  </div>
</section>
<footer>
  <div class="container">
    <div class="row">
      <div id="social">
        <div class="col-md-6">
          <p><a href="#"><span class="fa fa-facebook" aria-hidden="true"> </span> Find us on Facebook</a></p>
        </div>
        <div class="col-md-6">
          <p><a href="#"><span class="fa fa-twitter" aria-hidden="true"> </span> Follow us on Twitter</a></p>
        </div>
      </div>
    </div>
    <div class="row">
      <p>&copy; 2015 Cigna.</p>
    </div>
  </div>
</footer>


<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
