<?php
class ReciveFrom extends CI_Controller
{
	function __construct()
{
	parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
	}
	public function recvied()
	{
		print_r($_FILES);
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';

		$this->load->library('upload');
		$this->upload->initialize($config);


		  if ( ! $this->upload->do_upload('picture'))
              {
									print_r($this->upload->data());
                   $data['error']= $this->upload->display_errors();
 										echo $data['error'];
              }
          else
              {
                 	$data['file'] =$this->upload->data();
									$this->load->model('Member');
									$this->Member->setName($this->input->post('name'));
									$this->Member->setPicture('upload/'.$data['file']['file_name']);
									$this->Member->add();
									echo 'b';
              }
			  $this->load->view('home', $data);
	}

	public function show()
	{
		$this->load->model('Member');
		$data['students']=$this->Member->findByAll();
		$this->load->view('show_student',$data);

	}

}
?>
