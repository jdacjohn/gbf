<?php

// $Id: page.tpl.php,v 1.18.2.1 2009/04/30 00:13:31 goba Exp $

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php print $head_title ?></title>

	<?php print $styles ?>

	<?php print $scripts ?>

    <!--[if lt IE 7]>

        <?php print phptemplate_get_ie_styles(); ?>

    <![endif]-->

      <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>

</head>

<body>

	<div id="header">

	<img src="<?php print $directory; ?>/images/head-banner-home.png" width="1033" height="135" alt="Green Beret Foundation"  />

	</div>

    <div id="menu_home"><div id="menu_holder"><?php print $menu ?></div></div>

    <div id="content">

		<?php print $slideshow ?>
    	<?php print $content ?>

    </div>

    <div id="sidebar">

    	<div class="container">

        <a href="/content/donate-now"><img src="<?php print $directory; ?>/images/donate-button.jpg" width="237" height="77" alt="They served us, now we serve them. Donate today." border="0" /></a>
    	</div>

		<?php print $sidebar ?>

    </div>

     <?php print $closure ?>

</body>

</html>

