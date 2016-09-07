<?php snippet('header') ?>

  <div class="container-fluid">
  	<div class="row">
  		<?php foreach ($page-> children() as $card) : ?>
	  		<?php snippet('card', array('card'=>$card)) ?>
	  	<?php endforeach ?>
  	</div>
  </div>

<?php snippet('footer') ?>