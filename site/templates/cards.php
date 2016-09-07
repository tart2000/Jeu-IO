<?php snippet('header') ?>

  <div class="container-fluid">
  	<div class="row">
  		<div class="col-md-3 col-md-offset-9 col-sm-4 col-sm-offset-8" id="filter">
			<select class="form-control" id="selectFilter">
				<option value="all">Toutes les cartes</option>
				<option value="researchx">Recercher</option>
				<option value="createx">Créer</option>
				<option value="explorex">Explorer</option>
				<option value="experimentx">Expérimenter</option>
				<option value="evaluatex">Évaluer</option>
			</select>
		</div>
  	
  	</div>

  	<?php $subpages   = $page->children(); ?>
	<?php if($tag = param('tag')) : ?>
	  <?php $subpages = $subpages->filterBy('phase', $tag, ','); ?>
	  <h3>(<?php echo $subpages->count() ?> cartes)</h3>
	<?php endif ?>

  	<div class="row">
  		<?php foreach ($subpages as $card) : ?>
  			<div class="col-sm-4 col-md-3 <?php echo $card->phase().'x' ?> hideable">
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