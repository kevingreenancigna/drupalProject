<div class="col-sm-12">
    <div class="well light-blue clearfix">
    	
        <!-- First Icon -->
        <?php if ($node -> field_icon[LANGUAGE_NONE][0]['value'] === "desktop"): ?>
            <div class="col-sm-15 text-center">
        	<a href="<?php print $node -> field_link[LANGUAGE_NONE][0]['value']; ?>">
                <span class="fa-stack fa-3x">  
                    <i class="fa fa-<?php print $node -> field_icon[LANGUAGE_NONE][0]['value']; ?> fa-stack-2x"></i>
                    <i class="fa fa-arrow-up fa-stack-1x home-secondary home-arrow"></i>
                </span>    
                <p class="mt10px"><?php print $node -> field_link_text[LANGUAGE_NONE][0]['value']; ?></p>
            </a>
            </div>
        <?php endif; ?>
        
        <?php if ($node -> field_icon[LANGUAGE_NONE][0]['value'] === "users"): ?>
            <div class="col-sm-15 text-center">
        	<a href="<?php print $node -> field_link[LANGUAGE_NONE][0]['value']; ?>">
                <span class="fa-stack fa-3x">  
                    <i class="fa fa-<?php print $node -> field_icon[LANGUAGE_NONE][0]['value']; ?> fa-stack-2x"></i>
                    <i class="fa fa-plus-circle fa-stack-1x home-secondary home-plus-circle"></i>
                </span>    
                <p class="mt10px"><?php print $node -> field_link_text[LANGUAGE_NONE][0]['value']; ?></p>
            </a>
            </div>   
        <?php endif; ?>
    	
        <?php if ($node -> field_icon[LANGUAGE_NONE][0]['value'] === "globe"): ?>
            <div class="col-sm-15 text-center">
            <a href="<?php print $node -> field_link[LANGUAGE_NONE][0]['value']; ?>">
                <span class="fa-stack fa-3x">  
                    <i class="fa fa-<?php print $node -> field_icon[LANGUAGE_NONE][0]['value']; ?> fa-stack-2x"></i>
                    <i class="fa fa-circle fa-stack-1x home-secondary home-circle1"></i>
                    <i class="fa fa-circle fa-stack-1x home-secondary home-circle2"></i>
                    <i class="fa fa-circle fa-stack-1x home-secondary home-circle3"></i>
                    <i class="fa fa-circle fa-stack-1x home-secondary home-circle4"></i>
                </span>    
                <p class="mt10px"><?php print $node -> field_link_text[LANGUAGE_NONE][0]['value']; ?></p>
            </a>
            </div>    
        <?php endif; ?>
        
       	<?php if ($node -> field_icon[LANGUAGE_NONE][0]['value'] === "file-o"): ?>
            <div class="col-sm-15 text-center">
            <a href="<?php print $node -> field_link[LANGUAGE_NONE][0]['value']; ?>">
                <span class="fa-stack fa-3x">  
                    <i class="fa fa-<?php print $node -> field_icon[LANGUAGE_NONE][0]['value']; ?> fa-stack-2x"></i>
                    <i class="fa fa-heart fa-stack-1x home-secondary mt10px"></i>
                </span>    
                <p class="mt10px"><?php print $node -> field_link_text[LANGUAGE_NONE][0]['value']; ?></p>
            </a>
            </div>
        <?php endif; ?>
          
        <?php if ($node -> field_icon[LANGUAGE_NONE][0]['value'] === "comment-o"): ?>
            <div class="col-sm-15 text-center">  
            <a href="<?php print $node -> field_link[LANGUAGE_NONE][0]['value']; ?>">
                <span class="fa-stack fa-3x">  
                    <i class="fa fa-<?php print $node -> field_icon[LANGUAGE_NONE][0]['value']; ?> fa-stack-2x"></i>
                    <i class="fa fa-phone fa-stack-1x home-secondary"></i>
                </span>    
                <p class="mt10px"><?php print $node -> field_link_text[LANGUAGE_NONE][0]['value']; ?></p>
            </a>
            </div>     
        <?php endif; ?>
        <!-- End First Icon -->
        
        <!-- Second Icon -->
        <?php if ($node -> field_icon2[LANGUAGE_NONE][0]['value'] === "desktop"): ?>
            <div class="col-sm-15 text-center">
                <span class="fa-stack fa-3x">  
                    <i class="fa fa-<?php print $node -> field_icon2[LANGUAGE_NONE][0]['value']; ?> fa-stack-2x"></i>
                    <i class="fa fa-arrow-up fa-stack-1x home-secondary home-arrow"></i>
                </span>    
                <p class="mt10px"><a href="<?php print $node -> field_link2[LANGUAGE_NONE][0]['value']; ?>"><?php print $node -> field_link_text2[LANGUAGE_NONE][0]['value']; ?></a></p>
            </div>
        <?php endif; ?>
           
       	<?php if ($node -> field_icon2[LANGUAGE_NONE][0]['value'] === "users"): ?>
            <div class="col-sm-15 text-center"> 
            <a href="<?php print $node -> field_link2[LANGUAGE_NONE][0]['value']; ?>">
                <span class="fa-stack fa-3x">  
                    <i class="fa fa-<?php print $node -> field_icon2[LANGUAGE_NONE][0]['value']; ?> fa-stack-2x"></i>
                    <i class="fa fa-plus-circle fa-stack-1x home-secondary home-plus-circle"></i>
                </span>    
                <p class="mt10px"><?php print $node -> field_link_text2[LANGUAGE_NONE][0]['value']; ?></p>
            </a>
            </div>
        <?php endif; ?>
          
        <?php if ($node -> field_icon2[LANGUAGE_NONE][0]['value'] === "globe"): ?>
            <div class="col-sm-15 text-center">  
            <a href="<?php print $node -> field_link2[LANGUAGE_NONE][0]['value']; ?>">
                <span class="fa-stack fa-3x">  
                    <i class="fa fa-<?php print $node -> field_icon2[LANGUAGE_NONE][0]['value']; ?> fa-stack-2x"></i>
                    <i class="fa fa-circle fa-stack-1x home-secondary home-circle1"></i>
                    <i class="fa fa-circle fa-stack-1x home-secondary home-circle2"></i>
                    <i class="fa fa-circle fa-stack-1x home-secondary home-circle3"></i>
                    <i class="fa fa-circle fa-stack-1x home-secondary home-circle4"></i>
                </span>    
                <p class="mt10px"><?php print $node -> field_link_text2[LANGUAGE_NONE][0]['value']; ?></p>
             </a>
             </div>
         <?php endif; ?>
          
        <?php if ($node -> field_icon2[LANGUAGE_NONE][0]['value'] === "file-o"): ?>
            <div class="col-sm-15 text-center">  
            <a href="<?php print $node -> field_link2[LANGUAGE_NONE][0]['value']; ?>">
                <span class="fa-stack fa-3x">  
                    <i class="fa fa-<?php print $node -> field_icon2[LANGUAGE_NONE][0]['value']; ?> fa-stack-2x"></i>
                    <i class="fa fa-heart fa-stack-1x home-secondary mt10px"></i>
                </span>    
                <p class="mt10px"><?php print $node -> field_link_text2[LANGUAGE_NONE][0]['value']; ?></p>
            </a>
            </div>
        <?php endif; ?>
        
        <?php if ($node -> field_icon2[LANGUAGE_NONE][0]['value'] === "comment-o"): ?>
            <div class="col-sm-15 text-center">    
            <a href="<?php print $node -> field_link2[LANGUAGE_NONE][0]['value']; ?>">
                <span class="fa-stack fa-3x">  
                    <i class="fa fa-<?php print $node -> field_icon2[LANGUAGE_NONE][0]['value']; ?> fa-stack-2x"></i>
                    <i class="fa fa-phone fa-stack-1x home-secondary"></i>
                </span>    
                <p class="mt10px"><?php print $node -> field_link_text2[LANGUAGE_NONE][0]['value']; ?></p>
            </a>
            </div>
        <?php endif; ?>
        <!-- End Second Icon -->
        
        <!-- Third Icon -->
        <?php if ($node -> field_icon3[LANGUAGE_NONE][0]['value'] === "desktop"): ?>
            <div class="col-sm-15 text-center">
            <a href="<?php print $node -> field_link3[LANGUAGE_NONE][0]['value']; ?>">
                <span class="fa-stack fa-3x">  
                    <i class="fa fa-<?php print $node -> field_icon3[LANGUAGE_NONE][0]['value']; ?> fa-stack-2x"></i>
                    <i class="fa fa-arrow-up fa-stack-1x home-secondary home-arrow"></i>
                </span>    
                <p class="mt10px"><?php print $node -> field_link_text3[LANGUAGE_NONE][0]['value']; ?></p>
            </a>
            </div>
        <?php endif; ?>
           
       	<?php if ($node -> field_icon3[LANGUAGE_NONE][0]['value'] === "users"): ?>
            <div class="col-sm-15 text-center"> 
                <span class="fa-stack fa-3x">  
                    <i class="fa fa-<?php print $node -> field_icon3[LANGUAGE_NONE][0]['value']; ?> fa-stack-2x"></i>
                    <i class="fa fa-plus-circle fa-stack-1x home-secondary home-plus-circle"></i>
                </span>    
                <p class="mt10px"><a href="<?php print $node -> field_link3[LANGUAGE_NONE][0]['value']; ?>"><?php print $node -> field_link_text3[LANGUAGE_NONE][0]['value']; ?></a></p>
            </div>
        <?php endif; ?>
          
        <?php if ($node -> field_icon3[LANGUAGE_NONE][0]['value'] === "globe"): ?>
            <div class="col-sm-15 text-center">  
            <a href="<?php print $node -> field_link3[LANGUAGE_NONE][0]['value']; ?>">
                <span class="fa-stack fa-3x">  
                    <i class="fa fa-<?php print $node -> field_icon3[LANGUAGE_NONE][0]['value']; ?> fa-stack-2x"></i>
                    <i class="fa fa-circle fa-stack-1x home-secondary home-circle1"></i>
                    <i class="fa fa-circle fa-stack-1x home-secondary home-circle2"></i>
                    <i class="fa fa-circle fa-stack-1x home-secondary home-circle3"></i>
                    <i class="fa fa-circle fa-stack-1x home-secondary home-circle4"></i>
                </span>    
                <p class="mt10px"><?php print $node -> field_link_text3[LANGUAGE_NONE][0]['value']; ?></p>
             </a>
             </div>
         <?php endif; ?>
          
        <?php if ($node -> field_icon3[LANGUAGE_NONE][0]['value'] === "file-o"): ?>
            <div class="col-sm-15 text-center">  
            <a href="<?php print $node -> field_link3[LANGUAGE_NONE][0]['value']; ?>">
                <span class="fa-stack fa-3x">  
                    <i class="fa fa-<?php print $node -> field_icon3[LANGUAGE_NONE][0]['value']; ?> fa-stack-2x"></i>
                    <i class="fa fa-heart fa-stack-1x home-secondary mt10px"></i>
                </span>    
                <p class="mt10px"><?php print $node -> field_link_text3[LANGUAGE_NONE][0]['value']; ?></p>
            </a>
            </div>
        <?php endif; ?>
        
        <?php if ($node -> field_icon3[LANGUAGE_NONE][0]['value'] === "comment-o"): ?>
            <div class="col-sm-15 text-center">   
            <a href="<?php print $node -> field_link3[LANGUAGE_NONE][0]['value']; ?>"> 
                <span class="fa-stack fa-3x">  
                    <i class="fa fa-<?php print $node -> field_icon3[LANGUAGE_NONE][0]['value']; ?> fa-stack-2x"></i>
                    <i class="fa fa-phone fa-stack-1x home-secondary"></i>
                </span>    
                <p class="mt10px"><?php print $node -> field_link_text3[LANGUAGE_NONE][0]['value']; ?></p>
            </a>
            </div>
        <?php endif; ?>
        <!-- End Third Icon -->
        
        <!-- Fourth Icon -->
        <?php if ($node -> field_icon4[LANGUAGE_NONE][0]['value'] === "desktop"): ?>
            <div class="col-sm-15 text-center">
            <a href="<?php print $node -> field_link4[LANGUAGE_NONE][0]['value']; ?>">
                <span class="fa-stack fa-3x">  
                    <i class="fa fa-<?php print $node -> field_icon4[LANGUAGE_NONE][0]['value']; ?> fa-stack-2x"></i>
                    <i class="fa fa-arrow-up fa-stack-1x home-secondary home-arrow"></i>
                </span>    
                <p class="mt10px"><?php print $node -> field_link_text4[LANGUAGE_NONE][0]['value']; ?></p>
            </a>
            </div>
        <?php endif; ?>
           
       	<?php if ($node -> field_icon4[LANGUAGE_NONE][0]['value'] === "users"): ?>
            <div class="col-sm-15 text-center"> 
            <a href="<?php print $node -> field_link4[LANGUAGE_NONE][0]['value']; ?>">
                <span class="fa-stack fa-3x">  
                    <i class="fa fa-<?php print $node -> field_icon4[LANGUAGE_NONE][0]['value']; ?> fa-stack-2x"></i>
                    <i class="fa fa-plus-circle fa-stack-1x home-secondary home-plus-circle"></i>
                </span>    
                <p class="mt10px"><?php print $node -> field_link_text4[LANGUAGE_NONE][0]['value']; ?></p>
            </a>
            </div>
        <?php endif; ?>
          
        <?php if ($node -> field_icon4[LANGUAGE_NONE][0]['value'] === "globe"): ?>
            <div class="col-sm-15 text-center">  
            <a href="<?php print $node -> field_link4[LANGUAGE_NONE][0]['value']; ?>">
                <span class="fa-stack fa-3x">  
                    <i class="fa fa-<?php print $node -> field_icon4[LANGUAGE_NONE][0]['value']; ?> fa-stack-2x"></i>
                    <i class="fa fa-circle fa-stack-1x home-secondary home-circle1"></i>
                    <i class="fa fa-circle fa-stack-1x home-secondary home-circle2"></i>
                    <i class="fa fa-circle fa-stack-1x home-secondary home-circle3"></i>
                    <i class="fa fa-circle fa-stack-1x home-secondary home-circle4"></i>
                </span>    
                <p class="mt10px"><?php print $node -> field_link_text4[LANGUAGE_NONE][0]['value']; ?></p>
             </a>
             </div>
         <?php endif; ?>
          
        <?php if ($node -> field_icon4[LANGUAGE_NONE][0]['value'] === "file-o"): ?>
            <div class="col-sm-15 text-center">  
            <a href="<?php print $node -> field_link4[LANGUAGE_NONE][0]['value']; ?>">
                <span class="fa-stack fa-3x">  
                    <i class="fa fa-<?php print $node -> field_icon4[LANGUAGE_NONE][0]['value']; ?> fa-stack-2x"></i>
                    <i class="fa fa-heart fa-stack-1x home-secondary mt10px"></i>
                </span>    
                <p class="mt10px"><?php print $node -> field_link_text4[LANGUAGE_NONE][0]['value']; ?></p>
            </a>
            </div>
        <?php endif; ?>
        
        <?php if ($node -> field_icon4[LANGUAGE_NONE][0]['value'] === "comment-o"): ?>
            <div class="col-sm-15 text-center"> 
            <a href="<?php print $node -> field_link4[LANGUAGE_NONE][0]['value']; ?>">   
                <span class="fa-stack fa-3x">  
                    <i class="fa fa-<?php print $node -> field_icon4[LANGUAGE_NONE][0]['value']; ?> fa-stack-2x"></i>
                    <i class="fa fa-phone fa-stack-1x home-secondary"></i>
                </span>    
                <p class="mt10px"><?php print $node -> field_link_text4[LANGUAGE_NONE][0]['value']; ?></p>
            </a>
            </div>
        <?php endif; ?>
        <!-- End Fourth Icon -->
        
        <!-- Fifth Icon -->
        <?php if ($node -> field_icon5[LANGUAGE_NONE][0]['value'] === "desktop"): ?>
            <div class="col-sm-15 text-center">
            <a href="<?php print $node -> field_link5[LANGUAGE_NONE][0]['value']; ?>">
                <span class="fa-stack fa-3x">  
                    <i class="fa fa-<?php print $node -> field_icon5[LANGUAGE_NONE][0]['value']; ?> fa-stack-2x"></i>
                    <i class="fa fa-arrow-up fa-stack-1x home-secondary home-arrow"></i>
                </span>    
                <p class="mt10px"><?php print $node -> field_link_text5[LANGUAGE_NONE][0]['value']; ?></p>
            </a>
            </div>
        <?php endif; ?>
           
       	<?php if ($node -> field_icon5[LANGUAGE_NONE][0]['value'] === "users"): ?>
            <div class="col-sm-15 text-center"> 
            <a href="<?php print $node -> field_link5[LANGUAGE_NONE][0]['value']; ?>">
                <span class="fa-stack fa-3x">  
                    <i class="fa fa-<?php print $node -> field_icon5[LANGUAGE_NONE][0]['value']; ?> fa-stack-2x"></i>
                    <i class="fa fa-plus-circle fa-stack-1x home-secondary home-plus-circle"></i>
                </span>    
                <p class="mt10px"><?php print $node -> field_link_text5[LANGUAGE_NONE][0]['value']; ?></p>
            </a>
            </div>
        <?php endif; ?>
          
        <?php if ($node -> field_icon5[LANGUAGE_NONE][0]['value'] === "globe"): ?>
            <div class="col-sm-15 text-center">  
            <a href="<?php print $node -> field_link5[LANGUAGE_NONE][0]['value']; ?>">
                <span class="fa-stack fa-3x">  
                    <i class="fa fa-<?php print $node -> field_icon5[LANGUAGE_NONE][0]['value']; ?> fa-stack-2x"></i>
                    <i class="fa fa-circle fa-stack-1x home-secondary home-circle1"></i>
                    <i class="fa fa-circle fa-stack-1x home-secondary home-circle2"></i>
                    <i class="fa fa-circle fa-stack-1x home-secondary home-circle3"></i>
                    <i class="fa fa-circle fa-stack-1x home-secondary home-circle4"></i>
                </span>    
                <p class="mt10px"><?php print $node -> field_link_text5[LANGUAGE_NONE][0]['value']; ?></p>
             </a>
             </div>
         <?php endif; ?>
          
        <?php if ($node -> field_icon5[LANGUAGE_NONE][0]['value'] === "file-o"): ?>
            <div class="col-sm-15 text-center">  
            <a href="<?php print $node -> field_link5[LANGUAGE_NONE][0]['value']; ?>">
                <span class="fa-stack fa-3x">  
                    <i class="fa fa-<?php print $node -> field_icon5[LANGUAGE_NONE][0]['value']; ?> fa-stack-2x"></i>
                    <i class="fa fa-heart fa-stack-1x home-secondary mt10px"></i>
                </span>    
                <p class="mt10px"><?php print $node -> field_link_text5[LANGUAGE_NONE][0]['value']; ?></p>
            </a>
            </div>
        <?php endif; ?>
        
        <?php if ($node -> field_icon5[LANGUAGE_NONE][0]['value'] === "comment-o"): ?>
            <div class="col-sm-15 text-center">    
            <a href="<?php print $node -> field_link5[LANGUAGE_NONE][0]['value']; ?>">
                <span class="fa-stack fa-3x">  
                    <i class="fa fa-<?php print $node -> field_icon5[LANGUAGE_NONE][0]['value']; ?> fa-stack-2x"></i>
                    <i class="fa fa-phone fa-stack-1x home-secondary"></i>
                </span>    
                <p class="mt10px"><?php print $node -> field_link_text5[LANGUAGE_NONE][0]['value']; ?></p>
            </a>
            </div>
        <?php endif; ?>
        <!-- End Fifth Icon -->
        
    </div>
</div>
