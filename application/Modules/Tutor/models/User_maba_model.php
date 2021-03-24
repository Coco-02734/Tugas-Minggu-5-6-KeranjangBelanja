<?php
class user_maba_model extends CI_Model
{
    public function getUserMaba($email = null)
    {
        if ($email === null) {
            return $this->db->get('user')->result_array();
        } else {
            return $this->db->get_where('user', ['email' => $email])->result_array();
        }
    }
    public function getRangking($jurusan = null)
    {
        if ($jurusan === null) {
            return $data['rank_nas'] = $this->db->order_by('skor', 'DESC')->get('rangking')->result_array();
        } else {
            return $data['rank_nas'] = $this->db->order_by('skor', 'DESC')->get_where('rangking', ['jurusan' => $jurusan])->result_array();
        }
    }
    
    public function getMateri()
    {
        return $this->db->get('materi')->result_array();
    }

    public function getMeteriSesi($sesi)
    {
        return  $data['soal'] = $this->db->get_where('m_ujian', ['sesi' => $sesi])->result_array();
    }

    public function rangkingAwal($user)
    {
        return $this->db->limit(1)->order_by('id', 'ASC')->get_where('rangking', ['id_siswa' => $user])->row_array();
    }
}
