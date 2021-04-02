<div class="container" style="margin-top: 100px;">
	<h3>Editar Postagem</h3>
	<br>
	<div>

		<?php
		echo $this->Form->create('Post');
		echo $this->Form->input('title',
			array(
				'class'=>'form-control',
				'label'=>array(
					'text'=>'Título',
					'class'=>'form-label'
				)));
		echo $this->Form->input('body',
			array(
				'class'=>'form-control',
				'rows'=>'3',
				'label'=>array(
					'text'=>'Postagem',
					'class'=>'form-label mt-3'
				)));
		echo $this->Form->input('id',array('type'=>'hidden'));
		echo $this->Form->button("Salvar", array("id" => "save", "class" => "btn btn-success mt-3", "type" => "submit"));
		echo $this->Form->end();
		?>

		<!--
		<div class="form-group">
			<label for="title">Título</label>
			<input type="text" class="form-control" id="title" name="title"  required="Necessário estar preenchido">
		</div>
		<div class="form-group">
			<label for="body">Corpo</label>
			<textarea type="text" class="form-control" id="body" name="body" rows="3" required="Necessário estar preenchido"></textarea>
		</div>
	-->

</div>
</div>