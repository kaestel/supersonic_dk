<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once("../../config/config.php");

$action = $page->access();

$page->template("admin.header.php");
?>

<form action="/cms/save/news" method="post" enctype="multipart/form-data">

	<div class="field">
		<label>Published at</label>
		<input type="text" name="published_at" />
	</div>

	<div class="field">
		<label>Name</label>
		<input type="text" name="name" />
	</div>

	<div class="field">
		<label>Text</label>
		<textarea name="text"></textarea>
	</div>

	<div class="field">
		<label>Image</label>
		<input type="file" name="files[]" multiple="multiple" />
	</div>

	<div class="field">
		<label>Tag 1</label>
		<input type="text" name="tags[0]" />
	</div>

	<div class="field">
		<label>Tag 2</label>
		<input type="text" name="tags[1]" />
	</div>

	<div class="field">
		<label>Tag 3</label>
		<input type="text" name="tags[2]" />
	</div>

	<ul class="actions">
		<li><input type="submit" value="save" /></li>
	</ul>

</form>

<? $page->template("admin.footer.php") ?>