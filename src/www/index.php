<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");


$action = $page->actions();


$page->bodyClass("front");
$page->pageTitle("Supersonic");
?>

<?php $page->header() ?>

<div class="scene i:intro"></div>

<?php $page->footer() ?>