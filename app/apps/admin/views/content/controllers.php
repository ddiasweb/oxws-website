<div class="row">
	<div class="col-sm-6">

		<h2>Controllers</h2>
		<p>Camada de negócio.</p>
		<p><a class="btn" href="<?php echo $oxws["context"] ?>/documentacao/modulos/controllers">Veja a documentação &raquo;</a></p>

		<?php	if (isset($controllers)) {	?>
		<h2>Lista de Controllers</h2>
		<ul>
		<?php	foreach ($controllers as $controller) {	?>
			<li><?php echo $controller; ?></li>
		<?php	} ?>
		</ul>
		<?php	} ?>

	</div>
</div>
