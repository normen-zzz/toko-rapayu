<?php
class Retur extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('admin') != TRUE) {
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
		$data['retur'] = $this->m_penjualan->tampil_retur();
		$this->load->view('admin/v_retur', $data);
	}
	function get_barang()
	{
		$kobar = $this->input->post('kode_brg');
		$x['brg'] = $this->m_barang->get_barang($kobar);
		$this->load->view('admin/v_detail_barang_retur', $x);
	}

	function simpan_retur()
	{
		$kobar = $this->input->post('kode_brg');
		$nabar = $this->input->post('nabar');
		$harjul = str_replace(",", "", $this->input->post('harjul'));
		$qty = $this->input->post('qty');
		$keterangan = $this->input->post('keterangan');
		// $this->m_penjualan->simpan_retur($kobar, $nabar, $harjul, $qty, $keterangan);
		$data = array(
			'id_product' => $kobar,
			'name' => $nabar,
			'price' => $harjul,
			'qty' => $qty,
			'subtotal' => $harjul * $qty,
			'ket' => $keterangan
		);
		$this->db->insert('return', $data);
		redirect('admin/retur');
	}

	function hapus_retur()
	{
		$kode = $this->uri->segment(4);
		if ($this->m_penjualan->hapus_retur($kode)) {
			redirect('admin/retur');
		}
	}
}
