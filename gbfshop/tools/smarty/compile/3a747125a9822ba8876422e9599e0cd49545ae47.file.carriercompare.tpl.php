<?php /* Smarty version Smarty-3.0.7, created on 2012-03-01 12:38:44
         compiled from "/home/content/g/b/f/gbfadmin/html/gbfshop/modules/carriercompare/template/carriercompare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17508438794f4fc234e36bb8-96666428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a747125a9822ba8876422e9599e0cd49545ae47' => 
    array (
      0 => '/home/content/g/b/f/gbfadmin/html/gbfshop/modules/carriercompare/template/carriercompare.tpl',
      1 => 1329497097,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17508438794f4fc234e36bb8-96666428',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/content/g/b/f/gbfadmin/html/gbfshop/tools/smarty/plugins/modifier.escape.php';
?>

<?php if (!$_smarty_tpl->getVariable('opc')->value){?>
<script type="text/javascript">
	// <![CDATA[
	var taxEnabled = "<?php echo $_smarty_tpl->getVariable('use_taxes')->value;?>
";
	var displayPrice = "<?php echo $_smarty_tpl->getVariable('priceDisplay')->value;?>
";
	var currencySign = '<?php echo html_entity_decode($_smarty_tpl->getVariable('currencySign')->value,2,"UTF-8");?>
';
	var currencyRate = '<?php echo floatval($_smarty_tpl->getVariable('currencyRate')->value);?>
';
	var currencyFormat = '<?php echo intval($_smarty_tpl->getVariable('currencyFormat')->value);?>
';
	var currencyBlank = '<?php echo intval($_smarty_tpl->getVariable('currencyBlank')->value);?>
';
	var id_carrier = '<?php echo intval($_smarty_tpl->getVariable('id_carrier')->value);?>
';
	var id_state = '<?php echo intval($_smarty_tpl->getVariable('id_state')->value);?>
';
	var SE_RedirectTS = "<?php echo smartyTranslate(array('s'=>'Refreshing page and updating cart…','mod'=>'carriercompare'),$_smarty_tpl);?>
";
	var SE_RefreshStateTS = "<?php echo smartyTranslate(array('s'=>'Checking available states…','mod'=>'carriercompare'),$_smarty_tpl);?>
";
	var SE_RetrievingInfoTS = "<?php echo smartyTranslate(array('s'=>'Retrieving information…','mod'=>'carriercompare'),$_smarty_tpl);?>
";
	var SE_RefreshMethod = <?php echo $_smarty_tpl->getVariable('refresh_method')->value;?>
;

	var txtFree = "<?php echo smartyTranslate(array('s'=>'Free!','mod'=>'carriercompare'),$_smarty_tpl);?>
";
	
	PS_SE_HandleEvent();
	//]]>
</script>

<form class="std" id="compare_shipping_form" method="POST" action="#" >
	<fieldset id="compare_shipping">
		<h3><?php echo smartyTranslate(array('s'=>'Estimate your shipping & taxes','mod'=>'carriercompare'),$_smarty_tpl);?>
</h3>
		
		<p id="carriercompare_errors" style="display: none;">
			<ul id="carriercompare_errors_list">
				
			</ul>
		</p>
		
		<p>
			<label for="id_country"><?php echo smartyTranslate(array('s'=>'Country','mod'=>'carriercompare'),$_smarty_tpl);?>
</label>
			<select name="id_country" id="id_country">
				<?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('countries')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value){
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['country']->value['id_country'];?>
" <?php if ($_smarty_tpl->getVariable('id_country')->value==$_smarty_tpl->tpl_vars['country']->value['id_country']){?>selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['country']->value['name'],'htmlall','UTF-8');?>
</option>
				<?php }} ?>
			</select>
		</p>
		
		<p id="states" style="display: none;">
			<label for="id_state"><?php echo smartyTranslate(array('s'=>'State','mod'=>'carriercompare'),$_smarty_tpl);?>
</label>
			<select name="id_state" id="id_state">
				
			</select>
		</p>
		
		<p>
			<label for="zipcode"><?php echo smartyTranslate(array('s'=>'Zipcode','mod'=>'carriercompare'),$_smarty_tpl);?>
</label>
			<input type="text" name="zipcode" id="zipcode" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('zipcode')->value,'htmlall','UTF-8');?>
"/> (<?php echo smartyTranslate(array('s'=>'Needed for certain carriers','mod'=>'carriercompare'),$_smarty_tpl);?>
)
		</p>
		
		<div id="SE_AjaxDisplay">
			<img src="<?php echo $_smarty_tpl->getVariable('new_base_dir')->value;?>
loader.gif" /><br />
			<p></p>
		</div>
		
		<div id="availableCarriers" style="display: none;">
			<table cellspacing="0" cellpadding="0" id="availableCarriers_table" class="std">
				<thead>
					<tr>
						<th class="carrier_action first_item"></th>
						<th class="carrier_name item"><?php echo smartyTranslate(array('s'=>'Carrier','mod'=>'carriercompare'),$_smarty_tpl);?>
</th>
						<th class="carrier_infos item"><?php echo smartyTranslate(array('s'=>'Information','mod'=>'carriercompare'),$_smarty_tpl);?>
</th>
						<th class="carrier_price last_item"><?php echo smartyTranslate(array('s'=>'Price','mod'=>'carriercompare'),$_smarty_tpl);?>
</th>
					</tr>
				</thead>
				<tbody id="carriers_list">
					
				</tbody>
			</table>
		</div>
		<p class="warning center" id="noCarrier" style="display: none;"><?php echo smartyTranslate(array('s'=>'No carrier is available for this selection','mod'=>'carriercompare'),$_smarty_tpl);?>
</p>
		
		<p class="SE_SubmitRefreshCard">
			<input class="exclusive_large" id="carriercompare_submit" type="submit" name="carriercompare_submit" value="<?php echo smartyTranslate(array('s'=>'Update Cart','mod'=>'carriercompare'),$_smarty_tpl);?>
"/>
			<input id="update_carriers_list" type="button" class="exclusive_large" value="<?php echo smartyTranslate(array('s'=>'Update carrier list'),$_smarty_tpl);?>
" />
		</p>
	</fieldset>
</form>
<?php }?>
