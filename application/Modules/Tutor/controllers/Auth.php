<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('tutor/user');
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {

            $data['title'] = 'Halaman Login';

            $this->load->view('auth/header', $data);
            $this->load->view('auth/index');
            $this->load->view('auth/footer');
        } else {
            //validasinya sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        //usernya Ada
        if ($user) {
            //jika usernya aktif
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('tutor/admin');
                    } else {

                        redirect('tutor/user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Kamu Salah !!! </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Belum Di Aktivasi. Emailmu !!! </div>');
                redirect('auth');
            }
        } else {

            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Belum Terdaftar </div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Isi Nama Anda !'
        ]);

        $this->form_validation->set_rules('notlpn', 'Nomor Telpon', 'trim|required',  [
            'required' => 'Isi Nomor Handphone kamu yah!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Maaf Email Telah Terdaftar',
            'required' => 'Isi Email Anda !'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
            'min_length' => 'Password Minimal 8 Karakter'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Buat Akun';
            $this->load->view('auth/header', $data);
            $this->load->view('auth/registration');
            $this->load->view('auth/footer');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'no_tlpn' => $this->input->post('notlpn'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            // siap token
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->db->insert('user_token', $user_token);

            $this->_sendEmail($token, 'verify');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Akun Kamu Telah Terdaftar dan sudah bisa login. 
			Plis cek email untuk aktivasi akun kamu, Jika tidak ada jangan lupa cek folder spam kamu yah !!!</div>');
            redirect('tutor/auth');
        }
    }
    private function _sendEmail($token, $type)
    {
    }

    public function logout()
    {

        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->unset_userdata('token');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda telah logout / keluar.
			Silahkan login !!!</div>');
        redirect('tutor/auth');
    }

    public function blocked()
    {
        // $this->load->view('tutor/auth/blocked');
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        echo "ditolak sistem " . $user['nama'] . "role id " . $user['role_id'];
    }
}
