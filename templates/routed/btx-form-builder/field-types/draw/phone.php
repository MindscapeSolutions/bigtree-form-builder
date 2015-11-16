<fieldset>
	<label for="form_builder_field_<?=$count?>">
		<?=htmlspecialchars($d["label"])?>
		<? if ($d["required"]) { ?>
		<span class="form_builder_required_star">*</span>
		<? } ?>
	</label>
	<div class="form_builder_wrap">
		<div class="form_builder_phone_3">
			<input type="text" maxlength="3" name="<?=$field_name?>[first]" id="form_builder_field_<?=$count?>" class="form_builder_text<? if ($d["required"]) { ?> form_builder_required<? if ($error && (strlen($default["first"]) != 3 || !is_numeric($default["first"]))) { ?> form_builder_error<? } ?><? } ?>" value="<? if (empty($fieldData)) { echo htmlspecialchars($default["first"]); } else { echo htmlspecialchars($fieldData["first"]); } ?>" />
			<label for="form_builder_field_<?=$count?>" class="form_builder_sublabel form_builder_centered">###</label>
		</div>
		<? $count++; ?>
		<div class="form_builder_phone_3">
			<input type="text" maxlength="3" name="<?=$field_name?>[second]" id="form_builder_field_<?=$count?>" class="form_builder_text<? if ($d["required"]) { ?> form_builder_required<? if ($error && (strlen($default["second"]) != 3 || !is_numeric($default["second"]))) { ?> form_builder_error<? } ?><? } ?>" value="<? if (empty($fieldData)) { echo htmlspecialchars($default["second"]); } else { echo htmlspecialchars($fieldData["second"]); } ?>" />
			<label for="form_builder_field_<?=$count?>" class="form_builder_sublabel form_builder_centered">###</label>
		</div>
		<? $count++; ?>
		<div class="form_builder_phone_4">
			<input type="text" maxlength="4" name="<?=$field_name?>[third]" id="form_builder_field_<?=$count?>" class="form_builder_text<? if ($d["required"]) { ?> form_builder_required<? if ($error && (strlen($default["third"]) != 4 || !is_numeric($default["third"]))) { ?> form_builder_error<? } ?><? } ?>" value="<? if (empty($fieldData)) { echo htmlspecialchars($default["third"]); } else { echo htmlspecialchars($fieldData["third"]); } ?>" />
			<label for="form_builder_field_<?=$count?>" class="form_builder_sublabel form_builder_centered">####</label>
		</div>
	</div>
</fieldset>
