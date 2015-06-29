<div class="col-md-6 col-xs-12"> 
    <h2><?php echo $title; ?></h2>
    <?php print render($content['body']); ?>
    <p class="mt20px"><a href="<?php print render($content['field_button_link']); ?>" class="btn btn-cigna-secondary col-xs-3"><?php print render($content['field_button_text']); ?></a></p>
</div>