<?php

$action = $this->actions();

$IC = new Item();
$model = $IC->typeObject("text");

?>
<div class="scene defaultNew">
	<h1>New text</h1>

	<ul class="actions">
		<li class="cancel"><a href="/admin/text/list" class="button">Back</a></li>
	</ul>

	<form action="/admin/cms/save/text" class="i:formDefaultNew labelstyle:inject" method="post" enctype="multipart/form-data">

		<fieldset>
			<?= $model->input("published_at") ?>
			<?= $model->input("name") ?>
			<?= $model->input("text", array("class" => "autoexpand")) ?>
		</fieldset>

		<ul class="actions">
			<li class="cancel"><a href="/admin/text/list" class="button">Back</a></li>
			<li class="save"><input type="submit" value="Save" class="button primary" /></li>
		</ul>

	</form>

</div>

