<?php

class Dosen extends CI_Controller
{

    public function __construct()
    {
    	parent::__construct();
        $this->load->model('Dosen_model');
    
    }
	 public function index()
	{	
		$data['judul'] = 'Halaman Dosen';
		$data['dosen']=$this->Dosen_model->getAllDosen();
        if($this->input->post('keyword')){
            $data['dosen'] = $this->Dosen_model->cariDataDosen();
        }
        $this->load->view('templates/header',$data);
        $this->load->view('Dosen/index',$data);
        $this->load->view('templates/footer');

        

        // required fungsinya untuk memastikan bahwa perlu untuk diisi
        // is_unique fungsinya untuk membuat tiap kode/ nama adalah unik dan tidak bisa di tiru/ disamakan
        $this->form_validation->set_rules('nip','Nip','required|is_unique[Dosen.nip]');
        $this->form_validation->set_rules('namadosen','NamaDosen','required|is_unique[Dosen.namadosen]');
        //


        if($this->form_validation->run()==false){    
    	
        }else {
            $data=[
            	'kode' => $this->input->post('kode'),
                'matakuliah' => $this->input->post('matakuliah'),

                  
            ];
            $this->db->insert('Dosen', $data);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('dosen');
            
        }
        
    }

    public function ubah()
    {
        
        $this->Dosen_model->ubahDataDosen();
        $this->session->set_flashdata('flash', 'diubah');
        redirect('dosen');
    }

    public function hapus($id)
    {
        $this->Dosen_model->hapusDataDosen($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('dosen');
    }
 }