<div class="container" style="margin-top: 100px;">
	<h3>Entrar</h3>
	<br>
	<div>
		<?php echo $this->Flash->render('auth'); ?>
		<?php echo $this->Form->create('User'); ?>

		<div class="form-group">

			<?php 
			echo $this->Form->input('username',array('class'=>'form-control','label'=>array('text'=>'Nome de Usuário', 'class'=>'form-label')));
			
			echo $this->Form->input('password', array('class'=>'form-control','label'=>array('text'=>'Senha', 'class'=>'form-label'))); 
			echo $this->Form->end(__('Entrar')); 
			?>		
		</div>
	</div>