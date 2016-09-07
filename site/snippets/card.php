<div class="pad">
	<a href="<?php echo $card->url() ?>">
	<div class="card">
		<?php if ($card->template() == 'card') {
			$color=$card->phase();
		} else { 
			$color='capacity';
		} ?>
		<div class="card-top <?php echo $color ?>">
			<h2><?php echo $card->title() ?></h2>
			<p><?php echo $card->objectif() ?></p>
		
			<div class="faded">
				<table class="icons">
					<?php $thetopics = $card->topic() ?>					
					<?php foreach (page('topics')->children() as $topic) : ?>
						<?php $uid = $topic->uid() ?>
						<td>
							<a href="<?php echo $topic->url() ?>">
								<i class="fa fa-<?php echo $topic->icon() ?> topic-icon <?php if (strpos($thetopics, $uid) !== false) {
						    echo 'selected'; } ?>"></i>
						    </a>
						</td>
					<?php endforeach ?>
				</table>
				<h3><?php echo $card->value() ?> IØ</h3>
			</div>
		</div>
		<div class="card-bottom">
			<?php echo $card->description()->kirbytext() ?>
		</div>
		<div class="card-meta">
			<!-- Trouver la / les cartes capacités associées -->
			<?php if ($card->capacity() != '') : ?>
				<?php $caps = $card->capacity(); ?>
				<?php foreach ($caps->split() as $cap) : ?>
					<?php $thecap = page('capacities')->find($cap) ?>
					<a href="<?php echo $thecap->url() ?>"/><div class="round capacity"><?php echo html($thecap->shortcode()); ?></div></a>
				<?php endforeach ?>
			<?php endif ?>
			<?php if ($card->cvalue() != '') : ?>
				<div class="round cv">
					<?php echo $card->cvalue() ?>
				</div>
			<?php endif ?>
			<?php if ($card->pvalue() != '') : ?>
				<div class="round pv">
					<?php echo $card->pvalue() ?>
				</div>
			<?php endif ?>
			<?php if ($card->rvalue() != '') : ?>
				<div class="round rv">
					<?php echo $card->rvalue() ?>
				</div>
			<?php endif ?>
		</div>
	</div>
	</a>
</div>