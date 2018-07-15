<?php
	
	class Admin extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('admin_m');
			$this->load->library('PHPExcel-1.8/Classes/PHPExcel');
		}

		function index(){
			$where = array('status_transaksi'=>3);
			$data1['total_transaksi'] = $this->admin_m->total_transaksi_sukses($where);
			$data2['total_member'] = $this->admin_m->total_member('member');
			$data3['total_kategori']=$this->admin_m->daftarKategori('kategori');
			$data4['total_produk']=$this->admin_m->daftarProduk('produk');

			$data = $data1 + $data2 + $data3 + $data4;
			$this->load->view('admin/indexadmin',$data);
		}

		function member(){
			$data['daftarmember']=$this->admin_m->daftarMember('member');
			//var_dump($data);
			$this->load->view('admin/adminmember_v',$data);
		}

		function kategori(){
			$data['daftarkategori']=$this->admin_m->daftarKategori('kategori');
			//var_dump($data);
			$this->load->view('admin/adminkategori_v',$data);
		}

		function tambahKategori(){
			$namaV = $this->input->post('n');

			$data=array(
				"nama_kategori"=> $namaV,
			);

			$this->admin_m->insertKategori('kategori',$data);
			redirect('Admin/kategori');
		}

		public function ubahKategori(){

			$nama = $this->input->post('n');
			$id = $this->input->post('i');

			echo $nama.' '.$id;

			$data=array(
				"nama_kategori"=> $nama
				);

			$this->db->where('id_kategori',$id);
			$this->db->update('kategori',$data);

			redirect('Admin/kategori');
		}

			public function hapusKategori($id_kategori){
			$where = array(
					'id_kategori'=>$id_kategori
					);

			$this->admin_m->deleteDataKategori('kategori', $where);

			redirect('Admin/kategori');

		}

		function produk(){
			$data1['daftarproduk']=$this->admin_m->daftarProduk('produk');
			$data2['daftarkategori']=$this->admin_m->daftarKategori('kategori');
			//var_dump($data);
			$data = $data1 + $data2;
			$this->load->view('admin/adminproduk_v',$data);
		}

		function tambahProduk(){
			$namaV = $this->input->post('n');
			$hargaV = $this->input->post('h');
			$stokV = $this->input->post('s');
			$deskripsiV = $this->input->post('d');
			// $gambarV = $this->input->post('g');
			$id_kategoriV = $this->input->post('ik');

			$this->load->helper(array('form', 'url'));

        	$config['upload_path']          = './assets/images/';
        	$config['allowed_types']        = 'jpg|png';
        	$config['max_size']             = 500;

			$this->load->library('upload', $config);
			$this->upload->do_upload('g');
			$hasil = $this->upload->data();
			//print_r($hasil);

			$data=array(
				"nama_produk"=> $namaV,
				"harga"=> $hargaV,
				"stok"=> $stokV,
				"deskripsi"=> $deskripsiV,
				"gambar"=> $hasil['file_name'],
				"id_kategori"=> $id_kategoriV
			);

			$this->admin_m->insertProduk('produk',$data);
			redirect('Admin/produk');
		}

		public function ubahProduk(){

			$id = $this->input->post('i');
			$nama = $this->input->post('n');
			$harga = $this->input->post('h');
			$stok = $this->input->post('s');
			$deskripsi = $this->input->post('d');
			$gambar = $this->input->post('g');
			$id_kategori = $this->input->post('ik');
			
			// $where = array(
			// 		'id_kategori'=>$id_kategori
			// 		);

			// $query = $this->admin_m->getDataKategori('kategori',$where);

			// $row = $query->row();

			echo $nama.' '.$id;

			$data=array(
				"nama_produk"=> $nama,
				"harga"=> $harga,
				"stok"=> $stok,
				"deskripsi"=> $deskripsi,
				"gambar"=> $gambar,
				"id_kategori"=> $id_kategori
				);

			$this->db->where('id_produk',$id);
			$this->db->update('produk',$data);

			redirect('Admin/produk');
		}

			public function hapusProduk($id_produk){
			$where = array(
					'id_produk'=>$id_produk
					);

			$this->admin_m->deleteDataProduk('produk', $where);

			redirect('Admin/produk');

		}

		function pembelian(){

			$where1 = array(
				'cart.status_cart'=>1
			);

			$where2 = array(
				'cart.status_cart'=>2
			);

			$data1['pembelian_aktif'] = $this->admin_m->pembelian_aktif($where1);

			$data2['pembelian_sukses'] = $this->admin_m->pembelian_sukses($where2);
			
			$data = $data1 + $data2;
			
			$this->load->view('admin/adminpembelian_v',$data);

		}

		function detail_pembelian($id_transaksi){

			//echo $id_transaksi;
			$where = array(
				'cart.status_cart'=>1,
				'cart.id_transaksi'=>$id_transaksi
			);

			$data1['pembelian_aktif'] = $this->admin_m->pembelian_aktif2($where);

			$this->load->view('admin/detailpembelian_v',$data1);

		}

		function verifikasi_bukti_pembayaran(){

			//$this->cart_m->tambah_cart($this->namaTabel, $id);

			$id_transaksi = $this->input->post('id_transaksi');
			$data = array('status_transaksi'=>'2');
			//echo $id_transaksi;

			$this->db->where('id_transaksi',$id_transaksi);
			$this->db->update('transaksi',$data);

			redirect(base_url("Admin/pembelian"));

		}

		public function json(){

			$c = array(
				"caption"=>"Daftar stok barang",
				"subCaption"=>"lapaKompi",
				"xAxisName"=>"Produk",
				"yAxisName"=>"Stok"
			);

			$d = array();

			$query = $this->admin_m->data_chart('produk');

			foreach($query->result() as $rcrd){

				array_push($d,array("label" => $rcrd->nama_produk, "value" => $rcrd->stok));

			}

			$gab = array("chart" => $c, "data" => $d);

			$j = json_encode($gab);
			echo $j;
		}

		public function excel_member(){

			$this->load->model('admin_m');

			// $data1['list_bulan'] = $this->admin_m->list_bulan_transaksi();

			// print_r($data1);

			$data = $this->admin_m->daftarMember('member');

			$arrData = (array) $data;
			$obj = new PHPExcel();
			$obj->setActiveSheetIndex(0);
			$baris = 3;

			$obj->getActiveSheet()->mergeCells('A1:C1');
			$obj->getActiveSheet()->setCellValue("A1","Daftar Member");
			$obj->getActiveSheet()->setCellValue("A2","No")->setCellValue("B2","Username")->setCellValue("C2","Nama");
			foreach($data->result() as $row) {
				$obj->getActiveSheet()->setCellValue("A$baris",$baris-2)->setCellValue("B$baris",$row->username)->setCellValue("C$baris",$row->nama);
				$baris++;
			}

			$penulis = PHPExcel_IOFactory::createWriter($obj,'Excel2007');
			$penulis->save("Daftar member.xlsx");
			$fileContent = file_get_contents("Daftar member.xlsx");
			$this->load->helper('download');
			force_download("Daftar member.xlsx",$fileContent);
		}

	}
?>