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
<body class="body_pages">
	<div id="header_pages">
	<img src="<?php print $directory; ?>/images/head-banner-pages.jpg" width="1010" height="67" alt="Green Beret Foundation" />
	</div>
    <div id="menu_holder">
    	<?php print $menu ?>
    </div>
    <div id="content">
    	<p><h2 class="contact_address">CONTACT US</h2><hr />
        If you require more information or have any questions, please feel free to contact us.</p>
      <p class="contact_address">
        	Mail:<br />
            Green Beret Foundation<br />
            PO Box 8250<br />
            Huntington Beach, CA 92615
        </p>
    	<div class="contact_form">
    	<?php print $content ?>
        </div>
    </div>
    																		
    <div id="sidebar">
    	<div class="container">
        	
        <a href="/content/donate-now"><img src="<?php print $directory; ?>/images/donate-pages-button.jpg" width="237" height="134" alt="They served us, now we serve them. Donate today." border="0" /></a>
    	</div>
        <?php print $sidebar ?>
      <!-- <div class="container">
        <h3>Sample Title</h3>
       	  <p>the quick brown fox jumped over the lazy dog </p>
       	  <p>
       	  <span class="event_news_date">Jan. 2010</span>
       	    Example of a news event
   	        </p>
    	</div> -->
    </div>
    <div id="footer">
    	<img src="<?php print $directory; ?>/images/caring-for-America-footer-pages.jpg" width="560" height="89" alt="Caring for America's quiet professionals" />
    </div>	
    <?php print $closure ?>
</body>
</html>
