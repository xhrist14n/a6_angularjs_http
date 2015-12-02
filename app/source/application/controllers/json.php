<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Json extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}
        public function data()
	{
            $nombres=[
                array(
                    'nombre'=>'juan',
                    'pais'=>'peru'
                ),
                array(
                    'nombre'=>'pedro',
                    'pais'=>'paraguay'
                ),
                array(
                    'nombre'=>'carlos',
                    'pais'=>'brasil'
                )
            ];
            $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($nombres));
	}
}

/* End of file json.php */
/* Location: ./application/controllers/json.php */