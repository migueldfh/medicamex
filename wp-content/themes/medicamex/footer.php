<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Medicamex
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="skinny row">
			<div class="container">
				<div style="height: 25px;"></div>
				<div class="col-md-6">
					<p>Copyright &copy; Medicamex / TODOS LOS DERECHOS RESERVADOS 2017-2019</p>
				</div>
				<div class="col-md-6">
					<p><a href="#" style="color: #00785b">Aviso de Privacidad</a> | <small>Teléfono: 01.818.333.3319</small> | <small>Correo Electrónico: info@medicamex.com</small></p>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<script type="text/javascript">
$('#myTabs a').click(function (e) {
	e.preventDefault()
	$(this).tab('show')
})
</script>
</body>
</html>
