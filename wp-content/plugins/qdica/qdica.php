<?php

/*
Plugin Name: Qdica
Description: Plugin do qdica
Version: 1.0
Author: Raphael Freitas
Author URI: http://qdica.com
*/


if(!class_exists('Qdica')){
	Class Qdica {

		public function search_bar(){

			echo '<div class="row">'.
				 	'<div class="col-lg-12 no-padder">'.
				 		'<div class="busca_principal">'.
				 			'<input type="text" name="s" autocomplete="off" placeholder="Buscar produto, loja, marca..." class="search_input"/>'.
				 			'<a class="btn btn-primary"><i class="fa fa-search"></i></a>'.
				 		'</div>'.
		
				 	'</div>'.
				 '</div>';

		}

	}
}