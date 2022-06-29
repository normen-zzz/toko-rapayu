<?php
class Penjualan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('admin')) {
			$url = base_url();
			redirect($url);
		};
		$this->load->model('m_kategori');
		$this->load->model('m_barang');
		$this->load->model('m_suplier');
		$this->load->model('m_penjualan');
	}
	function index()
	{
		$data['data'] = $this->m_barang->tampil_barang();
		$this->load->view('admin/v_penjualan', $data);
	}

	public function history()
	{
		$data['history'] = $this->m_penjualan->tampil_penjualan();
		$this->load->view('admin/v_history_penjualan', $data);
	}
	public function detail_history($kode)
	{
		$data['history'] = $this->m_penjualan->tampil_detail_penjualan($kode);
		$this->load->view('admin/v_detail_history_penjualan', $data);
	}
	function get_barang()
	{

		$kobar = $this->input->post('kode_brg');
		$x['brg'] = $this->m_barang->get_barang($kobar);
		$this->load->view('admin/v_detail_barang_jual', $x);
	}
	function add_to_cart()
	{

		$kobar = $this->input->post('kode_brg');
		$produk = $this->m_barang->get_barang($kobar);
		$i = $produk->row_array();
		$data = array(
			'id'       => $i['id'],
			'name'     => $i['title'],
			'price'    => str_replace(",", "", $this->input->post('harjul')) - $this->input->post('diskon'),
			'qty'      => $this->input->post('qty'),
			'amount'	  => str_replace(",", "", $this->input->post('harjul'))
		);
		if (!empty($this->cart->total_items())) {
			foreach ($this->cart->contents() as $items) {
				$id = $items['id'];
				$qtylama = $items['qty'];
				$rowid = $items['rowid'];
				$kobar = $this->input->post('kode_brg');
				$qty = $this->input->post('qty');
				if ($id == $kobar) {
					$up = array(
						'rowid' => $rowid,
						'qty' => $qtylama + $qty
					);
					$this->cart->update($up);
				} else {
					$this->cart->insert($data);
				}
			}
		} else {
			$this->cart->insert($data);
		}

		redirect('admin/penjualan');
	}
	function remove()
	{
		$row_id = $this->uri->segment(4);
		$this->cart->update(array(
			'rowid'      => $row_id,
			'qty'     => 0
		));
		redirect('admin/penjualan');
	}
	function simpan_penjualan()
	{
		$total = $this->input->post('total');
		$total_all = str_replace(",", "", $this->input->post('total_all'));
		$jml_uang = str_replace(",", "", $this->input->post('jml_uang'));
		$diskon = str_replace(",", "", $this->input->post('diskon'));
		$kembalian = str_replace(",", "", $this->input->post('kembalian'));

		if (!empty($total) && !empty($jml_uang)) {
			if ($jml_uang < $total_all) {
				echo $this->session->set_flashdata('msg', '<label class="label label-danger">Jumlah Uang yang anda masukan Kurang</label>');
				redirect('admin/penjualan');
			} else {
				$nofak = $this->m_penjualan->get_nofak();
				$this->session->set_userdata('nofak', $nofak);
				$order_proses = $this->m_penjualan->simpan_penjualan($nofak, $diskon, $total, $total_all, $jml_uang, $kembalian);
				if ($order_proses) {
					if ($this->m_penjualan->kurang_stok()) {
						$this->cart->destroy();

						$this->load->view('admin/alert/alert_sukses');
					}
				} else {

					redirect('admin/penjualan');
				}
			}
		} else {

			// echo $this->session->set_flashdata('msg', '<label class="label label-danger">Penjualan Gagal di Simpan, Mohon Periksa Kembali Semua Inputan Anda!</label>');
			// redirect('admin/penjualan');
		}
	}

	function cetak_faktur()
	{
		// var_dump('test');
		$x['invoice'] = $this->m_penjualan->invoice();
		$x['transaction'] = $this->m_penjualan->transaction();

		$this->load->view('admin/laporan/v_faktur', $x);
		$this->session->unset_userdata('nofak');
	}
}
