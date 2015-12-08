<?
if (isset($pageBreakMode)) {
    switch ($pageBreakMode) {
        case "first":
?>

<div class="page-break">

<?
            break;
        case "last":
?>

</div>

<?
            break;
        default:
?>

</div>
<div class="page-break">

<?
    }
}
?>

