<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["LOCAL_PATH"]."/config/config.php");


$page->bodyClass("front");
$page->pageTitle("Supersonic");
?>

<?php $page->header() ?>

<div class="scene i:intro"></div>

<?php $page->footer() ?>