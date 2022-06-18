<?php
class Administrator extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mlogin');
    }
    function index()
    {
        $x['judul'] = "Silahkan Masuk..!";
        $this->load->helper('cookie');
        if ($this->session->userdata('admin')) {
            redirect(base_url() . 'welcome');
        } else {
            $cookie = get_cookie('djehbicd');
            if ($cookie != NULL) {
                $getCookie = $this->db->get_where('admin', ['cookie' => $cookie])->row_array();
                if ($getCookie) {
                    $dataCookie = $getCookie;
                    $this->session->set_userdata('admin', true);
                    redirect(base_url() . 'welcome');
                }
            }
        }
        $this->form_validation->set_rules('username', 'username', 'required', ['required' => 'username wajib diisi']);
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/v_login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $cookie = $this->input->post('cookie');
            $admin = $this->db->get_where('admin', ['username' => $username])->row_array();

            if ($admin) {
                if (password_verify($password, $admin['password'])) {

                    if ($cookie != NULL) {
                        $key = random_string('alnum', 64);
                        set_cookie('djehbicd', $key, 3600 * 24 * 30 * 12);
                        $this->db->set('cookie', $key);
                        $this->db->update('admin');
                    }

                    $this->session->set_userdata('admin', true);
                    $this->session->set_userdata($data);

                    redirect(base_url() . 'welcome');
                } else {
                    $this->session->set_flashdata('failed', '<div class="alert alert-danger" role="alert">
                              Password salah!
                            </div>');
                    redirect(base_url() . 'administrator');
                }
            } else {
                $this->session->set_flashdata('failed', '<div class="alert alert-danger" role="alert">
                Username salah!
              </div>');
                redirect(base_url() . 'administrator');
            }
        }
    }

    function berhasillogin()
    {
        redirect('Welcome');
    }
    function gagallogin()
    {
        $url = base_url('administrator');
        echo $this->session->set_flashdata('msg', 'Username Atau Password Salah');
        redirect($url);
    }
    function logout()
    {
        $this->session->sess_destroy();
        $url = base_url('administrator');
        redirect($url);
    }
}
