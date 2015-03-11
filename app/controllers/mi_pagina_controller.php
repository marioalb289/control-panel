<?php
	class MiPaginaController extends AppController{
		var $uses = array('Publicacion');
		function index (){
			$this->layout = 'default';
			$arrayPublicaciones = $this->Publicacion->find('all');
			// pr(($arrayPublicaciones));
			$this->set('publicaciones',$arrayPublicaciones);	
		}
		

	}

 ?>