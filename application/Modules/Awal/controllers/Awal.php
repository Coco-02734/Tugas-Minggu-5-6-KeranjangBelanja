<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Awal extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Utama | WarMoed';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('menu')->result_array();
        if ($data['user']) {

            $data['chart'] = $this->db->from('keranjang')->join('menu', 'menu.id_menu=keranjang.id_produk')->where('status', '0')->where('id_user', $data['user']['id'])->get()->result_array();
            $data['jumlah'] = $this->db->select_sum('jumlah')->from('keranjang')->join('menu', 'menu.id_menu=keranjang.id_produk')->where('status', '0')->where('id_user', $data['user']['id'])->get()->row_array();
            $data['total'] = $this->db->select_sum('total_harga')->from('keranjang')->join('menu', 'menu.id_menu=keranjang.id_produk')->where('status', '0')->where('id_user', $data['user']['id'])->get()->row_array();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah($id)
    {
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $menu = $this->db->get_where('menu', ['id_menu' => $id])->row_array();
        $cek = $this->db->get_where('keranjang', ['id_produk' => $id])->row_array();
        $data = [
            'id_produk' => $id,
            'id_user' => $user['id'],
            'jumlah' => 1,
            'total_harga' => $menu['harga'] * 1,
            'status' => 0,
            'date_created' => time()
        ];
        if (!$cek) {
            $this->db->insert('keranjang', $data);
        } else {
            $updatenya = [
                'jumlah' => $cek['jumlah'] + 1,
                'total_harga' => $cek['total_harga'] + $menu['harga']
            ];
            $this->db->set($updatenya);
            $this->db->where('id_produk', $id);
            $this->db->update('keranjang');
        }
        redirect('awal');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Item berhasih ditambahkan !</div>');
        redirect('awal');
    }

    public function keranjang()
    {
        $data['title'] = 'Halaman Keranjang | WarMoed';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('menu')->result_array();
        if ($data['user']) {

            $data['chart'] = $this->db->from('keranjang')->join('menu', 'menu.id_menu=keranjang.id_produk')->where('status', '0')->where('id_user', $data['user']['id'])->get()->result_array();
            $data['jumlah'] = $this->db->select_sum('jumlah')->from('keranjang')->join('menu', 'menu.id_menu=keranjang.id_produk')->where('status', '0')->where('id_user', $data['user']['id'])->get()->row_array();
            $data['total'] = $this->db->select_sum('total_harga')->from('keranjang')->join('menu', 'menu.id_menu=keranjang.id_produk')->where('status', '0')->where('id_user', $data['user']['id'])->get()->row_array();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('keranjang', $data);
        $this->load->view('templates/footer');
    }

    public function hapus_item($id)
    {
        $this->db->delete('keranjang', ['id' => $id]);
        redirect('awal/keranjang');
    }
}
