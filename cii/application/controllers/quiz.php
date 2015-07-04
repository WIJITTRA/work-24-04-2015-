<?php
class Quiz extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
    $this->load->helper('url');
    $this->load->library('form_validation');
	}
  public function validate()
  {
    $this->form_validation->set_rules('user', 'USER', 'alpha|min_length[3]|max_length[8]');
    $this->form_validation->set_rules('email', 'E-mail', 'valid_email');

        if ($this->form_validation->run() == FALSE)
      {
        $this->load->view('quizvw');
      }
      else
      {
            echo 'ok';
      }
  }
  public function index()
  {
        $this->load->view('quizvw');
  }
}
?>
