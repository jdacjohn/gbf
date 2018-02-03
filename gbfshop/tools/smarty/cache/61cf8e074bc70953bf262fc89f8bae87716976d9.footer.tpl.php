<?php /*%%SmartyHeaderCode:104345267501b6be25fe1f1-20717076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61cf8e074bc70953bf262fc89f8bae87716976d9' => 
    array (
      0 => '/home/content/g/b/f/gbfadmin/html/gbfshop/themes/prestashop/footer.tpl',
      1 => 1329497027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104345267501b6be25fe1f1-20717076',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!$no_render) {?>

						</div>

<!-- Right -->
				<div id="right_column" class="column">
					<script type="text/javascript">
var CUSTOMIZE_TEXTFIELD = 1;
var customizationIdMessage = 'Customization #';
var removingLinkText = 'remove this product from my cart';
</script>

<!-- MODULE Block cart -->
<div id="cart_block" class="block exclusive">
	<h4>
		<a href="http://greenberetfoundation.org/gbfshop/order.php">Cart</a>
				<span id="block_cart_expand" class="hidden">&nbsp;</span>
		<span id="block_cart_collapse" >&nbsp;</span>
			</h4>
	<div class="block_content">
	<!-- block summary -->
	<div id="cart_block_summary" class="collapsed">
		<span class="ajax_cart_quantity" style="display:none;">0</span>
		<span class="ajax_cart_product_txt_s" style="display:none">products</span>
		<span class="ajax_cart_product_txt" >product</span>
		<span class="ajax_cart_total" style="display:none">$0.00</span>
		<span class="ajax_cart_no_product" >(empty)</span>
	</div>
	<!-- block list of products -->
	<div id="cart_block_list" class="expanded">
			<p  id="cart_block_no_products">No products</p>

		
		<p id="cart-prices">
			<span>Shipping</span>
			<span id="cart_block_shipping_cost" class="price ajax_cart_shipping_cost">$0.00</span>
			<br/>
									<span>Total</span>
			<span id="cart_block_total" class="price ajax_block_cart_total">$0.00</span>
		</p>
				<p id="cart-buttons">
			<a href="http://greenberetfoundation.org/gbfshop/order.php" class="button_small" title="Cart">Cart</a>			<a href="http://greenberetfoundation.org/gbfshop/order.php?step=1" id="button_order_cart" class="exclusive" title="Check out">Check out</a>
		</p>
	</div>
	</div>
</div>
<!-- /MODULE Block cart -->


				</div>
			</div>

<!-- Footer -->
			<div id="footer">	<!-- Block CMS module -->
			<div id="informations_block_left_1" class="block informations_block_left">
			<h4><a href="http://greenberetfoundation.org/gbfshop/cms.php?id_cms_category=1">Volunteer</a></h4>
			<ul class="block_content">
													<li><a href="http://greenberetfoundation.org/gbfshop/cms.php?id_cms=8" title="Volunteer Opportunities">Volunteer Opportunities</a></li>											</ul>
		</div>
		<!-- /Block CMS module -->
</div>
		</div>
		</body>
</html>
<?php } ?>