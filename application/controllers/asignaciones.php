<?php

/**
*
*  Controlador de las asignaciones
*  @author Ing. Eduardo López Méndez
*  16/08/2019
*
*/
class Asignaciones extends CI_Controller
{

   /**
   *
   *  Constructor del controlador
   *
   */
	function __construct()
	{
		parent::__construct();
      //Carga de los modelos
      //Carga del modelo de la tabla asignacion
		$this->load->model('asignacion_model');
      //Carga del modelo de la tabla materia
		$this->load->model('materia_model');
      //Carga del modelo de la tabla alumno
		$this->load->model('alumno_model');
	}
   
   /**
   *
   *  Carga de la plantilla y la vista a mostrar
   *
   */
   function index()
   {
   	$datosLayout['menu'] = menu_ul('asignacion');
    	$datosLayout['cuerpo'] = $this->load->view('formAsignaciones',Array(),True);
		$datosLayout['scripts'] = '<script type="text/javascript" src="'.base_url("assets/js/asignacion.js").'" ></script>';
		$this->load->view('layout',$datosLayout);
   }

   /**
   *
   *  Cargar lista de asignaciones
   *
   */
   function cargar(){
   		echo json_encode($this->asignacion_model->cargar());

   }

   /**
   *
   *  Insertar asignaciones
   *
   */
   function insertar()
   {
   		$matricula = $this->input->post('selectAlumno');
   		$clave = $this->input->post('selectMateria');
   		
   		echo json_encode($this->asignacion_model->insertar($matricula,$clave));
   }

   /**
   *
   *  Eliminar asignaciones
   *
   */
   function eliminar()
   {
   		$matricula = $this->input->post('matricula');
   		$clave = $this->input->post('clave');

   		echo json_encode($this->asignacion_model->eliminar($matricula,$clave));
   }

   /**
   *
   *  Cargar informacion de las listas con alumnos y materias
   *
   */
   function cargar_dropdowns()
   {

		$alumnos = $this->alumno_model->cargar();
		$materias = $this->materia_model->cargar();

		echo json_encode(Array($alumnos,$materias));
   }
}

?>