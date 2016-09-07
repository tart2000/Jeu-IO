<?php snippet('header') ?>
  
  <?php $uid = $page->uid() ?>
  <?php $cards = page('cards')->children()->filterBy('topic','*=',$uid) ?>

  <div class="container-fluid">
  	<h1><?php echo $page->title() ?> <i class="fa fa-<?php echo $page->icon() ?>"></i> (<?php echo $cards->count() ?>)</h1> 
    <?php echo $page->description() ?>
  	<div class="row">
  		<?php foreach ($cards as $card) : ?>
  			<div class="col-sm-4 col-md-3">
          <?php snippet('card', array('card'=>$card)) ?>
        </div>
	  	<?php endforeach ?>
  	</div>
  </div>

<?php snippet('footer') ?>