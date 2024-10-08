<?php 

  /**
   * summary
   */
    class Dosen_model extends CI_Model{
        public function getAllMahasiswa()
    {
        // //menggunakan cara pertama
        // $query = $this->db->get->('mahasiswa');
        // return &query->result_array();
        // menggunakan cara cepat methode chaining // pemanggil data base
        return $this->db->get('dosen')->result_array();
        
        }

    

        public function cariDataDosen()
        {
            $keyword = $this->input->post('keyword', true);
            $this->db->like('nip', $keyword);
            $this->db->or_like('namadosen', $keyword);
            return $this->db->get('dosen')->result_array();
        }

        public function ubahDataDosen()
        {
            $data = [
                "kode" => $this->input->post('kode', true),
                "matakuliah" => $this->input->post('matakuliah', true),
                "sks" => $this->input->post('sks', true),
                "semester" => $this->input->post('semester', true),
                "jurusan" => $this->input->post('jurusan', true)
                  
            ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('mahasiswa', $data);
        }

        public function hapusDataMahasiswa($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('mahasiswa');
        }

    }