<?php
$urole = $this->Session->read('Auth.User.role');
?>

<header class="fixed-top">
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
		<!-- Links -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="/cakebootsblog">Início</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Meus posts</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/cakebootsblog/posts/add">Adicionar post</a>
			</li>
			<?php
			if ($loggedIn && $urole === 'admin') { ?>

				<a href="/cakebootsblog/users/list" class="nav-link">Listar usuários</a>

			<?php } ?>
		</ul>
		<span>&nbsp</span>
		<span>&nbsp</span>
		<span>&nbsp</span>
		<span>&nbsp</span>
		<!--<?= $this->Html->link('Login', array('controller'=>'users', 'action'=>'login'), array('class'=>'btn btn-primary btn-sm')) ?>-->
		<?php
		if ($loggedIn) { ?>
			<a href="/cakebootsblog/users/logout" class="btn btn-primary btn-sm">Sair</a>
		<?php }
		else
			{?>
				<a href="/cakebootsblog/users/login" class="btn btn-primary btn-sm">Entrar</a>
			<?php } ?>

			<span>&nbsp</span>
			<span>&nbsp</span>
			<?php
			if ($loggedIn && $urole === 'admin') { ?>

				<a href="/cakebootsblog/users/add" class="btn btn-secondary btn-sm">Cadastrar</a>

			<?php }

			elseif ($loggedIn && $urole === 'author') { ?>

				<a href="/cakebootsblog/users/add" class="btn btn-secondary btn-sm" hidden>Cadastrar</a>

				<?php 

			} elseif (!$loggedIn) { ?>

				<a href="/cakebootsblog/users/add" class="btn btn-secondary btn-sm">Cadastrar</a>

			<?php } ?>
		</nav>
	</header>