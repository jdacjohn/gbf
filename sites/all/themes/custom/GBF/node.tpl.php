<h2><?php if (!$page){ echo "<a href='$node_url' title='$title>"; }?><?php print $title ?><?php if (!$page){ echo "</a>"; }?></h2>
<?php print $picture ?>
<?php if ($submitted): ?>
	<span class="submitted"><?php print $submitted; ?></span><br />
<?php endif; ?>
<hr />
<?php print $content ?>