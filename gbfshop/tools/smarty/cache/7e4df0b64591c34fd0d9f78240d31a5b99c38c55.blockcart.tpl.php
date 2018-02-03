<?php /*%%SmartyHeaderCode:2110302009501b6be1da8ff9-44025480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e4df0b64591c34fd0d9f78240d31a5b99c38c55' => 
    array (
      0 => '/home/content/g/b/f/gbfadmin/html/gbfshop/modules/blockcart/blockcart.tpl',
      1 => 1329496811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2110302009501b6be1da8ff9-44025480',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!$no_render) {?><script type="text/javascript">
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

<?php } ?>