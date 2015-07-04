<?php
class ReciveFrom extends CI_Controller
{
	function __construct()
{
	parent::__construct();
		$this->load->helper('url');

	}
	public function recvied()
	{
		$data['error']='';
		$data['file']['file_name']='';

		print_r($_FILES);
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'xls|xlsx';

		$this->load->library('upload');
		$this->upload->initialize($config);


		  if ( ! $this->upload->do_upload('picture'))
              {

                   $data['error']= $this->upload->display_errors();
 										echo $data['error'];
              }
          else
              {
									$this->load->library('PHPExcel');
									$this->load->database();

									$objReader = PHPExcel_IOFactory::createReader('Excel2007');
									$objReader->setReadDataOnly(true);
									$data['file'] = $this->upload->data();
									$objPHPExcel = $objReader->load('uploads/'.$data['file']['file_name']);
									$objWorksheet = $objPHPExcel->getActiveSheet();

									$r=1;
									foreach ($objWorksheet->getRowIterator() as $row)
									{
												if($r==1)
												{
													++$r;
													continue;
												}
													$cellIterator = $row->getCellIterator();
													$cellIterator->setIterateOnlyExistingCells(false); // This loops all cells,
																																			// even if it is not set.
																																			// By default, only cells
																																			// that are set will be
													$i=1;
													$prodouctCode='';
													$prodouctName='';
													$prodouctReseller='';
													$prodouctSell='';                                                // iterated.
											foreach ($cellIterator as $cell)
												{
													if($i==1)
													{
														$prodouctCode =$cell->getValue();
													}

													else if($i==2)
													{
														$prodouctName =$cell->getValue();
													}
													else if($i==3)
													{
														$prodouctReseller =$cell->getValue();
													}
													else if($i==4)
													{
														$prodouctSell =$cell->getValue();
													}

													++$i;


												}
												$sql = sprintf('INSERT INTO prodoucts
												(
													prodouctCode,
													prodouctName,
													prodouctReseller,
													prodouctSell
												)
												VALUES
												(
													"%s",
													"%s",
													"%s",
													"%s"

												)',
													$prodouctCode,
													$prodouctName,
													$prodouctReseller,
													$prodouctSell
												);
													$this->db->query($sql);

              }
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
