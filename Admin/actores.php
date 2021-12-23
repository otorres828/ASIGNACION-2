
<?php include '../logica/logactor.php';?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    
    <title>Asignacion 2 - Actores</title>

</head>

<body>  
    <?php  include '../nabvar/nav.php'; ?>

    <div class="container">
        <div class="row">
        <div class="col card px-5">
                <div class="table-responsive py-4">
                    <table class="table table-flush" id="example">
                        <div  class = "mb-3" >
                            <div  class = "btn btn-primary "  data-bs-toggle="modal" data-bs-target="#crear" data-bs-whatever="@mdo" > Crear Actor </div>
                        </div>
                        <?php include '../modales/modalAgregarActor.php'; ?>
                        <thead class="thead-light">
                            <tr>
                                <th>id</th>
                                <th>Nombre</th>
                                <th>Nacionalidad</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($actores as $actor){ ?>
                                <tr>
                                    <td><?php echo $actor['idactor'] ?></td>
                                    <td><?php echo $actor['nombreactor'] ?></td>
                                    <td><?php echo $actor['nacionalidad'] ?></td>
                                    <td width="10px" class="d-flex">
                                        <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?php echo $actor['idactor']?>" data-bs-whatever="@mdo">Editar 📝</a>
                                        <form class="destroy"action="../logica/actorSave.php?idactor=<?php echo $actor['idactor']?>" method="POST">
                                            <button type="submit"class="btn btn-danger ml-1">Eliminar 🗑️</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php include '../modales/modalEditarActor.php'; ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php include '../logica/scrip.php';?>

</body>

