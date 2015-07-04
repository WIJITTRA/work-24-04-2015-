<?php
class ViewCart extends CI_Controller{

	public function index() 
	{
		$this->load->library('cart');

		print_r($this->cart->contents());
	}
}
?>