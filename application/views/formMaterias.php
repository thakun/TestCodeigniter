<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="row">
    <div class="col-12">
        <form>
            <div class="form-group">
                <label for="inpClave">Clave</label>
                <input type="text" name="inpClave" placeholder="Clave" required>
            </div>
            <div class="form-group">
                <label for="inpNombre">Nombre</label>
                <input type="text" name="inpNombre" placeholder="Nombre" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>        
    </div>
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <input type="text" id="buscar" placeholder="Buscar...">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table id="tMaterias" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Clave</th>
                            <th>Nombre</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
        
    </div>
    
</div>