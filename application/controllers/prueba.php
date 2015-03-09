<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prueba extends CI_Controller {
	
	function __construct(){
		parent::__construct();

		$this->load->model('m_congreso');
	}


	public function eventos()
	{
		
		$this->load->view('eventos');
	}

	public function altaEventos()
	{

		$datos['nombre']= $this->input->post('nom');
		$datos['fecha']=$this->input->post('fecha');
		$datos['lugar']=$this->input->post('lugar');
		$datos['hora']=$this->input->post('hora');
		$datos['costo']=$this->input->post('costo');

		$this->m_congreso->AgregaCongreso($datos);
		$this->eventos();
		/*echo "<pre>";
			print_r($_POST);
		echo "/<pre>";*/
	}

		public function ponentes()
	{
		
		$this->load->view('ponentes');
	}

}