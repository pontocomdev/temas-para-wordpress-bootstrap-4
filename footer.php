<footer>
		<div class="container-fluid bg-footer">
			<div class="container">
				<div class="row py-4">
					<div class="col-md-4">
						<h5 class="text-light"><i class="fas fa-info fa-2x mr-2 text-light"></i>Links Úteis</h5>
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer_menu',
									'before' => '<i class="fa fa-angle-right text-light"></i> '
								)
							);
						?>
					</div>
					<div class="col-md-4">
						<?php
							if(is_active_sidebar('footer-address')){
								dynamic_sidebar('footer-address');
							}
						?>
					</div>
					<div class="col-md-4">
						<div class="card text-light bg-card mb-3">
							<?php
							if(is_active_sidebar('footer-think')){
								dynamic_sidebar('footer-think');
							}
						?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid bg-footer-2 py-2">
			<div class="container">
				<div class="text-center">
					Tema desenvolvido por: <a href="https://pontocomdesenvolvimento.net" target="_blank">PontoCOM Desenvolvimento</a>
				</div>
			</div>
		</div>
</footer>
	<?php wp_footer(); ?>
</body>
</html>