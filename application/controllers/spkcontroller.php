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


																redirect('spkcontroller');
														}
												}



   function c_olahbobotkriteria(){

			$data= $this->dbmodel->m_sumbobotkriteria();

			$bobotCollect = $this->dbmodel->m_databobotkriteria();
			//print_r($data[0]);
			$hasil = $data[0] ;
		  //echo $hasil->score ;
			foreach ($bobotCollect as $key ) {

						$tampil= $key->bobot/$hasil->score;

						echo $tampil;
			}

	 }

//================================================================================






//================================================================================
// Controller Untuk Memproses Algoritma Weighted Produk
	 function c_prosesWP(){


		  $dataKriteriaTeori= $this->dbmodel->m_dataKriteriaTeori();
		  $dataKriteriaPraktek= $this->dbmodel->m_dataKriteriaPraktek();
		  $dataKriteriaWawancara= $this->dbmodel->m_dataKriteriaWawancara();
		  $dataKriteriaPresentasi= $this->dbmodel->m_dataKriteriaPresentasi();

 		 //---------------------------------------------------------

		 $dataPenilaian= $this->dbmodel->m_getDataPenilaian();
		// print_r($dataPenilaian);
		 $dataPenilaianTeori= $this->dbmodel->m_getDataTeori();
		// print_r($dataPenilaianTeori);
		 $dataPenilaianPraktek= $this->dbmodel->m_getDataPraktek();
		// print_r($dataPenilaianPraktek);
		 $dataPenilaianWawancara= $this->dbmodel->m_getDataWawancara();
		// print_r($dataPenilaianWawancara);
		 $dataPenilaianPresentasi= $this->dbmodel->m_getDataPresentasi();
		// print_r($dataPenilaianPresentasi);


		foreach ($dataPenilaian as $dPn) {
			# iterasi untuk memanggil isi database dan diperbandingkan
		  if ($dPn->nilai_teori < 51){

									$anlisTeori= 0.25;

			}elseif ($dPn->nilai_teori > 50 && $dPn->nilai_teori < 71) {

									$anlisTeori= 0.50;

			}

		elseif ($dPn->nilai_teori > 71 && $dPn->nilai_teori < 81) {

									$anlisTeori= 0.75;

			}

		elseif ($dPn->nilai_teori > 80 && $dPn->nilai_teori <= 100) {

									$anlisTeori= 1.00;

			}


			if ($dPn->nilai_praktek < 51){

									$anlisPraktek= 0.25;

			}elseif ($dPn->nilai_praktek > 50 && $dPn->nilai_praktek < 71) {

									$anlisPraktek= 0.50;

			}

		elseif ($dPn->nilai_praktek > 71 && $dPn->nilai_praktek < 81) {

									$anlisPraktek= 0.75;

			}

		elseif ($dPn->nilai_praktek > 80 && $dPn->nilai_praktek <= 100) {

									$anlisPraktek= 1.00;

			}

			echo "NILAI Teori";
			echo $dPn->nilai_teori;
					echo "       ";
			echo "===>";
			echo "       ";
			 echo $anlisTeori;


			 echo "NILAI PRAKTEK";
			 echo $dPn->nilai_praktek;
 					echo "       ";
 			echo "===>";
 			echo "       ";
 			 echo $anlisPraktek;


	 }
 }






}


?>
