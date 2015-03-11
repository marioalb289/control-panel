<div class="container-fluid">
<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Nuevo Autor
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-edit"></i> Autores
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-8 col-lg-push-2">

            <form id="frmAutor" role="form" method="post" action="add_autor">

                <div class="form-group">
                    <label>Nombre</label>
                    <input class="form-control" name="data[nombre]" placeholder="Nombre">
                    <p class="help-block">Ejemplo: Mario</p>
                </div>

                <div class="form-group">
                    <label>Apellido Paterno</label>
                    <input class="form-control" name="data[apellido_paterno]" placeholder="Apellido Paterno">
                </div>

                <div class="form-group">
                    <label>Apellido Materno</label>
                    <input class="form-control" name="data[apellido_materno]" placeholder="Apellido Materno">
                </div>

                <div class="form-group">
                    <label>E-mail</label>
                    <input class="form-control" name="data[email]" placeholder="E-mail">
                </div>
                <div class="form-group">
                    <label>Fecha de Creacion</label>
                    <input type="date" class="form-control" name="data[created]" >
                </div>

                <a onclick="Autor.guardarAutor()" class="btn btn-default">Guardar</a>

                <!-- <button type="submit" class="btn btn-default">Guardar</button>
                <button type="reset" class="btn btn-default">Reset</button> -->

            </form>

        </div>
        
    </div>
    <!-- /.row -->
</div>