<div class="sample">
<?php print $node->field_memorial_rank[0]['value'] ?>&nbsp;
<?php print $node->field_memorial_first_name[0]['value']  ?>&nbsp;
<?php print $node->field_memorial_middle_name[0]['value'] ?>&nbsp;
<?php print check_plain($node->title) ?>
<?php print$node->content['field_memorial_photo']['field']['#children'] ?><br />
<?php print $node->field_memorial_information[0]['value'] ?>
</div>