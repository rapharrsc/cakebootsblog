<?php
$uid = $this->Session->read('Auth.User.id');
//echo $uid;
$uname = $this->Session->read('Auth.User.username');
//echo $uname;
$urole = $this->Session->read('Auth.User.role');
//echo $urole
?>

<div class="container" style="margin-top: 100px;">
	<h3>Postagens</h3>
	<br>
	<br>
	<div>
		<table class="table ">
			<thead class="text-center">
				<tr>
					<th scope="col">Id</th>
					<th scope="col">Título</th>
					<th scope="col">Criado em</th>
					<th scope="col">Modificado em</th>
					<th scope="col">Criado por</th>
					<?php
					if ($loggedIn) {?>
						<th scope="col">Ações</th>

						<?php
					}
					?>
					
				</tr>
			</thead>
			<tbody class="text-center">
				<?php foreach ($posts as $post): ?>
					<tr>
						<td><?= $post['Post']['id']; ?></td>
						<td>
							<?= $this->Html->link(
								$post['Post']['title'],
								array(
									'controller' => 'posts',
									'action'=>'view', 
									$post['Post']['id'])
								); ?>	
							</td>
							<td><?= $post['Post']['created']; ?></td>
							<td><?= $post['Post']['modified'] ?></td>
							<td><?= $post['Post']['user_id'] ?></td>
							<?php if ($loggedIn) {?>
								<td>
									<?php
									if ($uid === $post['Post']['user_id']) {
									# code...

										echo $this->Form->postLink(
											'Deletar',
											array('action'=>'delete',$post['Post']['id']),
											array('class'=>'btn btn-danger btn-sm','controller'=>'posts'),
											__('Tem certeza?')
										);
									}
									?>
									<span>&nbsp</span>
									<?php
									if ($uid === $post['Post']['user_id']) {
									# code...
										echo $this->Html->link(
											'Editar', 
											array('action'=>'edit', $post['Post']['id']), 
											array('class'=>'btn btn-primary btn-sm'));}
											?>
										</td>
									<?php } ?>
								</tr>
							<?php endforeach; ?>
							<?php unset($post); ?>
						</tbody>
					</table>
				</div>
			</div>