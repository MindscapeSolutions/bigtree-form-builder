<fieldset>
	<label for="form_builder_field_<?=$count?>">
		<?=htmlspecialchars($d["label"])?>
		<? if ($d["required"]) { ?>
		<span class="form_builder_required_star">*</span>
		<? } ?>
	</label>
	<div class="form_builder_date_2">
		<input type="text" maxlength="2" name="<?=$field_name?>[month]" id="form_builder_field_<?=$count?>" class="form_builder_text<? if ($d["required"]) { ?> form_builder_required<? if ($error && !$default["month"]) { ?> form_builder_error<? } ?><? } ?>" value="<? if (empty($fieldData)) { echo htmlspecialchars($default["month"]); } else { echo htmlspecialchars($fieldData["month"]); } ?>" />
		<label for="form_builder_field_<?=$count?>" class="form_builder_sublabel form_builder_centered">MM</label>
	</div>
	<? $count++; ?>
	<div class="form_builder_date_2">
		<input type="text" maxlength="2" name="<?=$field_name?>[day]" id="form_builder_field_<?=$count?>" class="form_builder_text<? if ($d["required"]) { ?> form_builder_required<? if ($error && !$default["day"]) { ?> form_builder_error<? } ?><? } ?>" value="<? if (empty($fieldData)) { echo htmlspecialchars($default["day"]); } else { echo htmlspecialchars($fieldData["day"]); } ?>" />
		<label for="form_builder_field_<?=$count?>" class="form_builder_sublabel form_builder_centered">DD</label>
	</div>
	<? $count++; ?>
	<div class="form_builder_date_4">
		<input type="text" maxlength="4" name="<?=$field_name?>[year]" id="form_builder_field_<?=$count?>" class="form_builder_text<? if ($d["required"]) { ?> form_builder_required<? if ($error && !$default["year"]) { ?> form_builder_error<? } ?><? } ?>" value="<? if (empty($fieldData)) { echo htmlspecialchars($default["year"]); } else { echo htmlspecialchars($fieldData["year"]); } ?>" />
		<label for="form_builder_field_<?=$count?>" class="form_builder_sublabel form_builder_centered">YYYY</label>
	</div>
</fieldset>
