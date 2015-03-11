<?php
	class AdministradorController extends AppController{
		var $name = "administrador";
		var $uses = array('Publicacion','Autor','Receta');
		var $layout = 'administrador';
		function index (){
			// // $this->layout = 'administrador';
			// $arrayPublicaciones = $this->Publicacion->find('all');
			// // pr(($arrayPublicaciones));
			// $this->set('publicaciones',$arrayPublicaciones);	
		}
		function chart(){
			// $this->layout = 'administrador';
			
		}
		function post(){
			// $this->layout = 'administrador';

		}
		function save_post(){
			// pr($this->data);
			// exit;

			$this->Publicacion->create();
			if( $this->Publicacion->save($this->data)){
				echo json_encode(array('success' => true));
			}else{
				echo json_encode(array('success' => false));
			}

		}
		function list_post(){
			// $this->layout = 'administrador';
			$arrayPublicaciones = $this->Publicacion->find('all');
			// pr(($arrayPublicaciones));
			$this->set('publicaciones',$arrayPublicaciones);	

		}
		function autor(){

		}
		function list_autor(){
			// $this->layout = 'administrador';
			$arrayAutores = $this->Autor->find('all');
			// pr(($arrayPublicaciones));
			$this->set('autores',$arrayAutores);
		}

		function add_autor(){
			$this->Autor->create();
			if( $this->Autor->save($this->data)){
				echo json_encode(array('success' => true));
			}else{
				echo json_encode(array('success' => false));
			}

		}

		function recetas(){
			$arrRecetas = $this->Receta->find('all', array(
				'conditions' => array(
						'Receta.titulo' => 'Pizza'
					)
				));
			pr($arrRecetas);
			exit;
		}

		

	}

 ?>