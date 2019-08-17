<?php

/**
*
*  Controlador del alumno
*  @author Ing. Eduardo López Méndez
*  16/08/2019
*
*/
class Alumnos extends CI_Controller
{

   /**
   *
   *  Constructor del controlador
   *
   */
	function __construct()
	{
		parent::__construct();
      //cargar el modelo de la tabla alumno
		$this->load->model('alumno_model');
	}
   
   /**
   *
   *  Carga de la plantilla y la vista a mostrar
   *
   */
   function index()
   {
   	$datosLayout['menu'] = menu_ul('alumnos');
    	$datosLayout['cuerpo'] = $this->load->view('formAlumnos',Array(),True);
		$datosLayout['scripts'] = '<script type="text/javascript" src="'.base_url("assets/js/alumno.js").'" ></script>';
		$this->load->view('layout',$datosLayout);
   }

   /**
   *
   *  Cargar lista de alumnos 
   *
   */
   function cargar(){
   		echo json_encode($this->alumno_model->cargar());

   }

   /**
   *
   *  Insertar alumnos
   *
   */
   function insertar()
   {
   		$matricula = $this->input->post('inpMatricula');
   		$nombre = $this->input->post('inpNombre');
   		$fecha = $this->input->post('inpFecha');

         if(strlen($matricula) > 4)
            echo 1;
         else
      		echo json_encode($this->alumno_model->insertar($matricula,$nombre,$fecha));
   }

   /**
   *
   *  Eliminar alumnos
   *
   */
   function eliminar()
   {
   		$matricula = $this->input->post('matricula');
   		echo json_encode($this->alumno_model->eliminar($matricula));
   }


}

?>