  <footer id="footer">
  	<div class="container-fluid">
	  	Un projet de <a href="http://rhizome-strategies.com">Rhizome</a> avec le soutien du <a href="https://www.economie.gouv.qc.ca/accueil/?no_cache=1" target="_blank">Ministère de l'Économie, de la Science et de l'Innovation</a>.
	 </div>
  </footer>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<?php if ($page->template() == 'home') : ?>
	<?php echo js('assets/owl-carousel/owl.carousel.js') ?>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#cards").owlCarousel({
				items:4,
				autoPlay: true
			});
		});
	</script>
<?php endif ?>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>
<script type="text/javascript">
	$(function() {
	    $('.card').matchHeight({
	    	byRow: false,
	    });
	});
</script>

</body>
</html>