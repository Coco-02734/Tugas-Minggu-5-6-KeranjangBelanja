<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Halaman Admin";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function inputproduk()
    {
        $data['title'] = "Input Produk | Admin";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->db->get('katagori')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Admin/input', $data);
        $this->load->view('templates/footer');
    }

    public function upload()
    {
        $data = [
            'kategori' => $this->input->post('id_kategori'),
            'nama_menu' => $this->input->post('namaproduk'),
            'keterangan' => $this->input->post('keterangan'),
            'harga' => $this->input->post('harga'),
            'stok' => $this->input->post('stok'),
            'aktif' => $this->input->post('aktif'),
            'date_created' => time(),
            'date_updated' => time(),
        ];

        $upload_gambar = $_FILES['foto']['name'];

        if ($upload_gambar) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']     = '500000';
            $config['upload_path'] = './assets/menu/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {

                $new_gambar = $this->upload->data('file_name');
                $this->db->set('gambar_menu', $new_gambar);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maksimal Berkas 200Mb </div>');
            }
        }

        $this->db->insert('menu', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Produk Berhasil Ditambahkan</div>');
        redirect('admin/daftarprodukl');
    }

    public function daftarprodukl()
    {
        $data['title'] = "Daftar Produk";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->db->get_where('menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Admin/produk', $data);
        $this->load->view('templates/footer');
    }
}
