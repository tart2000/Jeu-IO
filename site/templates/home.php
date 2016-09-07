<?php snippet('header') ?>

<div class="container-fluid mt">
	<iframe width="100%" height="600px" src="https://www.youtube.com/embed/_5Mr6OqaGDY" frameborder="0" allowfullscreen></iframe>

	<h1>Témoignages</h1>
	<div class="row">
		<div class="col-sm-4">
			<iframe width="560" height="200" src="https://www.youtube.com/embed/ovimF1JSzs0" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="col-sm-4">
			<iframe width="560" height="200" src="https://www.youtube.com/embed/_QqvFiWKOlI" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="col-sm-4">
			<iframe width="560" height="200" src="https://www.youtube.com/embed/HJyNU3uOciU" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>

	<h1>8 points d'entrée business</h1>
	<table class="home-icons">					
		<?php foreach (page('topics')->children() as $topic) : ?>
			<td>
				<a href="<?php echo $topic->url() ?>">
					<i class="fa fa-<?php echo $topic->icon() ?> topic-icon"></i>
			    </a>
			</td>
		<?php endforeach ?>
	</table>

	<h1>Développement des compétences</h1>
	<div class="owl-carousel" id="owl-1">
		<?php foreach (page('capacities')->children() as $card) : ?>
			<?php snippet('card',array('card'=>$card)) ?>
		<?php endforeach ?>
	</div>

	<h1><a href="/cards">Cartes action</a></h1>
	<div class="owl-carousel" id="owl-2">
		<?php foreach (page('cards')->children()->shuffle() as $card) : ?>
			<?php snippet('card',array('card'=>$card)) ?>
		<?php endforeach ?>
	</div><!-- end row -->
</div><!-- end container -->

<?php snippet('footer') ?>