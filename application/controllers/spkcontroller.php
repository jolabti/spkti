<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Spkcontroller extends CI_Controller {

	public function __construct()
	 {
			 parent::__construct();
			 $this->load->model('dbmodel');
			 $this->load->library('CSVReader');

	 }



								public function index()
								{
									$this->load->view('home');
	 							}
								public function kriteria()
	 							{
	 							$this->load->view('criteria');
	 							}

	 							public function hasil()
	 							{

	 							$this->load->view('hasil');
	 							}

	 							public function uploadview()
	 							{

	 							$this->load->view('upload');

								}


					  public function uploadRekapitulasiPenilaian()
					 	  {

														$config['upload_path']   = './uploads/';
														$config['allowed_types'] = '*';
														$config['max_size']      = '2048';
														$this->load->library('upload', $config);																										//=============================================
														if (!$this->upload->do_upload()) {
																$data['error'] = $this->upload->display_errors();
																$this->load->view('upload', $data);
														} else {
																$file_data = $this->upload->data();
																$file_path = './uploads/' . $file_data['file_name'];
																$result = $this->csvreader->parse_file($file_path);
																foreach ($result as $row) {
																		$val = array(
																				'npm'   => $row['npm'],
																				'nama_calas'  => $row['nama_calas'],
																				'kelas' => $row['kelas'],
																				'nilai_teori' => $row['nilai_teori'],
																				'nilai_praktek' => $row['nilai_praktek'],
																				'nilai_wawancara' => $row['nilai_wawancara'],
																				'nilai_presentasi' => $row['nilai_presentasi']

																		);


																		$this->dbmodel->insert_csv($val);
																}


																redirect('spkcontroller/testHome');
														}
												}



   function c_olahbobotkriteria(){

			$data = $this->dbmodel->m_sumbobotkriteria();

			$budi = $this->dbmodel->m_databobotkriteria();
			//print_r($data[0]);
			$hasil = $data[0] ;
		  //echo $hasil->score ;
			foreach ($budi as $key ) {

						$tampil= $key->bobot/$hasil->score;

						echo $tampil;
			}
	 }

	 function get_data_penelitian(){
		 		$data['jumlahbobot'] = $this->dbmodel->m_sumbobotkriteria();
		 		$data['bobotCollect'] = $this->dbmodel->m_databobotkriteria(); //Bobot Kriteria
				$data['dataPenilaian']= $this->dbmodel->m_getDataPenilaian();
				$data['bobotPembagiKriteria'] = $this->dbmodel->m_databobotTeori();

				$data['presentasi'] = $this->dbmodel->m_dataKriteriaPresentasi();
				$data['wawancara'] = $this->dbmodel->m_dataKriteriaWawancara();
				$data['praktek'] = $this->dbmodel->m_dataKriteriaPraktek();
				$data['teori'] = $this->dbmodel->m_dataKriteriaTeori();
				//Bobot Global Criteria
				$this->load->view('upload',$data);

				 }


//================================================================================






//================================================================================
// Controller Untuk Memproses Algoritma Weighted Produk
	 function c_prosesWP(){
		//   $dataKriteriaTeori= $this->dbmodel->m_dataKriteriaTeori();
		//   $dataKriteriaPraktek= $this->dbmodel->m_dataKriteriaPraktek();
		//   $dataKriteriaWawancara= $this->dbmodel->m_dataKriteriaWawancara();
		//   $dataKriteriaPresentasi= $this->dbmodel->m_dataKriteriaPresentasi();
		//  $dataPenilaian= $this->dbmodel->m_getDataPenilaian();
		 //
		//  $dataPenilaianTeori= $this->dbmodel->m_getDataTeori();
		 //
		//  $dataPenilaianPraktek= $this->dbmodel->m_getDataPraktek();
		 //
		//  $dataPenilaianWawancara= $this->dbmodel->m_getDataWawancara();
		 //
		//  $dataPenilaianPresentasi= $this->dbmodel->m_getDataPresentasi();

		$data= $this->dbmodel->m_getDataPenilaian();

		 foreach ($variable as $key) {
		 	# code...
		 }


 }


 public function submit()
{
        $this->dbmodel->removeQuote();
				$this->testHome();
}


 public function testHome(){
	 $data['jumlahbobot'] = $this->dbmodel->m_sumbobotkriteria();
	 $data['bobotCollect'] = $this->dbmodel->m_databobotkriteria(); //Bobot Kriteria
	 $data['dataPenilaian']= $this->dbmodel->m_getDataPenilaian();
	 $data['bobotPembagiKriteria'] = $this->dbmodel->m_databobotTeori();

	 $data['presentasi'] = $this->dbmodel->m_dataKriteriaPresentasi();
	 $data['wawancara'] = $this->dbmodel->m_dataKriteriaWawancara();
	 $data['praktek'] = $this->dbmodel->m_dataKriteriaPraktek();
	 $data['teori'] = $this->dbmodel->m_dataKriteriaTeori();

	 $this->load->view('uploadview',  $data);
 }

 public function testHomeDataTable(){
	 $data['jumlahbobot'] = $this->dbmodel->m_sumbobotkriteria();
	 $data['bobotCollect'] = $this->dbmodel->m_databobotkriteria(); //Bobot Kriteria
	 $data['dataPenilaian']= $this->dbmodel->m_getDataPenilaian();
	 $data['bobotPembagiKriteria'] = $this->dbmodel->m_databobotTeori();

	 $data['presentasi'] = $this->dbmodel->m_dataKriteriaPresentasi();
	 $data['wawancara'] = $this->dbmodel->m_dataKriteriaWawancara();
	 $data['praktek'] = $this->dbmodel->m_dataKriteriaPraktek();
	 $data['teori'] = $this->dbmodel->m_dataKriteriaTeori();

	 $this->load->view('uploadviewdata',  $data);
 }

 public function deleteData(){

	 	$this->load->dbmodel();
		$this->dbmodel->m_kosongkanData();
		redirect('spkcontroller');

 }





}


?>
