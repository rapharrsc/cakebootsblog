<div class="container" style="margin-top: 100px;">
	<div class="jumbotron">
		<h1 class="display-4"><?= $post['Post']['title'] ?></h1>
		<p class="lead"><?= $post['Post']['body'] ?></p>
		<hr class="my-4">
		<p><small>Criado por: <?= $post['Post']['user_id'] ?> <br> Na data: <?= $post['Post']['created'] ?></small></p>
		<?php
			echo $this->Html->link(
				'Editar',
				array('action'=>'edit',$post['Post']['id']),
					array('class'=>'btn btn-primary btn-sm'));
			echo $this->Html->tag('span','&nbsp');
			echo $this->Form->postLink('Deletar',
				array('action'=>'delete', $post['Post']['id']),
				array('class' => 'btn btn-danger btn-sm','controller'=>'posts'),
				__('Tem certeza?'));
		?>
	</div>
</div>