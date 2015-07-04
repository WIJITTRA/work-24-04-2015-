<?php
class Hunsaregister extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
    $this->load->helper('url');
    $this->load->library('form_validation');
	}
 public function validate()
  {

    $this->form_validation->set_rules('username','ชื่อสมาชิก', 'required|alpha|min_length[4]|max_length[15]');
  /*  $this->form_validation->set_rules('passOne', 'รหัสผ่าน', 'required|min_length[4]|max_length[15]');
    $this->form_validation->set_rules('passTwo', 'รหัสผ่าน', 'required|matches[passOne]');
    $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
    $this->form_validation->set_rules('firstName','ชื่อ', 'min_length[1]');
    $this->form_validation->set_rules('lastName','นามสกุล', 'min_length[1]');
    $this->form_validation->set_rules('nickName','ชื่อเล่น', 'min_length[1]');
    $this->form_validation->set_rules('idCard','รหัสบัตรประชาชน', 'numeric|exact_length[13]');
    $this->form_validation->set_rules('address','ที่อยู่', 'min_length[1]');
    $this->form_validation->set_rules('townShip','ตำบล / แขวง', 'min_length[1]');
    $this->form_validation->set_rules('city','อำเภอ / เขต', 'min_length[1]');
    $this->form_validation->set_rules('postCode','รหัสไปรษณีย์', 'numeric|exact_length[5]');
    $this->form_validation->set_rules('telephone','หมายเลขโทรศัพท์', 'numeric|exact_length[8]');
    $this->form_validation->set_rules('phone','โทรศัพท์มือถือ', 'numeric|exact_length[10]');*/

    if ($this->form_validation->run() == FALSE)
    {
        $this->load->view('hunsa_vw');
    }
    else
    {
       	echo 'ok';

				$this->load->model('hunsa_md');
				$this->Hunsa_md->setUsername($this->input->post('username'));
				$this->Hunsa_md->add();

			}
		}
		  public function index()
		  {
		      $this->load->view('hunsa_vw');
			}

}
?>
