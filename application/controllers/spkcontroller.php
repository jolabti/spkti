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



																								    public function uploadMahasiswa()
																								    {
																								        $config['upload_path']   = './uploads/';
																								        $config['allowed_types'] = '*';
																								        $config['max_size']      = '2048';
																								        $this->load->library('upload', $config);
																												//=============================================

																								        if (!$this->upload->do_upload()) {
																								            $data['error'] = $this->upload->display_errors();
																								            $this->load->view('upload', $data);
																								        } else {
																								            $file_data = $this->upload->data();
																								            $file_path = './uploads/' . $file_data['file_name'];
																								            $result = $this->csvreader->parse_file($file_path);
																								            foreach ($result as $row) {
																								                $val = array(
																								                    'id'   => $row['npm'],
																								                    'firstname'  => $row['nama'],
																								                    'lastname' => $row['kelas'],
																								                    'phone' => $row['phone'],
																								                    'email' => $row['email']
																								                );

																								                $this->dbmodel->insert_csv($val);
																								            }


																								            redirect('mahasiswa');
																								        }
																								    }




}


?>
