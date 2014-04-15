<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>


		</div><!-- .container -->

		<div id="footerline"></div>

		<footer id="footer">

			<div id="logofooter"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-footer.png"></div>
		    
		    <div id="sitemap">
		    	<div class="mappage">
		        	<div class="maptitle">SERVIÇOS</div>
		            <a href="#" class="maplink">Sobre o QDica</a>
		            <a href="#" class="maplink">Como contratar</a>
		            <a href="#" class="maplink">Termos de Uso</a>            
		        </div>
		        
		        <div class="mappage">
		        	<div class="maptitle">DICAS</div>
		            <a href="#" class="maplink">Dicas QDica</a>
		            <a href="#" class="maplink">Deixe sua dica</a>
		        </div>
		        
		        <div class="mappage">
		        	<div class="maptitle">PESQUISA</div>
		            <a href="#" class="maplink">Pesquisa de Preços</a>
		            <a href="#" class="maplink">Categorias</a>
		        </div>
		        
		        <div class="mappage">
		        	<div class="maptitle">Categorias</div>
		            <a href="#" class="maplink">Automoveis</a>
		            <a href="#" class="maplink">Informatica</a>
		            <a href="#" class="maplink">Mostrar todas</a>
		            <a href="#" class="maplink">Automoveis</a>
		            <a href="#" class="maplink">Informatica</a>
		            <a href="#" class="maplink">Mostrar todas</a>
		        </div>
		        
		        <div class="mappage">
		        	<div class="maptitle">Cadastro</div>
		            <a href="#" class="maplink">Cadastro de Usuário</a>
		            <a href="#" class="maplink">Cadastro de Vendedor</a>
		        </div>  
		        
		        <div class="mappage">
		        	<div class="maptitle">Login</div>
		            <a href="#" class="maplink">Fazer Login</a>
		            <a href="#" class="maplink">Esqueci minha senha</a>
		        </div>                                    
		    
		    </div>
		    <div id="copyrights">All CopyRights © qdica.com - <?php echo date( 'Y' ); ?></div>	

		</footer>

	<!-- #footer -->
	

	<?php wp_footer(); ?>
</body>
</html>
