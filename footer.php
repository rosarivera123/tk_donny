<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container">
		<div class="row">
			<div class="site-footer-inner col-sm-12">

				<div class="site-info">
				Blog  RSS  Twitter  Github  API  Support
				</div><!-- close .site-info -->
				<div>
					Made by <span style="color: #df691a">Thomas Park.</span> Contact him at <span style="color: #df691a">thomas@bootswatch.com.</span></div>
					<div>
						Code released under the <span style="color: #df691a">MIT License.</span></div>
						<div>
							Based on <span style="color: #df691a">Bootstrap.</span> Icons from <span style="color: #df691a">Font Awesome.</span> Web fonts from <span style="color: #df691a">Google.</span></div>


			</div>
		</div>
	</div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>