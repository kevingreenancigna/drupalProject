<!-- If button exists, print button -->
<?php if(!empty($content['field_button_text'])): ?>
    <p class="mt20px"><a href="<?php print render($content['field_button_link']); ?>" class="btn btn-cigna-<?php print $node -> field_button_colour[LANGUAGE_NONE][0]['value']; ?> col-md-<?php print $node -> field_button_width[LANGUAGE_NONE][0]['value']; ?> col-xs-12"><?php print render($content['field_button_text']); ?></a></p>
<?php endif; ?>