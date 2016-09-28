<?php snippet('header') ?>

<div id="cover">
	<video autoplay muted loop poster="<?php echo $site->url() ?>/assets/images/video_snap.png" id="bgvid">
	    <source src="<?php echo $site->url() ?>/assets/video/JeuIO_webm.webm" type="video/webm">
	    <source src="<?php echo $site->url() ?>/assets/video/JeuIO_web.mp4" type="video/mp4">
	</video>

	<div class="overlay">
	</div>

	<div class="container-fluid" id="cover-text">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h1>Un jeu sérieux pour comprendre l'Innovation Ouverte et développer des stratégies de collaboration</h1>
				<p>Ateliers de 4 à 6h</p>
				<a class="btn btn-primary btn-lg" href="/about" role="button">En savoir plus</a>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid mt">

	<div class="row numbers">
		<div class="col-sm-4 center">
			<span class="number">60</span>
			<h3>Leviers d'action</h3>
		</div>
		<div class="col-sm-4 center">
			<span class="number">200+</span>
			<h3>Entreprises formées</h3>
		</div>
		<div class="col-sm-4 center">
			<span class="number">8</span>
			<h3>Entrées business clés</h3>
		</div>
	</div><!-- end numbers row -->

	<div class="row mt">
		<img src="assets/images/jeu_images.jpg">
	</div>

	<div class="row mt">
		<div class="col-xs-6">
			<h1 >Les cartes</h1>
		</div>
		<div class="col-xs-6">
			<a href="/cards" class="right btn btn-default smt">Toutes les cartes</a>
		</div>
	</div>
	<div class="owl-carousel" id="cards">
		<?php $cards = page('cards')->children() ?>
		<?php $caps = page('capacities')->children() ?>
		<?php $cards = $cards->merge($caps)  ?>

		<?php foreach ($cards->shuffle() as $card) : ?>
			<?php snippet('card',array('card'=>$card)) ?>
		<?php endforeach ?>
	</div><!-- end cards carousel -->

	<table class="home-icons mt">					
		<?php foreach (page('topics')->children() as $topic) : ?>
			<td>
				<a href="<?php echo $topic->url() ?>">
					<i class="fa fa-<?php echo $topic->icon() ?> topic-icon"></i>
			    </a>
			</td>
		<?php endforeach ?>
	</table>

</div><!-- end container -->

<?php snippet('footer') ?>