<?php print render($content['body']); ?>
<ul class="nav nav-tabs">
    <?php if(!empty($content['field_tab1_title'])): ?>
    <li class="active"><a href="#tab-table-one_<?php print $node->nid; ?>" data-toggle="tab"><?php print render($content['field_tab1_title']); ?></a></li>
    <?php endif; ?>
    <?php if(!empty($content['field_tab2_title'])): ?>
    <li><a href="#tab-table-two_<?php print $node->nid; ?>" data-toggle="tab"><?php print render($content['field_tab2_title']); ?></a></li>
    <?php endif; ?>
    
</ul>
<div class="tab-content">
    <?php if(!empty($content['field_tab1_text'])): ?>
    <div class="tab-pane fade in active" id="tab-table-one_<?php print $node->nid; ?>">
        <!--<i class="fa fa-gear pull-left fa-4x"></i>-->

        <?php print render($content['field_tab1_text']); ?>
    </div>
    <?php endif; ?>
    <?php if(!empty($content['field_tab2_text'])): ?>
    <div class="tab-pane fade" id="tab-table-two_<?php print $node->nid; ?>">
        <!--<i class="fa fa-gear pull-left fa-4x"></i>-->
        <?php print render($content['field_tab2_text']); ?>
    </div>
    <?php endif; ?>
</div>