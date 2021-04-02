<div class="container" style="margin-top: 100px;">

	<h3>Nova Postagem</h3>
	<br>
	<div>
		<?= $this->Form->create('Post') ?>
		<div class="form-group">
			<label for="title">Título</label>
			<input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp" required="Necessário preencher">
			<small id="titleHelp" class="form-text text-muted">Seja criativo para chamar atenção.</small>
		</div>
		<div class="form-group">
			<label for="body">Corpo</label>
			<textarea class="form-control" name="body" id="body" rows="3" required="Necessário preencher"></textarea>
		</div>

		<?php
		echo $this->Form->button("Salvar", array("id" => "save", "class" => "btn btn-success", "type" => "submit"));
		echo $this->Form->end();
		?> 

	</div>
</div>
<?php

?>