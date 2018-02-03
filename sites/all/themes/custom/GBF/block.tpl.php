<div class="sidebar_block">
	<?php if ($block->subject): ?>
    	<h3><?php echo $block->subject; ?></h3>
    <?php endif; ?>
	<?php echo $block->content; ?>
	<?php echo $edit_links; ?>
</div>