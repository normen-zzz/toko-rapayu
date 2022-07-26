<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("Testi_model");
    $this->load->model('Categories_model');
    $this->load->model('Products_model');
    $this->load->model('Order_model');
    $this->load->model('Promo_model');
    $this->load->model('Settings_model');
  }

  public function index()
  {
    $data['title'] = 'Testimoni - ' . $this->Settings_model->general()["app_name"];
    $data['css'] = 'products';
    $data['responsive'] = 'product-responsive';
    $data['testi'] = $this->Testi_model->getTesti();
    $data['cart'] = $this->Order_model->getCartUser();
    $data['populer'] = $this->Products_model->getBestProductsLimit();
    $data['setting'] = $this->Settings_model->getSetting();
    $data['user'] =  $this->db->get_where('user', array('id' => $this->session->userdata('id')))->row_array();
    // $this->load->view('templates/header', $data);
    // $this->load->view('templates/navbar');
    $this->load->view('page/testi2', $data);
    // $this->load->view('templates/footerv2');
  }
}
