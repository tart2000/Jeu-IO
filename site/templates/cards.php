<?php snippet('header') ?>

  <div class="container-fluid mt">

  <?php $cards = page('cards')->children() ?>
  <?php $caps = page('capacities')->children() ?>
  <?php $subpages = $cards->merge($caps)  ?>

  <?php $subpages   = $subpages->sortBy('phase') ?>
	<?php if($tag = param('sort')) : ?>
    <?php if ($tag == 'alpha') {
      $subpages = $subpages->sortBy('title');
      $classement = 'alphabétique';
    }?>
    <?php if ($tag == 'value') {
      $subpages = $subpages->sortBy('value');
      $classement = 'par valeur IØ';
    }?>
    <?php if ($tag == 'phases') {
      $subpages = $subpages->sortBy('phase');
      $classement = 'par phase';
    }?>
    <?php if ($tag == 'c') {
      $subpages = $subpages->sortBy('cvalue');
      $classement = 'par valeur C';
    }?>
    <?php if ($tag == 'p') {
      $subpages = $subpages->sortBy('pvalue');
      $classement = 'par valeur P';
    }?>
    <?php if ($tag == 'r') {
      $subpages = $subpages->sortBy('rvalue');
      $classement = 'par valeur R';
    }?>
    <h3>Classement <?php echo $classement ?></h3>
	<?php endif ?>


  	<div class="row">
  		<?php foreach ($subpages as $card) : ?>
          <?php if ($card->template() == 'card') {
            $color=$card->phase();
          } else { 
            $color='capacity';
          } ?>
  			<div class="col-sm-4 col-md-3 <?php echo $color.'x' ?> hideable">
	  			<?php snippet('card', array('card'=>$card)) ?>
	  		</div>
	  	<?php endforeach ?>
  	</div>
  </div>

  <script type="text/javascript">
  	 $('#selectFilter').on('change', function() {
        var type = $(this).val();
        console.log(type);

        if (type == 'all') {
            $('.hideable').removeClass('hidden');
        } else  {
            $('.hideable').addClass('hidden');
            $('.' + type).removeClass('hidden');
        };
    });
  </script>

<?php snippet('footer') ?>