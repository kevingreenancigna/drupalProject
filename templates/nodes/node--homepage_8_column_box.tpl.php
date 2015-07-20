<div class="-col-md-8">
    <div class="well blue clearfix core-cover">
        <ul class="nav nav-tabs core-cover">
            <?php if(!empty($content['field_tab1_title'])): ?>
            <li class="active col-xs-6  no-padding  text-center">
            	<a href="#tab-table-one_<?php print $node->nid; ?>" data-toggle="tab"><?php print render($content['field_tab1_title']); ?></a>
            	<i class="fa fa-caret-down fa-4x"></i>
            </li>
            <?php endif; ?>
            <?php if(!empty($content['field_tab2_title'])): ?>
            <li class="-col-xs-6 no-padding text-center">
            	<a href="#tab-table-two_<?php print $node->nid; ?>" data-toggle="tab"><?php print render($content['field_tab2_title']); ?></a>
            	<i class="fa fa-caret-down fa-4x"></i>
            </li>
            <?php endif; ?>
            
        </ul>
        <div class="tab-content">
        	<?php if(!empty($content['field_core_title'])): ?>
            <div class="tab-pane fade in active" id="tab-table-one_<?php print $node->nid; ?>">
            	<div class="-row">
                	<div class="-col-md-8">
                        <h3 class="cover"><?php print render($content['field_core_title']); ?></h3>
                        <p class="core-cover-body"><?php print render($content['field_core_body']); ?></p>
                    </div>
                    <div class="-col-md-12">
                    	<div class="-col-md-9  -mt10px no-padding">
                        	<?php print render($content['field_core_small_text']); ?>
                        </div>
                        <div class="-visible-sm  -visible-xs  -mt10px"></div>
                        <div class="-col-md-3 no-padding">
                        	<p><a href="<?php print render($content['field_button_link']); ?>" class="btn btn-cigna-secondary col-xs-12"><?php print render($content['field_button']); ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
			<?php if(!empty($content['field_benefit1_title'])): ?>
            <div class="tab-pane fade in" id="tab-table-two_<?php print $node->nid; ?>">
                <!--<i class="fa fa-gear pull-left fa-4x"></i>-->
        		<div class="-col-md-6">
                    <h3 class="cover  no-margin"><?php print render($content['field_benefit1_title']); ?></h3>
                    <?php print render($content['field_benefit1_body']); ?>
                    <p><a href="<?php print render($content['field_benefit1_link']); ?>" class="green"><?php print render($content['field_benefit1_link_text']); ?></a></p>
                </div>
                <div class="-col-md-6">
                    <h3 class="cover no-margin"><?php print render($content['field_benefit2_title']); ?></h3>
                    <?php print render($content['field_benefit2_body']); ?>
                    <p><a href="<?php print render($content['field_benefit2_link']); ?>" class="green"><?php print render($content['field_benefit2_link_text']); ?></a></p>
                </div>
                <div class="-col-md-6 mt10px">
                    <h3 class="cover no-margin"><?php print render($content['field_benefit3_title']); ?></h3>
                    <?php print render($content['field_benefit3_body']); ?>
                    <p><a href="<?php print render($content['field_benefit3_link']); ?>" class="green"><?php print render($content['field_benefit3_link_text']); ?></a></p>
                </div>
                <div class="-col-md-6 mt10px">
                    <h3 class="cover no-margin"><?php print render($content['field_benefit4_title']); ?></h3>
                    <?php print render($content['field_benefit4_body']); ?>
                    <p><a href="<?php print render($content['field_benefit4_link']); ?>" class="green"><?php print render($content['field_benefit4_link_text']); ?></a></p>
                </div>
            </div>
            <?php endif; ?>
            
        </div>
    </div>
</div>