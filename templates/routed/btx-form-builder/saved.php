<?
if (!empty($form["layout"])) {
    if (file_exists(SERVER_ROOT . "templates/layouts/" . $form["layout"] . ".php")) {
        $bigtree["layout"] = $form["layout"];
    }
}
?>

<h1>Your Progress Has Been Saved</h1>
