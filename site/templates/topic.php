<?php snippet('header') ?>
  
  <?php $uid = $page->uid() ?>
  <?php $cards = page('cards')->children()->filterBy('topic','*=',$uid)->sortBy('phase') ?>
  <?php $caps = page('capacities')->children()->filterBy('topic','*=',$uid)->sortBy('phase') ?>
  <?php $cards = $cards->merge($caps)  ?>
  <?php $count = $cards->count() ?>

  <table class="home-icons bmt">         
    <?php foreach (page('topics')->children() as $topic) : ?>
      <td>
        <a href="<?php echo $topic->url() ?>">
          <i class="fa fa-<?php echo $topic->icon() ?> topic-icon"></i>
          </a>
      </td>
    <?php endforeach ?>
  </table>

  <div class="container-fluid">
  	<h1><?php echo $page->title() ?> <i class="fa fa-<?php echo $page->icon() ?>"></i> (<?php echo $count ?>)</h1> 
    <?php echo $page->description() ?>
  	<div class="row">
  		<?php foreach ($cards as $card) : ?>
  			<div class="col-sm-4 col-md-3">
          <?php snippet('card', array('card'=>$card)) ?>
        </div>
	  	<?php endforeach ?>
      <!-- Now go through capacities cards -->

  	</div>
  </div>

<?php snippet('footer') ?>