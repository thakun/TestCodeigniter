<?php

/**
 * Modelo para la tabla materia
 */
class Materia_model extends CI_Model
{
	
	/**
	*	Constructor del modelo
	*/
	function __construct()
	{
		parent::__construct();
	}

	/**
	*	Modelo para insertar materias
	*	@param clave
	*	@param nombre
	*/
	public function insertar($clave,$nombre)
	{
		$existe = $this->existe($nombre,$clave);
		if(!$existe){

			if ($this->db->simple_query("INSERT INTO materia(clave_materia,nombre) VALUES ($clave,'$nombre')"))
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
	*	Modelo para cargar las materias
	*/
	public function cargar()
	{
		$datos = [];

		$query = $this->db->query("SELECT * FROM materia");

		foreach ($query->result() as $row)
		{
			$datos[] = $row;
		}

		return $datos;
	}

	/**
	*	Modelo pa eliminar materias
	*	@param clave
	*/
	public function eliminar($clave)
	{
		//Se genero un trigger que elimina la asignacion donde la materia eliminada se encontraba			
		if ($this->db->simple_query("DELETE FROM materia WHERE clave_materia = $clave"))
		{
        	return 0;
		}
		else
		{
			return 1;
        	
		}	
	}

	/**
	*	Modelo para verificar si una materia existe
	*	@param nombre
	*	@param clave
	*/
	public function existe($nombre,$clave){

		$query = $this->db->query("SELECT nombre FROM materia WHERE nombre = '$nombre' OR clave_materia = $clave");
		return $query->num_rows();
		
	}




}

?>