
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
	echo $this->Html->meta('icon');

	echo $this->Html->css('bootstrap');
	echo $this->Html->script(array('bootstrap.bundle','jquery-3.6.0'));

	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<?php echo $this->Flash->render(); ?>
			<?= $this->element('topo') ?>
		</div>

		<div id="content">
			<?php echo $this->Flash->render(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Flash->render(); ?>
			<?= $this->element('rodape'); ?>
		</div>
	</div>
	
</body>
</html>
