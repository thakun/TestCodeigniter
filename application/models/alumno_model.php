<?php

/**
 * Modelo para la tabla alumno
 */
class Alumno_model extends CI_Model
{
	
	/**
	*	Controctur del modelo
	*/
	function __construct()
	{
		parent::__construct();
	}

	/**
	*	Modelo para insertar alumnos
	*	@param matricula
	*	@param nombre
	*	@param fecha_registro
	*/
	public function insertar($matricula,$nombre,$fecha_registro)
	{
		$existe = $this->existe($matricula);
		if(!$existe){

			if ($this->db->simple_query("INSERT INTO alumno(matricula,nombre,fecha_registro) VALUES ('$matricula','$nombre','$fecha_registro')"))
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
	*	Modelo para cargar los alumnos
	*/
	public function cargar()
	{
		$datos = [];

		$query = $this->db->query("SELECT * FROM alumno ORDER BY fecha_registro DESC");

		foreach ($query->result() as $row)
		{
			$datos[] = $row;
		}

		return $datos;
	}

	/**
	*	Modelo pa eliminar alumnos
	*	@param matricula
	*/
	public function eliminar($matricula)
	{
		//Se genero un trigger que elimina la asignacion donde el alumno eliminado se encontraba
		if ($this->db->simple_query("DELETE FROM alumno WHERE matricula = '$matricula'"))
		{
        	return 0;
		}
		else
		{
			return 1;
        	
		}	
	}

	/**
	*	Modelo para verificar si un alumno existe
	*	@param matricula
	*/
	public function existe($matricula){

		$query = $this->db->query("SELECT matricula FROM alumno WHERE matricula = '$matricula'");
		return $query->num_rows();
		
	}




}

?>