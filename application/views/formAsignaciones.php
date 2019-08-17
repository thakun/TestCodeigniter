<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="row">
    <div class="col-12">
        <form>
            <div class="form-group">
                <label for="selectAlumno">Alumnos</label>
                <select id="cmbAlumnos" class="form-control form-control-lg" name="selectAlumno">
                    <option value="0">Selecciona un alumno...</option>
                </select>
            </div>
            <div class="form-group">
                <label for="selectMateria">Materias</label>
                <select id="cmbMaterias" class="form-control form-control-lg" name="selectMateria">
                    <option value="0">Selecciona una materia...</option>
                </select>
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
                <table id="tAsignaciones" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Matricula</th>
                            <th>Alumno</th>
                            <th>Materia</th>
                            <th>Clave</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
        
    </div>
    
</div>