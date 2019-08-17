<?php

/**
 * Modelo para la tabla asignacion
 */
class Asignacion_model extends CI_Model
{
	
	/**
	*	Controctur del modelo
	*/
	function __construct()
	{
		parent::__construct();
	}

	/**
	*	Modelo para insertar asignaciones
	*	@param matricula
	*	@param clave
	*/
	public function insertar($matricula,$clave)
	{
		$existe = $this->existe($matricula,$clave);
		if(!$existe){

			if ($this->db->simple_query("INSERT INTO asignacion(matricula,clave_materia) VALUES ('$matricula',$clave)"))
			{
	        	return 0;
			}
			else
			{
				return 1;
	        	
			}		
		}else{
			return 2;
		}
		
	}

	/**
	*	Modelo para cargar las asignaciones
	*/
	public function cargar()
	{
		$datos = [];

		$query = $this->db->query("SELECT asignacion.id_asignacion,alumno.matricula, alumno.nombre, materia.clave_materia, materia.nombre As materia FROM alumno INNER JOIN asignacion ON alumno.matricula = asignacion.matricula INNER JOIN materia ON asignacion.clave_materia = materia.clave_materia");

		foreach ($query->result() as $row)
		{
			$datos[] = $row;
		}

		return $datos;
	}

	/**
	*	Modelo pa eliminar asignaciones
	*	@param matricula
	*	@param clave
	*/
	public function eliminar($matricula,$clave)
	{
		if ($this->db->simple_query("DELETE FROM asignacion WHERE matricula = '$matricula' AND clave_materia = $clave"))
		{
        	return 0;
		}
		else
		{
			return 1;
        	
		}	
	}

	/**
	*	Modelo para verificar si una asignacion existe
	*	@param matricula
	*	@param clave
	*/
	public function existe($matricula,$clave){

		$query = $this->db->query("SELECT matricula FROM asignacion WHERE matricula = '$matricula' AND clave_materia = $clave");
		return $query->num_rows();
		
	}
}

?>