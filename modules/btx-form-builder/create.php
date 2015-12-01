<?
	BigTree::globalizePOSTVars("htmlspecialchars");
	
	// Get cleaned up prices, dates, and entries
	if ($early_bird) {
		$early_bird_date = "'".date("Y-m-d H:i:s",strtotime(str_replace("@","",$_POST["early_bird_date"])))."'";
		$early_bird_base_price = floatval(str_replace(array('$',',',' '),'',$_POST["early_bird_base_price"]));
	} else {
		$early_bird_date = "NULL";
	}
	$base_price = floatval(str_replace(array('$',',',' '),'',$_POST["base_price"]));
	$max_entries = intval($max_entries);
	
	// Create the form.
	$form = BigTreeAutoModule::createItem("btx_form_builder_forms",array(
		"title" => $title,
		"paid" => $paid,
		"base_price" => $base_price,
		"early_bird_base_price" => $early_bird_base_price,
		"early_bird_date" => $early_bird_date,
		"limit_entries" => $limit_entries,
		"max_entries" => $max_entries,
        "save_progress" => $save_progress,
        "layout" => $layout
	));
	
	// Setup the default column, sort position, alignment inside columns.
	$position = count($_POST["type"]);
	$column = 0;
	$alignment = "";

	foreach ($_POST["type"] as $key => $type) {
		if ($type == "column_start") {
			// If we're starting a set of columns and don't have an alignment it's a new set.
			if (!$alignment) {
				$column = BigTreeAutoModule::createItem("btx_form_builder_fields",array("form" => $form,"type" => "column","position" => $position));
				$alignment = "left";
			// Otherwise we're starting the second column of the set, just change the alignment.
			} elseif ($alignment == "left") {
				$alignment = "right";
			}
		} elseif ($type == "column_end") {
			if ($alignment == "right") {
				$column = 0;
				$alignment = "";
			}
		} elseif ($type) {
			$newId = BigTreeAutoModule::createItem("btx_form_builder_fields",array("form" => $form,"column" => $column,"alignment" => $alignment,"type" => $type,"data" => $_POST["data"][$key],"position" => $position));

            // we need to save the extra field data immediately so the "save progress" forms can use it
            //
            // get the current data
            $mData = json_decode($_POST["data"][$key]);

            // set the new id and type
            $mData->id = $newId;
            $mData->type = $type;

            // generate the name of the field
            $fieldResults = sqlquery("select * from btx_form_builder_fields where form = " . $form);
            $namesUsed = array();
            while ($f = sqlfetch($fieldResults)) {
                $rData = json_decode($f['data']);
                if (isset($rData->name)) {
                    $namesUsed[] = $rData->name;
                }
            }

            $nameCreated = false;
            $nameCounter = 0;
            while (!$nameCreated) {
                if (!in_array('form_builder_element_' . $nameCounter, $namesUsed)) {
                    $mData->name = 'form_builder_element_' . $nameCounter;
                    $nameCreated = true;
                }
                else {
                    $nameCounter++;
                }
            }

            $updateResult = sqlquery("update btx_form_builder_fields set data = '" . json_encode($mData) . "' where id = " . $newId);
		}
		$position--;
	}

	$admin->growl("Form Builder","Created Form");
	BigTree::redirect(MODULE_ROOT);
?>
