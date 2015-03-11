<div class="container-fluid">
	<!-- Page Heading -->
	<div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header">
	            Lista de Autores Registrados
	        </h1>
	        <ol class="breadcrumb">
	            <li>
	                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
	            </li>
	            <li class="active">
	                <i class="fa fa-table"></i> Listado de Autores
	            </li>
	        </ol>
	    </div>
	</div>
	<div class="row">
		<div class="col-lg-12">
		    <h2>Lista de Autores</h2>
		    <div class="table-responsive">
		        <table class="table table-bordered table-hover table-striped">
		            <thead>
		                <tr>
		                    <th>Id</th>
		                    <th>Nombre</th>
		                    <th>Apellidos</th>
		                    <th>E-mail</th>
		                    <th>Fecha de Creación</th>
		                    <th>Publicación</th>
		                </tr>
		            </thead>
		            <tbody>
		            	<?php  foreach ($autores as $autor ):  ?>
		                <tr>
		                    <td><?php echo $autor['Autor']['id'] ?></td>
		                    <td><?php echo $autor['Autor']['nombre'] ?></td>
		                    <td><?php echo $autor['Autor']['apellido_paterno'] ?> <?php echo $autor['Autor']['apellido_materno'] ?></td>
		                    <td><?php echo $autor['Autor']['email'] ?></td>
		                    <td><?php echo $autor['Autor']['created'] ?></td>
		                    <td><?php for ($i=0; $i < sizeof($autor['Publicacion']) ; $i++) { 
		                    	echo $autor['Publicacion'][$i]['titulo'].'<br>';
		                    } ?>
		                    </td>
		                </tr>
		                <?php endforeach ?>	                    
		            </tbody>
		        </table>
		    </div>
		</div>
	</div>
	
</div>