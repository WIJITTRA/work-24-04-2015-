<?php
class StudentTest extends CI_Controller
{
	public function index()
	{
		$memberId =0;
		$this->load->library('unit_test');
		$this->load->model('Member');
		$this->Member->setName('backk');
		$this->Member->setLastName('doremon');
		$this->Member->setUserName('mon2535');
		$this->Member->setPassWord('abcd2535');
		$this->Member->setStatus('admin');
		$test=$this->Member->add();
		$memberId = $test ;
		$expencted_resut ='is_int';
		$this->unit->run($test,$expencted_resut,'UT-01 :ADD Member');
##################################################
    $this->Member->setName('วิจิตรา');
    $this->Member->setLastName('บุญปั๋น');
    $this->Member->setUserName('b552531004');
    $this->Member->setPassWord('ncu18112');
    $this->Member->setStatus('admin');
    $test=$this->Member->add();
    $memberId = $test ;
    $expencted_resut ='is_int';
    $this->unit->run($test,$expencted_resut,'UT-02 :ADD Thai Member');
##################################################
		$this->Member->setUserName('champ');
		$this->Member->setPassWord('09/06/2558');
		$test=$this->Member->login();
		$expencted_resut=true;
		$this->unit->run($test,$expencted_resut,'UT-03 :Check log in');
################################################
	$this->Member->setUserName('champ');
		$this->Member->setPassWord('55/55/5236');
		$test=$this->Member->login();
		$expencted_resut=false;
		$this->unit->run($test,$expencted_resut,'UT-04 :fail  password ');
################################################
	$this->Member->setId(1);
		$this->Member->setName('sandy');
		$this->Member->setLastName('bank');
		$test=$this->Member->update();
		$expencted_resut=true;
		$this->unit->run($test,$expencted_resut,'UT-05 :update name lastname');
################################################
	$this->Member->setId($memberId);
	$test=$this->Member->delete();
	$expencted_resut=true;
		$this->unit->run($test,$expencted_resut,'UT-06 :delete member');
echo $this->unit->report();
	}
}
?>
