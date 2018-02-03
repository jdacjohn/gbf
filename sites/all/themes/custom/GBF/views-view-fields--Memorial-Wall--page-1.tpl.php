
<?php 
	$name = $fields['field_memorial_rank_value']->raw . ' ' . $fields['field_memorial_first_name_value']->raw;
	if($fields['field_memorial_middle_name_value']->raw) $name = $name . ' ' . $fields['field_memorial_middle_name_value']->raw;
	$name = $name . ' ' . $fields['title']->raw;
?>
<div class="memorial_node">
<table width="100%">
	<tr><td rowspan="4"><?php print $fields['field_memorial_photo_fid']->content; ?></td><td height="12px"><span class="name"><?php print $name; ?></span></td></tr>
	<tr><td height="12px"><?php print $fields['field_memorial_information_value']->content; ?></td></tr>
    <tr><td height="12px"><?php print $fields['name']->content; ?></td></tr>
    <tr><td>&nbsp;</td></tr>
</table>
</div>
