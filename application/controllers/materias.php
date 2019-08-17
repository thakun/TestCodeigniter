<?php

/**
*
*  Controlador de las materias
*  @author Ing. Eduardo López Méndez
*  16/08/2019
*
*/
class Materias extends CI_Controller
{
 
   /**
   *
   *  Constructor del controlador
   *
   */  
	function __construct()
	{
		parent::__construct();
      //Cargar modelo de la table materia
		$this->load->model('materia_model');
	}

   /**
   *
   *  Carga de la plantilla y la vista a mostrar
   *
   */
   function index()
   {
		$datosLayout['menu'] = menu_ul('materia');
    	$datosLayout['cuerpo'] = $this->load->view('formMaterias',Array(),True);
		$datosLayout['scripts'] = '<script type="text/javascript" src="'.base_url("assets/js/materia.js").'" ></script>';
		$this->load->view('layout',$datosLayout);
   }

   /**
   *
   *  Cargar lista de materias
   *
   */
   function cargar(){
   		echo json_encode($this->materia_model->cargar());

   }

   /**
   *
   *  Insertar materias
   *
   */
   function insertar()
   {
   		$clave = $this->input->post('inpClave');
   		$nombre = $this->input->post('inpNombre');
   		
         if($clave > 9999)
            echo 1;
         else
   		    echo json_encode($this->materia_model->insertar($clave,$nombre));
   }

   /**
   *
   *  Eliminar materias
   *
   */
   function eliminar()
   {
   		$clave = $this->input->post('clave');
   		echo json_encode($this->materia_model->eliminar($clave));
   }


}

?>