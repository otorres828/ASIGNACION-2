<div class="modal fade" id="edit<?php echo $actor['idactor']?>" tabindex="-1" aria-labelledby="edit<?php $actor['idactor']?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Actualizar Actor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                    <form action="../logica/actorSave.php" class="editar" method="POST" enctype="multipart/form-data">                                                       
                            <input type="text"  name="idactor" class="form-control" value="<?php echo $actor['idactor']?>" hidden>
                            <div class="form-group">
                                <label >Nombre del Actor</label>
                                <input type="text"  name="nombreactor" class="form-control" value="<?php echo $actor['nombreactor']?>">
                            </div>
                            <div class="form-group">
                                <label >Nacionalidad</label>
                                <input type="text"  name="nacionalidad" class="form-control" value="<?php echo $actor['nacionalidad']?>">
                            </div>
                            <div class="d-flex justify-content-end align-items-baseline">
                                <button name="modificarActor" type="submit" class="btn btn-success" required>Actualizar</button>
                                <button type="button" class=" ml-1 btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </form>
                    </div>
                </div>         
            </div>
        </div>
    </div>
</div>