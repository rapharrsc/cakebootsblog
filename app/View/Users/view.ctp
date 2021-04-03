<?php
$uid = $this->Session->read('Auth.User.id');
?>

<div class="container" style="margin-top: 100px">
	<div class="card">
		<h5 class="card-header">Nível de acesso: <?= $user['User']['role']; ?></h5>
		<div class="card-body">
			<h5 class="card-title">Olá eu sou o(a) <?= $user['User']['username']; ?></h5>
			<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			<a href="#" class="btn btn-primary">Ver minhas postagens</a>
		</div>
	</div>
	<br>

	<?php 
	if ($loggedIn) 
	{
	# code...
		if ($user['User']['role'] === 'admin' || $user['User']['id'] === $uid) {
			# code...
			echo $this->Html->link(
				'Editar', 
				array(
					'controller'=>'users',
					'action'=>'edit',
					$user['User']['id']
				),
				array(
					'class'=>'btn btn-primary btn-sm'
				)
			);

			echo $this->Html->tag('span','&nbsp');

			echo $this->Form->postLink(
				'Deletar',
				array(
					'action'=>'delete',
					$user['User']['id']
				),
				array('class'=>'btn btn-danger btn-sm',
					'controller'=>'users'),
				__('Tem certeza?')
			);
		}
	}
	?>
</div>