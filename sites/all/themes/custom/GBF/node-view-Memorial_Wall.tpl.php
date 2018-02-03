<div class="sample">
<?php print $node->field_memorial_photo[0]['view'] ?>
<?php print $node->field_memorial_rank[0]['view'] ?>&nbsp;
<?php print $node->field_memorial_first_name[0]['view']  ?>&nbsp;
<?php print $node->field_memorial_middle_name[0]['view'] ?>&nbsp;
<?php print check_plain($node->title) ?><br />
<?php print $node->field_memorial_information[0]['view'] ?>
</div>