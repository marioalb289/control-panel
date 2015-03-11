<div class="container-fluid">
<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Forms
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-edit"></i> Forms
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-8 col-lg-push-2">

            <form id="frmPublicacion" role="form" method="post" action="save_post">

                <div class="form-group">
                    <label>Titulo</label>
                    <input class="form-control" name="data[titulo]">
                    <p class="help-block">Ejemplo: Nuevo Post</p>
                </div>

                <div class="form-group">
                    <label>Autor</label>
                    <input class="form-control" name="data[autor]" placeholder="Nombre Autor">
                </div>

                <div class="form-group">
                    <label>Imagen</label>
                    <input class="form-control" name="data[imagen]" placeholder="Imagen">
                </div>

                <div class="form-group">
                    <label>Contenido de la Publicación</label>
                    <!-- <input > -->
                    <textarea class="form-control" name="data[contenido]" rows="3" placeholder="Contenido"></textarea>
                </div>

                <div class="form-group">
                    <label>Categoria</label>
                    <input class="form-control" name="data[categoria]" placeholder="Nombre Autor">
                </div>
                <div class="form-group">
                    <label>Fecha</label>
                    <input type="date" class="form-control" name="data[created]" >
                </div>

                <a onclick="Publicacion.guardar()" class="btn btn-default">Guardar</a>

                <!-- <button type="submit" class="btn btn-default">Guardar</button>
                <button type="reset" class="btn btn-default">Reset</button> -->

            </form>

        </div>
        
    </div>
    <!-- /.row -->
</div>