<?php snippet('header') ?>

<div class="container-fluid">
	<h1>Développement des compétences</h1>
	<div class="owl-carousel" id="owl-1">
		<?php foreach (page('capacities')->children() as $card) : ?>
			<?php snippet('card',array('card'=>$card)) ?>
		<?php endforeach ?>
	</div>

	<h1><a href="/cards">Toutes les cartes</a></h1>
	<div class="row">
		<?php foreach (page('cards')->children()->sortBy('phase') as $card) : ?>
		<div class="col-sm-4 col-md-3">
			<?php snippet('card',array('card'=>$card)) ?>
		</div>
		<?php endforeach ?>
	</div><!-- end row -->
</div><!-- end container -->

<?php snippet('footer') ?>