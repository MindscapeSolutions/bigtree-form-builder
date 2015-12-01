<?
if (!empty($form["layout"])) {
    if (file_exists(SERVER_ROOT . "templates/layouts/" . $form["layout"] . ".php")) {
        $bigtree["layout"] = $form["layout"];
    }
}
?>

<h1><?=$thank_you_page_header?></h1>
<?=$thank_you_page_content?>
