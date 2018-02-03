<?php jquery_plugin_add('cycle'); ?>
<script type="text/javascript" language="javascript">  
	$(document).ready(function(){$('.slideshow').cycle({fx: 'fade',speed: 1000,timeout: 7000});});  
</script>  
<?php echo $fields['title']->content ?>
<div id="slideshow_ie_fix">
    <div id="slideshow_container">
        <ul class="slideshow">
            <?php print $rows; ?>
        </ul>
        <div class="slideshow_tagline">
    		<img src="/<?php print $directory; ?>/images/caring-for-america.png" width="497" height="113" alt="caring for america" />
    	</div>
    </div>
    
</div>
