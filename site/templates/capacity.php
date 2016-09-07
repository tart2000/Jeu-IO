<?php snippet('header') ?>

  <div class="container-fluid mt">
  	<div class="row">
      <div class="col-sm-4 col-md-3">
  		  <?php snippet('card', array('card'=>$page)) ?>
      </div>
  	</div>
  	<h1>Cartes associées</h1> 
  	<div class="row">
  		<?php $uid = $page->uid() ?>
  		<?php foreach (page('cards')->children()->filterBy('capacity','*=',$uid) as $card) : ?>
  			<div class="col-sm-4 col-md-3">
          <?php snippet('card', array('card'=>$card)) ?>
        </div>
	  	<?php endforeach ?>
  	</div>
  </div>

<?php snippet('footer') ?>