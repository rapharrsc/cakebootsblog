<div class="container" style="margin-top: 100px">
	<h3>Editar Usuário</h3>
	<br>
	<div>
		<?php
			echo $this->Form->create('User');
			echo $this->Form->input('username',
				array('class' => 'form-control',
					'label' => array(
						'text'=>'Nome de Usuário',
						'class'=>'form-label')));
			echo $this->Form->input('password',
				array('class' => 'form-control',
					'label' => array(
						'text'=>'Senha',
						'class'=>'form-label')));
			echo $this->Form->input('id',array('type'=>'hidden'));
			echo $this->Form->button("Salvar", array("id" => "save", "class" => "btn btn-success mt-3", "type" => "submit"));
		echo $this->Form->end();
		?>
	</div>
</div>