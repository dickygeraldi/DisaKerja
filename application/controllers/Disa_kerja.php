<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disa_kerja extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Crud_disa_kerja');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index()
	{
		$data['lowongan'] = $this->Crud_disa_kerja->ambil_data('lowongan');
		$this->load->view('index',$data);
	}

	public function profil_sunting(){
		$data['profil'] = $this->Crud_disa_kerja->ambil('pengguna');
		$this->load->view('profil_sunting', $data);
	}

    public function update_password(){
    	$id = $this->input->post('email');
    	$password_lama = $this->input->post('password');
    	$password_baru = $this->input->post('password_baru');
    	$password_confirm = $this->input->post('password_confirm');

    	$cek = $this->Crud_disa_kerja->cek_password(md5($password_lama))->num_rows();
    	
    	if($cek > 0){
    			if(strcmp($password_baru, $password_confirm) == 0){
    				$data = array(
				            'password'=>md5($password_baru)
				        );      

				        $this->Crud_disa_kerja->update_password($data, $id);
				   		redirect('Disa_kerja/profil');
    			}else{
    				$this->load->helper('url');
		    		echo "<script type='text/javascript'>";
		            echo "alert ('Maaf Password baru dan confirm tidak match !');";
		            echo "window.location.href = '".site_url('Disa_kerja/profil_sunting_password')."';";
		            echo "</script>";
    			}
    	}else{
    		$this->load->helper('url');
    		echo "<script type='text/javascript'>";
            echo "alert ('Maaf Password lama anda salah !');";
            echo "window.location.href = '".site_url('Disa_kerja/profil_sunting_password')."';";
            echo "</script>";
    	}
    }
				
    public function update_profil(){
    	$id = $this->input->post('email');
    	$password = $this->input->post('password');
    	$no_hp = $this->input->post('no_hp');
    	$email_baru = $this->input->post('email_baru');

    	$cek = $this->Crud_disa_kerja->cek_password(md5($password))->num_rows();
    	$cek_2 = $this->Crud_disa_kerja->cek_data_no('pengguna', $no_hp)->num_rows();

    	if($cek > 0){
    		if(is_numeric($no_hp) == true && $cek_2 == 0){
	    		if(filter_var($email_baru, FILTER_VALIDATE_EMAIL)){
	    			$data = array(
		             'email'=>$this->input->post('email_baru'),
		             'nama'=>$this->input->post('nama'),
					 'alamat'=>$this->input->post('alamat'),
					 'no_hp'=>$this->input->post('no_hp'),
					 'linked'=>$this->input->post('linked'),
					 'facebook'=>$this->input->post('facebook'),
					 'tentang'=>$this->input->post('tentang')
		            );

		            $this->Crud_disa_kerja->profil($data, $id);
		   
		            redirect('Disa_kerja/profil');
	    		}else{
	    			$this->load->helper('url');
		    		echo "<script type='text/javascript'>";
		            echo "alert ('Email yang diinputkan tidak valid');";
		            echo "window.location.href = '".site_url('Disa_kerja/profil_sunting')."';";
		            echo "</script>";
	    		}	
	    	}else{
	    			$this->load->helper('url');
		    		echo "<script type='text/javascript'>";
		            echo "alert ('No hp haruslah angka atau nomor hp telah digunakan');";
		            echo "window.location.href = '".site_url('Disa_kerja/profil_sunting')."';";
		            echo "</script>";
	    	}  
		}else{
			$this->load->helper('url');
		    echo "<script type='text/javascript'>";
		    echo "alert ('Password yang anda inputkan salah');";
		    echo "window.location.href = '".site_url('Disa_kerja/profil_sunting')."';";
		    echo "</script>";
		}
    }

	public function profil_sunting_password(){
		$data['profil'] = $this->Crud_disa_kerja->ambil('pengguna');
		$this->load->view('profil_sunting_password', $data);
	}
	
	public function profil(){
	    $data['profil'] = $this->Crud_disa_kerja->ambil('pengguna');
		$this->load->view('profil', $data);
	}

	public function transaksi_masuk(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$password = $this->input->post('email');
		$alamat = $this->input->post('penerimaan');
		$p_baru = $alamat - 1;

            $data = array(
				'idlo' => $id,
				'email' => $password,
				'status' => 'Wawancara'
			);
			
			$this->Crud_disa_kerja->inputkan_transaksi($data,'transaksi_1');
			
			$datab = array(
				'penerimaan' => $p_baru
			);
			
			$where = array('idlo' => $id);
			
			$this->Crud_disa_kerja->update_data($where,$datab,'lowongan');
			
			redirect('Disa_kerja/tampil_sukses_regis2');
	}
	
	public function cetakpdf(){
		$data['profil'] = $this->Crud_disa_kerja->detail_transaksi_pengguna();
		$this->load->view('cetak_pdf',$data);
	}
	
	public function tampil_error_regis(){
		$this->load->view('error');
	}

	public function nampil_excel(){
		$this->load->view('excel');
	}
	
	public function tampil_sukses_regis(){
		$this->load->view('berhasil');
	}
	
	public function tampil_sukses_regis2(){
		$this->load->view('berhasil2');
	}

	public function tambah_data(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$password = $this->input->post('password');
		$password_confirm = $this->input->post('re_password');
		$email = $this->input->post('email');
		$no = $this->input->post('no');

		if(is_numeric($no) == true){
			$cek = $this->Crud_disa_kerja->cek_data_no("pengguna",$no)->num_rows();	
			$cek_2 = $this->Crud_disa_kerja->cek_data_email("pengguna",$email)->num_rows();
				if(strcmp($password, $password_confirm) == 0){	
					if(filter_var($email, FILTER_VALIDATE_EMAIL)){
						if($cek == 0 && $cek_2 == 0){
								$data = array(
									'email' => $email,
									'nama' => $nama,
									'alamat' => $alamat,
									'password' => md5($password),
									'no_hp' => $no
								);
								$this->Crud_disa_kerja->inputkan($data,'pengguna');
								redirect('Disa_kerja/tampil_sukses_regis');
							}else{
								$this->load->helper('url');
								echo "<script type='text/javascript'>";
								echo "alert ('Nomor Hp atau email telah digunakan');";
								echo "window.location.href = '".site_url('Disa_kerja/index')."';";
								echo "</script>";
							}
						}else{
							$this->load->helper('url');
							echo "<script type='text/javascript'>";
							echo "alert ('Email haruslah valid');";
							echo "window.location.href = '".site_url('Disa_kerja/index')."';";
							echo "</script>";
						}
					}else{
						$this->load->helper('url');
						echo "<script type='text/javascript'>";
						echo "alert ('Password confirm dan password input berbeda');";
						echo "window.location.href = '".site_url('Disa_kerja/index')."';";
						echo "</script>";
					}
		}else{
			$this->load->helper('url');
			echo "<script type='text/javascript'>";
			echo "alert ('Nomor Hp haruslah angka');";
			echo "window.location.href = '".site_url('Disa_kerja/index')."';";
			echo "</script>";
		}
	}

	public function cek_login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' => md5($password)
			);
		$cek = $this->Crud_disa_kerja->cek_login("pengguna",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'email' => $email,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect('Disa_kerja');

		}else{
			$this->load->helper('url');
			echo "<script type='text/javascript'>";
			echo "alert ('Maaf Username atau Password Anda Salah !');";
			echo "window.location.href = '".site_url('Disa_kerja/index')."';";
			echo "</script>";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('Disa_kerja');
	}
		
	public function json(){

			$c = array(
				"caption"=>"Status Pendaftar",
				"subCaption"=>"DisaKerja",
				"xAxisName"=>"Status",
				"yAxisName"=>"Jumlah",
			);

			$d = array();

			$query = $this->Crud_disa_kerja->ambil_data('transaksi_1');

			foreach($query->result() as $rcrd){
				$sql = "Select count(*) from transaksi_1";
				$query = $this->db->query($sql)->num_rows();
				array_push($d,array("label" => $rcrd->status, "value" => $query));
			}

			$gab = array("chart" => $c, "data" => $d);

			$j = json_encode($gab);
			echo $j;
		}
}
?>