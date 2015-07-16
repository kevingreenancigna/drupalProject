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
    <div id="image" class="jumbotron">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="col-sm-12 col-md-12 col-lg-9">
              <span class="col-sm-2 col-md-2" id="core-icon"> </span>
              <span class="col-md-10">
                <?php print $header; ?>
              </span>
            </div>
            <div class="col-lg-3 visible-lg">
              <p class="text-center"><a class="btn btn-warning btn-lg btn-block" href="#" role="button">Get a Quote</a> </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section>
    <div class="container">
      <div class="row">
        <p>Three levels of essential core cover, Silver, Gold and Platinum to choose from. Our core policies cover for inpatient, day case surgery and accommodation costs. In addition, essential cover for cancer and psychiatric care are provided for. Gold and Platinum policies also offer cover for routine maternity.
        </p>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-4" id="silver">
          <div class="medal-icon"> </div><span class="title">Silver</span>
          <hr>
          <div class="row">
            <h4>from</h4>
            <h3>€135.74</h3>
            <p>Indicative per month</p>
          </div>
          <div class="row">
            <ul class="fa-ul">
              <li><i class="fa-li fa fa-check"></i>Overall annual benefit: <strong>$1,000,000/€800,000/£650,000</strong></li>
              <li><i class="fa-li fa fa-check"></i>Inpatient, daypatient &amp; accomodation costs. Paid full for semi-private room</li>
              <li><i class="fa-li fa fa-check"></i> Total cover for cancer</li>
              <li><i class="fa-li fa fa-times"></i> No maternity</li>
              <li><i class="fa-li fa fa-times"></i>No travel safety app</li>
            </ul>
          </div>
          <div class="row">
            <p class="text-center"><a href="#">See all benefits</a></p>
            <p class="button"><a class="btn btn-warning btn-lg" href="#">Get a Quote</a></p>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4" id="gold">
          <div class="medal-icon"> </div><span class="title">Gold</span>
          <hr>
          <div class="row">
            <h4>from</h4>
            <h3>€135.74</h3>
            <p>Indicative per month</p>
          </div>
          <div class="row">
            <ul class="fa-ul">
              <li><i class="fa-li fa fa-check"></i>Overall annual benefit: <strong>$1,000,000/€800,000/£650,000</strong></li>
              <li><i class="fa-li fa fa-check"></i>Inpatient, daypatient &amp; accomodation costs. Paid full for semi-private room</li>
              <li><i class="fa-li fa fa-check"></i> Total cover for cancer</li>
              <li><i class="fa-li fa fa-times"></i> No maternity</li>
              <li><i class="fa-li fa fa-times"></i>No travel safety app</li>
            </ul>
          </div>
          <div class="row">
            <p class="text-center"><a href="#">See all benefits</a></p>
            <p class="button"><a class="btn btn-warning btn-lg" href="#">Get a Quote</a></p>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4" id="platinum">
          <div class="medal-icon"> </div><span class="title">Platinum</span>
          <hr>
          <div class="row">
            <h4>from</h4>
            <h3>€135.74</h3>
            <p>Indicative per month</p>
          </div>
          <div class="row">
            <ul class="fa-ul">
              <li><i class="fa-li fa fa-check"></i>Overall annual benefit: <strong>$1,000,000/€800,000/£650,000</strong></li>
              <li><i class="fa-li fa fa-check"></i>Inpatient, daypatient &amp; accomodation costs. Paid full for semi-private room</li>
              <li><i class="fa-li fa fa-check"></i> Total cover for cancer</li>
              <li><i class="fa-li fa fa-times"></i> No maternity</li>
              <li><i class="fa-li fa fa-times"></i>No travel safety app</li>
            </ul>
          </div>
          <div class="row">
            <p class="text-center"><a href="#">See all benefits</a></p>
            <p class="button"><a class="btn btn-warning btn-lg" href="#">Get a Quote</a></p>
          </div>
        </div>
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
