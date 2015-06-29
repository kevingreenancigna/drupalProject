<span class="fa-stack fa-3x">
	<?php if ($fields['field_icon']->content == "desktop"): ?>  
        <i class="fa fa-<?php print $fields['field_icon']->content; ?> fa-stack-2x"></i>
        <i class="fa fa-arrow-up fa-stack-1x" style="margin-top:-15px; margin-left:3px; color:#f79820"></i>
    <?php endif; ?>
    
    <?php if ($fields['field_icon']->content == "users"): ?>  
        <i class="fa fa-<?php print $fields['field_icon']->content; ?> fa-stack-2x"></i>
        <i class="fa fa-plus-circle fa-stack-1x" style="margin-top:15px; margin-left:45px; color:#f79820; font-size:30px"></i>
    <?php endif; ?>
    
    <?php if ($fields['field_icon']->content == "globe"): ?>  
        <i class="fa fa-<?php print $fields['field_icon']->content; ?> fa-stack-2x"></i>
        <i class="fa fa-circle fa-stack-1x" style="margin-top:-25px; margin-left:-25px; color:#f79820; font-size:20px"></i>
        <i class="fa fa-circle fa-stack-1x" style="margin-top:-30px; margin-left:25px; color:#f79820; font-size:20px"></i>
        <i class="fa fa-circle fa-stack-1x" style="margin-top:5px; margin-left:10px; color:#f79820; font-size:20px"></i>
        <i class="fa fa-circle fa-stack-1x" style="margin-top:30px; margin-left:20px; color:#f79820; font-size:20px"></i>
    <?php endif; ?>
    
    <?php if ($fields['field_icon']->content == "file-o"): ?>  
        <i class="fa fa-<?php print $fields['field_icon']->content; ?> fa-stack-2x"></i>
        <i class="fa fa-heart fa-stack-1x" style="margin-top:10px; color:#f79820;"></i>
    <?php endif; ?>
    
    <?php if ($fields['field_icon']->content == "comment-o"): ?>  
        <i class="fa fa-<?php print $fields['field_icon']->content; ?> fa-stack-2x"></i>
        <i class="fa fa-phone fa-stack-1x" style="color:#f79820;"></i>
    <?php endif; ?>
</span>
<p><a href="<?php print $fields['field_link']->content; ?>"><?php print $fields['field_link_text']->content; ?></a></p>