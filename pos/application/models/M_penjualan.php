<?php
class M_penjualan extends CI_Model
{
	function textToSlug($text = '')
	{
		$text = trim($text);
		if (empty($text)) return '';
		$text = preg_replace("/[^a-zA-Z0-9\-\s]+/", "", $text);
		$text = strtolower(trim($text));
		$text = str_replace(' ', '-', $text);
		$text = $text_ori = preg_replace('/\-{2,}/', '-', $text);
		return $text;
	}

	function hapus_retur($kode)
	{
		$this->db->delete('return', array('id' => $kode));
		return TRUE;
	}

	function tampil_retur()
	{

		// $hsl = $this->db->query("SELECT retur_id,DATE_FORMAT(retur_tanggal,'%d/%m/%Y') AS retur_tanggal,retur_barang_id,retur_barang_nama,retur_barang_satuan,retur_harjul,retur_qty,(retur_harjul*retur_qty) AS retur_subtotal,retur_keterangan FROM tbl_retur ORDER BY retur_id DESC");
		return $this->db->get('return');
	}
	function tampil_penjualan()
	{
		return $this->db->get_where('invoice', array('type' => 'offline'));
	}
	function tampil_detail_penjualan($kode)
	{
		return $this->db->get_where('transaction', array('id_invoice' => $kode));
	}

	function simpan_retur($kobar, $nabar, $satuan, $harjul, $qty, $keterangan)
	{
		$hsl = $this->db->query("INSERT INTO tbl_retur(retur_barang_id,retur_barang_nama,retur_barang_satuan,retur_harjul,retur_qty,retur_keterangan) VALUES ('$kobar','$nabar','$satuan','$harjul','$qty','$keterangan')");
		return $hsl;
	}

	public function simpan_penjualan($nofak, $diskon, $total, $total_all, $jml_uang, $kembalian)
	{
		$toinvoice = array(
			'user' => 0,
			'invoice_code' => $nofak,
			'label' => '-',
			'name' => '-',
			'email' => '-',
			'telp' => 0,
			'province' => 0,
			'regency' => 0,
			'district' => '-',
			'village' => '-',
			'zipcode' => 0,
			'address' => '-',
			'courier' => '-',
			'courier_service' => '-',
			'ongkir' => 0,
			'total_price' => $total,
			'discount' => $diskon,
			'pay' => $jml_uang,
			'total_all' => $total_all,
			'changes' => $kembalian,
			'status' => 0,
			'resi' => 0,
			'pay_status' => 'terbayar',
			'link_pay' => '-',
			'type' => 'offline'


		);
		$this->db->insert('invoice', $toinvoice);

		foreach ($this->cart->contents() as $item) {

			$data = array(
				'id_invoice' 			=>	$nofak,
				'user' 					=> 0,
				'product_name'			=>	$item['name'],
				'price'					=>	$item['price'],
				'qty'					=>	$item['qty'],
				'slug'					=>	'-',
				'ket'					=>	'-',
				'img' 					=> '-'
			);

			$this->db->insert('transaction', $data);
		}
		return true;
	}
	public function kurang_stok()
	{
		foreach ($this->cart->contents() as $item) {
			$product = $this->db->get_where('products', array('id' => $item['id']))->row_array();
			$data = array(
				'stock' 			=>	$product['stock'] - $item['qty'],
			);
			$this->db->where('id', $item['id']);
			$this->db->update('products', $data);
			return TRUE;
		}
	}
	function get_nofak()
	{
		$kd = substr(rand(), 0, 5) . substr(time(), 7);;
		return $kd;
	}

	//=====================Penjualan grosir================================
	function simpan_penjualan_grosir($nofak, $total, $jml_uang, $kembalian)
	{
		$idadmin = $this->session->userdata('idadmin');
		$this->db->query("INSERT INTO tbl_jual (jual_nofak,jual_total,jual_jml_uang,jual_kembalian,jual_user_id,jual_keterangan) VALUES ('$nofak','$total','$jml_uang','$kembalian','$idadmin','grosir')");
		foreach ($this->cart->contents() as $item) {
			$data = array(
				'd_jual_nofak' 			=>	$nofak,
				'd_jual_barang_id'		=>	$item['id'],
				'd_jual_barang_nama'	=>	$item['name'],
				'd_jual_barang_satuan'	=>	$item['satuan'],
				'd_jual_barang_harpok'	=>	$item['harpok'],
				'd_jual_barang_harjul'	=>	$item['amount'],
				'd_jual_qty'			=>	$item['qty'],
				'd_jual_diskon'			=>	$item['disc'],
				'd_jual_total'			=>	$item['subtotal']
			);
			$this->db->insert('tbl_detail_jual', $data);
			$this->db->query("update tbl_barang set barang_stok=barang_stok-'$item[qty]' where barang_id='$item[id]'");
		}
		return true;
	}

	function cetak_faktur()
	{
		$nofak = $this->session->userdata('nofak');

		$hsl = $this->db->query("SELECT jual_nofak,DATE_FORMAT(jual_tanggal,'%d/%m/%Y %H:%i:%s') AS jual_tanggal,jual_total,jual_jml_uang,jual_kembalian,jual_keterangan,d_jual_barang_nama,d_jual_barang_satuan,d_jual_barang_harjul,d_jual_qty,d_jual_diskon,d_jual_total FROM tbl_jual JOIN tbl_detail_jual ON jual_nofak=d_jual_nofak WHERE jual_nofak='$nofak'");
		return $hsl;
	}

	function invoice()
	{
		$nofak = $this->session->userdata('nofak');
		$this->db->where('invoice_code', $nofak);

		return $this->db->get('invoice');
	}
	function transaction()
	{
		$nofak = $this->session->userdata('nofak');
		$this->db->where('id_invoice', $nofak);

		return $this->db->get('transaction');
	}
}
