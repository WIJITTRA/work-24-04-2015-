<?php
defined('BASEPATH')or exit('NO direct script access allowed');

class ExcelImport extends CI_Controller
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
		  $productName='';
		  $productReseller='';
		  $productSell='';

		  foreach ($cellIterator as $cell)
			  {
				if($i==1)
				  {
						$productCode = $cell->getValue();
				  }
				else if($i==2)
				  {
						$productName = $cell->getValue();
				  }
				else if($i==3)
				  {
						$productReseller = $cell->getValue();
				  }
				else if($i==4)
				  {
						$productSell = $cell->getValue();
				  }

				++$i;
			  }

			  $sql= sprintf(
				  'INSERT INTO products
					  (
						productCode,
						productName,
						productReseller,
						productSell
					  )
					  VALUES
					  (
						"%s",
						"%s",
						"%s",
						"%s"
					  )',
						$productCode,
						$productName,
						$productReseller,
						$productSell);

				$this->db->query($sql);
					  echo '<br>';

		}
	}

}
?>
