<div class="row">
    <div class="col-12">
        <form>
            <div class="form-group">
                <label for="inpMatricula">Matricula</label>
                <input class="form-control form-control-lg" type="text" name="inpMatricula" placeholder="Matricula" required>
            </div>
            <div class="form-group">
                <label for="inpNombre">Nombre</label>
                <input class="form-control form-control-lg" type="text" name="inpNombre" placeholder="Nombre" required>
            </div>
            <div class="form-group">
                <label for="inpFecha">Fecha de registro</label>
                <input class="form-control form-control-lg" id="fecha" type="text" name="inpFecha" placeholder="Fecha de registro" readonly>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>        
    </div>
    
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <input class="form-control form-control-lg" type="text" id="buscar" placeholder="Buscar...">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table id="tAlumnos" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Matricula</th>
                            <th>Nombre</th>
                            <th>Fecha de registro</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>