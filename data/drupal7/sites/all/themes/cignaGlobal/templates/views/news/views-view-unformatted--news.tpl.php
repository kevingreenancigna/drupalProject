<h3><?php print $title; ?></h3>
<ul>
	<?php foreach ($rows as $key => $row): ?>
        <li>
        	<?php print $row ?>
        </li>
    <?php endforeach ?>
</ul>