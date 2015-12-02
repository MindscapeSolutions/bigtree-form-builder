<fieldset>
	<label>Field Label</label>
	<input type="text" name="label" value="<?=htmlspecialchars($data["label"])?>" />
</fieldset>
<fieldset>
	<label>Placeholder Field Value</label>
	<input type="text" name="placeholder" value="<?=htmlspecialchars($data["placeholder"])?>" />
</fieldset>
<fieldset>
	<label>Maximum Length <small>(leave empty or 0 for no max)</small></label>
	<input type="text" name="maxlength" value="<?=intval($data["maxlength"])?>" />
</fieldset>
<fieldset>
	<input type="checkbox" name="hidden" <? if ($data["hidden"] == "on") { ?>checked="checked" <? } ?> />
	<label>Hidden Field</label>
