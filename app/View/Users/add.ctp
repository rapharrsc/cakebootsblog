<div class="container" style="margin-top: 100px">
	<h3>Novo Usuário</h3>
	<br>
	<div>
		<?= $this->Form->create('User'); ?>
		<div class="form-group">
			<fieldset>
				<label for="username">Nome de Usuário</label>
				<input type="text" name="username" class="form-control" id="username" required="Necessário preencher este campo">
			</fieldset>
			<br>
			<fieldset>
				<label for="password">Senha</label>
				<input type="password" name="password" id="password" class="form-control" required="Necessário preencher este campo">
			</fieldset>
			<br>
			<fieldset>
				<label for="password">Nível de acesso</label>
			<select class="form-control" id="role" name="role">
				<option selected disabled>Escolha uma opção</option>
				<option value="admin">Administrador</option>
				<option value="author">Autor</option>
			</select>
			</fieldset>
			<br>
			<?php
			echo $this->Form->button("Salvar", array("id" => "save", "class" => "btn btn-success", "type" => "submit"));
			echo $this->Form->end();
			?> 
		</div>
	</div>
</div>