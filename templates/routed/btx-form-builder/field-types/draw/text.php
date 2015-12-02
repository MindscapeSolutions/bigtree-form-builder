<?
	$classes = array("form_builder_text");
	if ($d["required"]) {
		$classes[] = "form_builder_required";
	}
	if ($error) {
		$classes[] = "form_builder_error";
	}
?>
<?
if ($d["hidden"] != "on") { 
?>
<fieldset>
	<label for="form_builder_field_<?=$count?>">
		<?=htmlspecialchars($d["label"])?>
		<? if ($d["required"]) { ?>
		<span class="form_builder_required_star">*</span>
		<? } ?>
	</label>
<?
}
?>
	<input type="<? if ($d["hidden"] == "on") { ?>hidden<? } else { ?>text<? } ?>" id="form_builder_field_<?=$count?>" name="<?=$field_name?>" class="<?=implode(" ",$classes)?>" value="<? if (empty($fieldData)) { echo htmlspecialchars($default); } else { echo htmlspecialchars($fieldData); } ?>" placeholder="<?=htmlspecialchars($d["placeholder"])?>" <? if (intval($d["maxlength"])) { ?>maxlength="<?=intval($d["maxlength"])?>" <? } ?>/>
<?
if ($d["hidden"] != "on") { 
?>
</fieldset>
<?
}
?>
<?
	if ($form["paid"] && $d["price"] == "on") {
		$text_watch[] = "form_builder_field_$count";
	}
?>
