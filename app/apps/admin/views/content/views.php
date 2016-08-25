<div class="row">
	<div class="col-sm-6">

		<h2>Views</h2>
		<p>Camada de apresentação.</p>
		<p><a class="btn" href="<?php echo $oxws["context"] ?>/documentacao/modulos/views">Veja a documentação &raquo;</a></p>

		<?php	if (isset($views)) {	?>
		<h2>Lista de Views</h2>
		<ul>
		<?php	foreach ($views as $view) {	?>
			<li><?php echo $view; ?></li>
		<?php	} ?>
		</ul>
		<?php	} ?>

	</div>
</div>
