<?php /* Smarty version Smarty-3.0.7, created on 2012-02-17 13:53:51
         compiled from "/home/content/g/b/f/gbfadmin/html/gbfshop/themes/prestashop/./category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:664656794f3eb04f4ea357-90790370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e87791daebbed2ebf7976c417b598e49938a2de' => 
    array (
      0 => '/home/content/g/b/f/gbfadmin/html/gbfshop/themes/prestashop/./category-count.tpl',
      1 => 1329497026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '664656794f3eb04f4ea357-90790370',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php if ($_smarty_tpl->getVariable('category')->value->id==1||$_smarty_tpl->getVariable('nb_products')->value==0){?><?php echo smartyTranslate(array('s'=>'There are no products.'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->getVariable('nb_products')->value==1){?><?php echo smartyTranslate(array('s'=>'There is'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'There are'),$_smarty_tpl);?>
<?php }?>
	<?php echo $_smarty_tpl->getVariable('nb_products')->value;?>

	<?php if ($_smarty_tpl->getVariable('nb_products')->value==1){?><?php echo smartyTranslate(array('s'=>'product.'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'products.'),$_smarty_tpl);?>
<?php }?>
<?php }?>