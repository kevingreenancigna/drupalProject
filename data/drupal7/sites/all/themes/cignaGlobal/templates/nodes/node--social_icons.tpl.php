<div class="row">
    <!-- First Icon -->
    <?php if ($node -> field_icon_social[LANGUAGE_NONE][0]['value'] === "fa-facebook"): ?>
        <p class="mt10px"><a href="<?php print render($content['field_link_text']); ?>"><span class="col-xs-1"><i class="fa fa-facebook"></i></span><span class="col-xs-10"><?php print render($content['field_link_text']); ?></span></a></p>
    <?php endif; ?>
    
    <?php if ($node -> field_icon_social[LANGUAGE_NONE][0]['value'] === "fa-twitter"): ?>
        <p class="mt10px"><a href="<?php print render($content['field_link_text']); ?>"><span class="col-xs-1"><i class="fa fa-twitter"></i></span><span class="col-xs-10"><?php print render($content['field_link_text']); ?></span></a></p>
    <?php endif; ?>
    
    <!-- End First Icon -->
    
    <!-- Second Icon -->
    <?php if ($node -> field_icon_social2[LANGUAGE_NONE][0]['value'] === "fa-facebook"): ?>
        <p class="mt20px"><a href="<?php print render($content['field_link_text2']); ?>"><span class="col-xs-1"><i class="fa fa-facebook"></i></span><span class="col-xs-10"><?php print render($content['field_link_text2']); ?></span></a></p>
    <?php endif; ?>
    
    <?php if ($node -> field_icon_social2[LANGUAGE_NONE][0]['value'] === "fa-twitter"): ?>
        <p class="mt20px"><a href="<?php print render($content['field_link_text2']); ?>"><span class="col-xs-1"><i class="fa fa-twitter"></i></span><span class="col-xs-10"><?php print render($content['field_link_text2']); ?></span></a></p>
    <?php endif; ?>
    
    <!-- End Second Icon -->
</div>




                   
