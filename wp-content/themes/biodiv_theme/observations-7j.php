<div class="container">
	<h3>Les observations des 7 derniers jours</h3>
	<div class="row mx-auto">
		<div class="col">
			<button type="button" class="btn-secondary">
				contributeurs <span class="badge badge-light">3 500</span>
			</button>
		</div>
		<div class="col">
			<button type="button" class="btn-secondary">
				données <span class="badge badge-light">577 542</span>
			</button>
		</div>
		<div class="col">
			<button type="button" class="btn-secondary">
				epèces <span class="badge badge-light">8 275</span>
			</button>
		</div>
	</div>
	<div class="row mw-auto">
		<div class="col-8">
			<?php get_template_part('carte-centre');?>
		</div>
		<div class="col-4">
			<?php get_template_part('tableau'); ?>
		</div>
	</div>
</div>
