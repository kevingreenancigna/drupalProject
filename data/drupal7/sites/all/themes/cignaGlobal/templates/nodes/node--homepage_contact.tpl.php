<div class="col-md-12">
    <div class="well clearfix white col-no-padding">
    	
        <!-- First Icon -->
        <?php if ($node -> field_icon1_icon[LANGUAGE_NONE][0]['value'] === "phone"): ?>
            <div class="col-md-4"> 
            	<div class="col-md-2">
                    <span class="fa-stack fa-3x">  
                        <i class="fa fa-phone"></i>
                    </span>
                </div>
                <div class="col-md-10">
                	<h2><?php print render($content['field_section_title']); ?></h2>
                    <?php print render($content['field_icon1_text']); ?>
                	<p class="mt10px"><a href="<?php print render($content['field_button_link']); ?>" class="btn btn-cigna-quaternary col-lg-8 col-xs-12"><?php print render($content['field_button_text']); ?></a></p>
                </div>
            </div>
        <?php endif; ?>
        
       <?php if ($node -> field_icon1_icon[LANGUAGE_NONE][0]['value'] === "callback"): ?> 
            <div class="col-md-4 col-no-padding"> 
            	<div class="col-md-2">
                    <span class="fa-stack fa-3x">  
                        <i class="fa fa-phone"></i>
                        <i class="fa fa-reply fa-stack-1x home-callback-arrow"></i>
                    </span> 
                </div>
                <div class="col-md-10">
                	<h2><?php print render($content['field_section_title']); ?></h2>
                    <?php print render($content['field_icon1_text']); ?>
                	<p class="mt10px"><a href="<?php print render($content['field_button_link']); ?>" class="btn btn-cigna-quaternary col-lg-8 col-xs-12"><?php print render($content['field_button_text']); ?></a></p>
                </div>
            </div>
        <?php endif; ?>
        
       	<?php if ($node -> field_icon1_icon[LANGUAGE_NONE][0]['value'] === "paper-plane"): ?> 
            <div class="col-md-4"> 
            	<div class="col-md-2">
                    <span class="fa-stack fa-3x">  
                        <i class="fa fa-paper-plane"></i>
                    </span> 
                </div>
                <div class="col-md-10">
                	<h2><?php print render($content['field_section_title']); ?></h2>
                    <?php print render($content['field_icon1_text']); ?>
                	<p class="mt10px"><a href="<?php print render($content['field_button_link']); ?>" class="btn btn-cigna-quaternary col-lg-8 col-xs-12"><?php print render($content['field_button_text']); ?></a></p>
                </div>
            </div>
        <?php endif; ?> 
        <!-- End First Icon -->
        
        <!-- Second Icon -->
        <?php if ($node -> field_icon2_icon[LANGUAGE_NONE][0]['value'] === "phone"): ?>
            <div class="col-md-4"> 
            	<div class="col-md-2">
                    <span class="fa-stack fa-3x">  
                        <i class="fa fa-phone"></i>
                    </span>
                </div>
                <div class="col-md-10">
                	<h2><?php print render($content['field_icon2_section_title']); ?></h2>
                    <?php print render($content['field_icon2_text']); ?>
                	<p class="mt10px"><a href="<?php print render($content['field_icon2_button_link']); ?>" class="btn btn-cigna-quaternary col-lg-8 col-xs-12"><?php print render($content['field_icon2_button_text']); ?></a></p>
                </div>
            </div>
        <?php endif; ?>
        
       <?php if ($node -> field_icon2_icon[LANGUAGE_NONE][0]['value'] === "callback"): ?> 
            <div class="col-md-4 col-no-padding"> 
            	<div class="col-md-2">
                    <span class="fa-stack fa-3x">  
                        <i class="fa fa-phone"></i>
                        <i class="fa fa-reply fa-stack-1x home-callback-arrow"></i>
                    </span> 
                </div>
                <div class="col-md-10">
                	<h2><?php print render($content['field_icon2_section_title']); ?></h2>
                    <?php print render($content['field_icon2_text']); ?>
                	<p class="mt10px"><a href="<?php print render($content['field_icon2_button_link']); ?>" class="btn btn-cigna-quaternary col-lg-8 col-xs-12"><?php print render($content['field_icon2_button_text']); ?></a></p>
                </div>
            </div>
        <?php endif; ?>
        
       	<?php if ($node -> field_icon2_icon[LANGUAGE_NONE][0]['value'] === "paper-plane"): ?> 
            <div class="col-md-4"> 
            	<div class="col-md-2">
                    <span class="fa-stack fa-3x">  
                        <i class="fa fa-paper-plane"></i>
                    </span> 
                </div>
                <div class="col-md-10">
                	<h2><?php print render($content['field_icon2_section_title']); ?></h2>
                    <?php print render($content['field_icon2_text']); ?>
                	<p class="mt10px"><a href="<?php print render($content['field_icon2_button_link']); ?>" class="btn btn-cigna-quaternary col-lg-8 col-xs-12"><?php print render($content['field_icon2_button_text']); ?></a></p>
                </div>
            </div>
        <?php endif; ?> 
        <!-- End Second Icon -->
        
        <!-- Third Icon -->
        <?php if ($node -> field_icon3_icon[LANGUAGE_NONE][0]['value'] === "phone"): ?>
            <div class="col-md-4"> 
            	<div class="col-md-2">
                    <span class="fa-stack fa-3x">  
                        <i class="fa fa-phone"></i>
                    </span>
                </div>
                <div class="col-md-10">
                	<h2><?php print render($content['field_icon3_section_title']); ?></h2>
                    <?php print render($content['field_icon3_text']); ?>
                	<p class="mt10px"><a href="<?php print render($content['field_icon3_button_link']); ?>" class="btn btn-cigna-quaternary col-lg-8 col-xs-12"><?php print render($content['field_icon3_button_text']); ?></a></p>
                </div>
            </div>
        <?php endif; ?>
        
       <?php if ($node -> field_icon3_icon[LANGUAGE_NONE][0]['value'] === "callback"): ?> 
            <div class="col-md-4 col-no-padding"> 
            	<div class="col-md-2">
                    <span class="fa-stack fa-3x">  
                        <i class="fa fa-phone"></i>
                        <i class="fa fa-reply fa-stack-1x home-callback-arrow"></i>
                    </span> 
                </div>
                <div class="col-md-10">
                	<h2><?php print render($content['field_icon3_section_title']); ?></h2>
                    <?php print render($content['field_icon3_text']); ?>
                	<p class="mt10px"><a href="<?php print render($content['field_icon3_button_link']); ?>" class="btn btn-cigna-quaternary col-lg-8 col-xs-12"><?php print render($content['field_icon3_button_text']); ?></a></p>
                </div>
            </div>
        <?php endif; ?>
        
       	<?php if ($node -> field_icon3_icon[LANGUAGE_NONE][0]['value'] === "paper-plane"): ?> 
            <div class="col-md-4"> 
            	<div class="col-md-2">
                    <span class="fa-stack fa-3x">  
                        <i class="fa fa-paper-plane"></i>
                    </span> 
                </div>
                <div class="col-md-10">
                	<h2><?php print render($content['field_icon3_section_title']); ?></h2>
                    <?php print render($content['field_icon3_text']); ?>
                	<p class="mt10px"><a href="<?php print render($content['field_icon3_button_link']); ?>" class="btn btn-cigna-quaternary col-lg-8 col-xs-12"><?php print render($content['field_icon3_button_text']); ?></a></p>
                </div>
            </div>
        <?php endif; ?> 
        <!-- End Third Icon -->
    </div>
</div>





                   
