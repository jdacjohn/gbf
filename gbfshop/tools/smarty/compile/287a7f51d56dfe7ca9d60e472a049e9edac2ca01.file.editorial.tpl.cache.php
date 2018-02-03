<?php /* Smarty version Smarty-3.0.7, created on 2012-08-03 01:12:49
         compiled from "/home/content/g/b/f/gbfadmin/html/gbfshop/modules/editorial/editorial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1026091553501b6be1c349a6-51579015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '287a7f51d56dfe7ca9d60e472a049e9edac2ca01' => 
    array (
      0 => '/home/content/g/b/f/gbfadmin/html/gbfshop/modules/editorial/editorial.tpl',
      1 => 1329496885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1026091553501b6be1c349a6-51579015',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/content/g/b/f/gbfadmin/html/gbfshop/tools/smarty/plugins/modifier.escape.php';
?>

<!-- Module Editorial -->
<div id="editorial_block_center" class="editorial_block">
	<?php if ($_smarty_tpl->getVariable('editorial')->value->body_home_logo_link){?><a href="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('editorial')->value->body_home_logo_link,'htmlall','UTF-8');?>
" title="<?php echo stripslashes(smarty_modifier_escape($_smarty_tpl->getVariable('editorial')->value->body_title,'htmlall','UTF-8'));?>
"><?php }?>
	<?php if ($_smarty_tpl->getVariable('homepage_logo')->value){?><img src="<?php echo $_smarty_tpl->getVariable('link')->value->getMediaLink($_smarty_tpl->getVariable('image_path')->value);?>
" alt="<?php echo stripslashes(smarty_modifier_escape($_smarty_tpl->getVariable('editorial')->value->body_title,'htmlall','UTF-8'));?>
" <?php if ($_smarty_tpl->getVariable('image_width')->value){?>width="<?php echo $_smarty_tpl->getVariable('image_width')->value;?>
"<?php }?> <?php if ($_smarty_tpl->getVariable('image_height')->value){?>height="<?php echo $_smarty_tpl->getVariable('image_height')->value;?>
" <?php }?>/><?php }?>
	<?php if ($_smarty_tpl->getVariable('editorial')->value->body_home_logo_link){?></a><?php }?>
	<?php if ($_smarty_tpl->getVariable('editorial')->value->body_logo_subheading){?><p id="editorial_image_legend"><?php echo stripslashes($_smarty_tpl->getVariable('editorial')->value->body_logo_subheading);?>
</p><?php }?>
	<?php if ($_smarty_tpl->getVariable('editorial')->value->body_title){?><h1><?php echo stripslashes($_smarty_tpl->getVariable('editorial')->value->body_title);?>
</h1><?php }?>
	<?php if ($_smarty_tpl->getVariable('editorial')->value->body_subheading){?><h2><?php echo stripslashes($_smarty_tpl->getVariable('editorial')->value->body_subheading);?>
</h2><?php }?>
	<?php if ($_smarty_tpl->getVariable('editorial')->value->body_paragraph){?><div class="rte"><?php echo stripslashes($_smarty_tpl->getVariable('editorial')->value->body_paragraph);?>
</div><?php }?>
</div>
<!-- /Module Editorial -->
