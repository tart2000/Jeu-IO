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
				<?php echo $page->baseline()->kirbytext() ?>
				<a class="btn btn-primary btn-lg" href="/about" role="button">En savoir plus</a>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid mt">

	<div class="row numbers">
		<div class="col-sm-4 center">
			<span class="number"><?php echo $page->n1() ?></span>
			<h2><?php echo $page->t1() ?></h2>
		</div>
		<div class="col-sm-4 center">
			<span class="number"><?php echo $page->n2() ?></span>
			<h2><?php echo $page->t2() ?></h2>
		</div>
		<div class="col-sm-4 center">
			<span class="number"><?php echo $page->n3() ?></span>
			<h2><?php echo $page->t3() ?></h2>
		</div>
	</div><!-- end numbers row -->

	<div class="row bmt exp">
		<div class="col-sm-6">
			<?php echo $page->text()->kirbytext() ?>
		</div>
		<div class="col-sm-6">
			<?php echo $page->text2()->kirbytext() ?>
			<a class="btn btn-primary" href="/about" role="button">En savoir plus</a>

		</div>
	</div>

	<div class="row mt">
		<img src="assets/images/jeu_images.png">
	</div>

	<div class="row mt"> <!-- Les cartes -->
		<div class="col-xs-6">
			<h1 >Les leviers d'innovation ouverte</h1>
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

	<table class="home-icons smt">					
		<?php foreach (page('topics')->children() as $topic) : ?>
			<td>
				<a href="<?php echo $topic->url() ?>">
					<i class="fa fa-<?php echo $topic->icon() ?> topic-icon"></i>
			    </a>
			</td>
		<?php endforeach ?>
	</table>

	<!-- Témoignages -->
	<div class="row bmt" id="words"> 
		<?php foreach (page('words')->children()->limit(2) as $w) : ?>
			<div class="col-sm-6 center word">
				<div class="quote">
					<i class="fa fa-quote-left"></i>
					<?php echo $w->text()->kirbytext() ?>
					<i class="fa fa-quote-right"></i>
				</div>
				<h3><?php echo $w->title() ?></h3>
				<em><?php echo $w->company() ?></em>
			</div>
		<?php endforeach ?>
	</div> 

	<!-- Mettre logos ici -->
	<div class="row bmt">
		<?php foreach (page('logos')->images()->limit(4) as $l) : ?>
			<div class="col-sm-3 client">
				<img src="<?php echo $l->url() ?>" class="client-logo">
			</div>
		<?php endforeach ?>
	</div>

</div><!-- end container -->

<?php snippet('footer') ?>