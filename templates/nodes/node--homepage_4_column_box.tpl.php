<div class="">
    <div class="well blue clearfix our-plans">
    	<!-- If title exists, print title -->
     	<?php if(!empty($title)): ?>
			<h2><?php echo $title; ?></h2>
        <?php endif; ?>
        
        <!-- If body exists, print body -->
     	<?php if(!empty($content['body'])): ?>
        	<?php print render($content['body']); ?>
        <?php endif; ?>
        
        <!-- If links exist, print links -->
       <?php if(!empty($content['field_link_1_text'])): ?>
        	<ul class="our-plans">
                <li><a href="<?php print render($content['field_link_1_anchor']); ?>"><?php print render($content['field_link_1_text']); ?><i class="fa fa-chevron-right pull-right"></i></a></li>
                <?php if(!empty($content['field_link_2_text'])): ?>
                    <li><a href="<?php print render($content['field_link_2_anchor']); ?>"><?php print render($content['field_link_2_text']); ?><i class="fa fa-chevron-right pull-right"></i></a></li>
                <?php endif; ?>
            </ul>
       <?php endif; ?>
        
        <!-- If button exists, print button -->
     	<?php if(!empty($content['field_button'])): ?>
        	<p class="mt10px"><a href="<?php print render($content['field_button_link']); ?>" class="btn btn-cigna-primary col-xs-12"><?php print render($content['field_button']); ?></a></p>
        <?php endif; ?>
    </div>
</div>