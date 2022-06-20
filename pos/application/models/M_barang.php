<?php
class M_barang extends CI_Model
{

	function hapus_barang($kode)
	{
		$hsl = $this->db->query("DELETE FROM tbl_barang where barang_id='$kode'");
		return $hsl;
	}

	function update_barang($kobar, $nabar, $kat, $satuan, $harpok, $harjul, $harjul_grosir, $stok, $min_stok)
	{
		$user_id = $this->session->userdata('idadmin');
		$hsl = $this->db->query("UPDATE tbl_barang SET barang_nama='$nabar',barang_satuan='$satuan',barang_harpok='$harpok',barang_harjul='$harjul',barang_harjul_grosir='$harjul_grosir',barang_stok='$stok',barang_min_stok='$min_stok',barang_tgl_last_update=NOW(),barang_kategori_id='$kat',barang_user_id='$user_id' WHERE barang_id='$kobar'");
		return $hsl;
	}

	function tampil_barang()
	{
		// $hsl = $this->db->query("SELECT id,title,price,stock,category,promo_price,name FROM products JOIN category ON products.category=category.id");
		// return $hsl;
		$this->db->select('*');
		$this->db->from('products a');
		$query = $this->db->get();
		// if ($query->num_rows() != 0) {
		return $query;
		// } else {
		//     return false;
		// }
	}

	function simpan_barang($kobar, $nabar, $kat, $satuan, $harpok, $harjul, $harjul_grosir, $stok, $min_stok)
	{
		$user_id = $this->session->userdata('idadmin');
		$hsl = $this->db->query("INSERT INTO tbl_barang (barang_id,barang_nama,barang_satuan,barang_harpok,barang_harjul,barang_harjul_grosir,barang_stok,barang_min_stok,barang_kategori_id,barang_user_id) VALUES ('$kobar','$nabar','$satuan','$harpok','$harjul','$harjul_grosir','$stok','$min_stok','$kat','$user_id')");
		return $hsl;
	}


	function get_barang($kobar)
	{
		$hsl = $this->db->query("SELECT * FROM products where id='$kobar'");
		return $hsl;
	}

	function get_kobar()
	{
		$q = $this->db->query("SELECT MAX(RIGHT(barang_id,6)) AS kd_max FROM tbl_barang");
		$kd = "";
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $k) {
				$tmp = ((int)$k->kd_max) + 1;
				$kd = sprintf("%06s", $tmp);
			}
		} else {
			$kd = "000001";
		}
		return "BR" . $kd;
	}
}
