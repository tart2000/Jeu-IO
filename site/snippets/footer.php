  <footer class="footer">
  	<div class="container-fluid">
	  	Un projet de <a href="http://rhizome-strategies.com">Rhizome</a>
	 </div>
  </footer>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<?php if ($page->template() == 'home') : ?>
	<?php echo js('assets/owl-carousel/owl.carousel.js') ?>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#owl-1").owlCarousel({
				items:4
			});
			$("#owl-2").owlCarousel({
				items:4
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