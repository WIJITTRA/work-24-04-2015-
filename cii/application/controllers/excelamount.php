<?php
defined('BASEPATH')or exit('NO direct script access allowed');

class ExcelAmount  extends CI_Controller
{
	public function index()
	{
		$this->load->library('PHPExcel');
		$this->load->database();

		$objReader = PHPExcel_IOFactory::createReader('Excel2007');
		$objReader->setReadDataOnly(true);

		$objPHPExcel = $objReader->load("xlsx/Product.xlsx");
		$objWorksheet = $objPHPExcel->getActiveSheet();

		$isFirstRow = true;

			echo '<table>' . "\n";
			foreach ($objWorksheet->getRowIterator() as $row) 
				{
					if($isFirstRow)
					{
						$isFirstRow = false;
						continue;
					}
				
		  $cellIterator = $row->getCellIterator();
		  $cellIterator->setIterateOnlyExistingCells(false);		// This loops all cells,
																	 // even if it is not set.
																	 // By default, only cells
																	 // that are set will be
																	 // iterated.
		  $i=1;
		  $productCode = '';
		  $productId='';
		  $productAmtNow='';
		  $productAmtBuy='';
		  $productAmtSell='';

		  foreach ($cellIterator as $cell)
			  {
				if($i==1)
				  {
					$productCode = $cell->getValue();
					$sql_command = sprintf('SELECT productId FROM products WHERE productCode= "%s" LIMIT 1',$productCode);
					$query = $this->db->query($sql_command);
					$productId = $query->row()->productId;
				  }

				 if($i==5)
				  {
					$productAmtNow = $cell->getValue();
					$sql = sprintf('INSERT INTO	productAmts
					(
						productId,
						productAmtStatus,
						productAmt
					)
					VALUES
					(
						"%s",
						"%s",
						"%s"
					)',
						$productId,
						'amountnow',
						$productAmtNow);

					 echo $sql.'<br>';
					 $this->db->query($sql);
					
				  }
				   if($i==6)
				  {
					$productAmtBuy = $cell->getValue();
					$sql = sprintf('INSERT INTO	productAmts
					(
						productId,
						productAmtStatus,
						productAmt
					)
					VALUES
					(
						"%s",
						"%s",
						"%s"
					)',
						$productId,
						'amountbuy',
						$productAmtBuy);

					 echo $sql.'<br>';
					 $this->db->query($sql);
					
				  }
				  if($i==7)
				  {
					$productAmtSell = $cell->getValue();
					$sql= sprintf('INSERT INTO	productAmts
					(
						productId,
						productAmtStatus,
						productAmt
					)
					VALUES
					(
						"%s",
						"%s",
						"%s"
					)',
						$productId,
						'amountsell',
						$productAmtSell);

					 echo $sql.'<br>';
					 $this->db->query($sql);
					
				  }

				++$i;
			  }  
		}		
	}

}
?>