<?php /*%%SmartyHeaderCode:19474063014f3eaecc0acdc9-04314913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ca19bfa4b6fcd436ebd99d01cacf2297259cb82' => 
    array (
      0 => '/home/content/g/b/f/gbfadmin/html/gbfshop/modules/blockcategories/blockcategories.tpl',
      1 => 1329496812,
      2 => 'file',
    ),
    '133ce328aa150899d082f1a7bb52891bbb7307c0' => 
    array (
      0 => '/home/content/g/b/f/gbfadmin/html/gbfshop/modules/blockcategories/category-tree-branch.tpl',
      1 => 1329496813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19474063014f3eaecc0acdc9-04314913',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!$no_render) {?>

<!-- Block categories module -->
<div id="categories_block_left" class="block">
	<h4>Categories</h4>
	<div class="block_content">
		<ul class="tree dhtml">
									
<li >
	<a href="http://greenberetfoundation.org/gbfshop/category.php?id_category=5"  title="">Apparel</a>
	</li>
												
<li >
	<a href="http://greenberetfoundation.org/gbfshop/category.php?id_category=6" class="selected" title="">Accessories</a>
	</li>
												
<li >
	<a href="http://greenberetfoundation.org/gbfshop/category.php?id_category=7"  title="">Books</a>
	</li>
												
<li class="last">
	<a href="http://greenberetfoundation.org/gbfshop/category.php?id_category=14"  title="If you would like to volunteer for the Green Beret Foundation, please look through our current opportunities.  If you find one that suits you, please send us a message to let us know.  You can do so by clicking on our contact link above, or by including the position that interests you in the message section of your shopping cart, upon checkout.">Volunteer Opportunities</a>
	</li>
							</ul>
		<script type="text/javascript">
		// <![CDATA[
			// we hide the tree only if JavaScript is activated
			$('div#categories_block_left ul.dhtml').hide();
		// ]]>
		</script>
	</div>
</div>
<!-- /Block categories module -->
<?php } ?>