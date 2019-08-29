<?php get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Bienvenue sur Biodiv'Centre Val-de-Loire</h5>
						<p class="card-text">le Système d'information Régional Faune Flore de la région Centre.</p>
						<p>Le réseau SIRFF, géré par Nature Centre en collaboration avec ses associations adhérentes, a pour
							objectifs de produire, gérer, traiter, valoriser et diffuser des données naturalistes géolocalisées
							dans le but d'améliorer la connaissance de la biodiversité en région Centre. Avec le soutien de la
							région Centre et de la DREAL Centre, le réseau SIRFF collabore étroitement avec le SINP
							(Système d'Information sur la Nature et les Paysages).</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="https://place-hold.it/500x300" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="https://place-hold.it/500x300" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="https://place-hold.it/500x300" class="d-block w-100" alt="...">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>
		<?php get_sidebar(); ?>
	<div class="container">
		<div class="row">
			<div class="col-2">

			</div>
			<div class="col-10">
				<?php get_template_part('searchformbootstrap'); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>