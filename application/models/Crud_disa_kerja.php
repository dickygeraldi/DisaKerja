<?php
	class Crud_disa_kerja extends CI_Model{

	    public function ambil_data($tbl){
	        return $this->db->get($tbl);
        }
		
		public function ambil_datas($tbl,$id){
	        return $this->db->get_where($tbl,$id);
        }

        public function update_password($data, $email){
			$this->db->where('email',$email);
            $this->db->update('pengguna',$data);
        }

        public function profil($data, $email){
			$this->db->where('email',$email);
            $this->db->update('pengguna',$data);
        }

        public function cek_password($pass){
        	$sql = "select * from pengguna where password ='".$pass."'";
        	return $this->db->query($sql);
        }

        public function cek_data_email($pass){
        	$sql = "select * from pengguna where email ='".$pass."'";
        	return $this->db->query($sql);
        }
		
		public function ambil($tbl){
			$email = $this->session->userdata('email');
			$sql = "select * from pengguna where email ='".$email."'";
			return $this->db->query($sql);
		}

		public function inputkan($data, $tbl){
			$this->db->insert($tbl,$data);
		}

		public function cek_data_no($tabel, $data){
			$sql = "select * from pengguna where no_hp ='".$data."'";
			return $this->db->query($sql);
		}
		
		public function inputkan_transaksi($data, $tbl){
			$this->db->insert($tbl,$data);
		}
		
		function cek_login($table,$where){
			return $this->db->get_where($table,$where);
		}
		
		function update_data($where,$data,$tbl){
			$this->db->where($where);
			$this->db->update($tbl,$data);
		}
		
		function detail_transaksi_pengguna(){
			$this->db->select('*');    
            $this->db->from('pengguna');
            $this->db->join('transaksi_1', 'pengguna.email = transaksi_1.email');
            $this->db->join('lowongan', 'transaksi_1.idlo = lowongan.idlo');
            $query = $this->db->get();
            return $query;
		}
	}
?>