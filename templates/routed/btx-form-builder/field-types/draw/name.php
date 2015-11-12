<?
	$classes = array("form_builder_text");
	if ($d["required"]) {
		$classes[] = "form_builder_required";
	}
?>
<fieldset>
	<label for="form_builder_field_<?=$count?>">
		<?=htmlspecialchars($d["label"])?>
		<? if ($d["required"]) { ?>
		<span class="form_builder_required_star">*</span>
		<? } ?>
	</label>
	<div class="form_builder_wrap">
		<div class="form_builder_firstname">
			<input type="text" name="<?=$field_name?>[first]" id="form_builder_field_<?=$count?>" class="<?=implode(" ",$classes)?><? if ($error && !$default["first"]) { ?> form_builder_error<? } ?>" value="<? if (empty($fieldData)) { echo htmlspecialchars($default["first"]); } else { echo htmlspecialchars($fieldData['first']); } ?>" />
			<label for="form_builder_field_<?=$count?>" class="form_builder_sublabel">First</label>
		</div>
		<? $count++; ?>
		<div class="form_builder_lastname">
			<input type="text" name="<?=$field_name?>[last]" id="form_builder_field_<?=$count?>" class="<?=implode(" ",$classes)?><? if ($error && !$default["last"]) { ?> form_builder_error<? } ?>" value="<? if (empty($fieldData)) { echo htmlspecialchars($default["last"]); } else { echo htmlspecialchars($fieldData['last']); } ?>" />
			<label for="form_builder_field_<?=$count?>" class="form_builder_sublabel">Last</label>
		</div>
	</div>
</fieldset>
