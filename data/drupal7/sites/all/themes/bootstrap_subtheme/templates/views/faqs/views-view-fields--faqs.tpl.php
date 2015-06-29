<div class="panel-heading">
    <h4 class="panel-title">
    <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php print $fields['counter']->content; ?>">
        <?php print $fields['title']->content; ?>
    </a>
    </h4>
</div>
<div id="collapse<?php print $fields['counter']->content; ?>" class="panel-collapse collapse">
    <div class="panel-body">
    <?php print $fields['body']->content; ?>
    </div>
</div>