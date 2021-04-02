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
					<th scope="col">Ações</th>
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
						<td>
							<?php
							echo $this->Form->postLink(
								'Deletar',
								array('action'=>'delete',$post['Post']['id']),
								array('class'=>'btn btn-danger btn-sm','controller'=>'posts'),
								__('Tem certeza?')
							);
							?>
							<span>&nbsp</span>
							<?php
							echo $this->Html->link(
								'Editar', 
								array('action'=>'edit', $post['Post']['id']), 
								array('class'=>'btn btn-primary btn-sm'));
							?>
						</td>
					</tr>
				<?php endforeach; ?>
				<?php unset($post); ?>
			</tbody>
		</table>
	</div>
</div>