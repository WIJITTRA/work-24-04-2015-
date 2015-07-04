<?php
class Cart extends CI_Controller
{

	public function index()  //localhost/ci/index.php/cart
	{
		$scores = array(50,70,80,30,20,10)
		  for($i=1;$i<=1000;++i)
		  {
		  	foreach ($scores as $score ) 
		  	{
		  		if($score>=80)
		  		{
		  			echo $score." = A";
		  			echo '<br>'
		  		}
		  		else if($score>=70)
		  		{
		  			echo $score." = B";
		  			echo '<br>'
		  		}
		  		else if($score>=60)
		  		{
		  			echo $score." = C";
		  			echo '<br>'
		  		}
		  		else if($score>=50)
		  		{
		  			echo $score." = D";
		  			echo '<br>'
		  		}
		  		else 
		  		{
		  			echo $score." = B";
		  			echo '<br>'
		  		}
		  	}
		  }

		/*$this->load->library('cart');
		$data = array(
        'id'    => 1,
        'qty'   => 100,
        'price' => 50,
        'name'  => 'T-Shirt'       
		);

		$this->cart->insert($data);
        */
	}
}
?>