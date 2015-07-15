<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
  
<div class="carousel slide" data-ride="carousel" id="carousel-home">
    <div class="carousel-inner">
		<?php foreach ($rows as $key => $row): ?>
          <div class="item <?php if ($key === 0) print 'active' ?>">
            <?php print $row ?>
          </div>
        <?php endforeach ?>
    </div>
	<a class="left carousel-control" data-slide="prev" href="#"><span class="glyphicon glyphicon-chevron-left">&nbsp;</span></a> <a class="right carousel-control" data-slide="next" href="#"><span class="glyphicon glyphicon-chevron-right">&nbsp;</span></a>
</div>