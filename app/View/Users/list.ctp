<div class="container" style="margin-top: 100px">
	<div>
		<?php
		$uid = $this->Session->read('Auth.User.id');

		$uname = $this->Session->read('Auth.User.username');

		$urole = $this->Session->read('Auth.User.role');

		?>

		<h3>Bem-Vindo <?= $uname; ?> Nível de acesso: <?= $urole; ?></h3>
		<br>
		<table class="table">
			<tr>
				<th>Id</th>
				<th>Username</th>
				<th>Role</th>
				<th>Actions</th>
			</tr>

			<?php foreach ($users as $user): ?>
				<tr>
					<td><?= $user['User']['id']; ?></td>
					<!--<td><?= $user['User']['username']; ?></td>-->
					<td><?php echo $this->Html->link($user['User']['username'], array('controller'=>'users','action'=>'view',$user['User']['id'])); ?></td>>
					<td><?= $user['User']['role'] ?></td>
					<td>
						<?php 
						echo $this->Form->postLink('Delete', array('action'=>'delete', $user['User']['id']),array('class'=>'btn btn-danger btn-sm','confirm' => 'Certeza?'));

						echo $this->Html->tag('span','&nbsp');

						echo $this->Html->link('Edit', array('action'=>'edit',$user['User']['id']),array('class' => 'btn btn-primary btn-sm'));
						?>
					</td>
				</tr>
			<?php endforeach; ?>
			<?php unset($user); ?>	
		</table>

	</div>
</div>