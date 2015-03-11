<div class="container-fluid">
	<!-- Page Heading -->
	<div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header">
	            Lista de Post Creados
	        </h1>
	        <ol class="breadcrumb">
	            <li>
	                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
	            </li>
	            <li class="active">
	                <i class="fa fa-table"></i> Listado de Post
	            </li>
	        </ol>
	    </div>
	</div>
	<div class="row">
		<div class="col-lg-12">
		    <h2>Lista de Posts</h2>
		    <div class="table-responsive">
		        <table class="table table-bordered table-hover table-striped">
		            <thead>
		                <tr>
		                    <th>Id</th>
		                    <th>Titulo</th>
		                    <th>Autor</th>
		                    <th>Categoria</th>
		                    <th>Fecha de Creación</th>
		                </tr>
		            </thead>
		            <tbody>
		            	<?php  foreach ($publicaciones as $publicacion ):  ?>
		                <tr>
		                    <td><?php echo $publicacion['Publicacion']['id'] ?></td>
		                    <td><?php echo $publicacion['Publicacion']['titulo'] ?></td>
		                    <td><?php echo $publicacion['Autor']['nombre'] ?> <?php echo $publicacion['Autor']['apellido_paterno'] ?> </td>
		                    <td><?php echo $publicacion['Publicacion']['categoria'] ?></td>
		                    <td><?php echo $publicacion['Publicacion']['created'] ?></td>
		                </tr>
		                <?php endforeach ?>	                    
		            </tbody>
		        </table>
		    </div>
		</div>
	</div>
	
</div>