<?php
class Dlemas extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-dlemas');
    }
    public function cetak()
    {
        $this->form_validation->set_rules('nama', 'Nama', 
            'required|min_length[3]', [
            'required' => 'Nama harus diisi',
            'min_lenght' => 'Nama terlalu pendek'
        ]);

        $this->form_validation->set_rules('nis', 'NIS', 
            'required|min_length[3]', [
            'required' => 'NIS harus diisi',
            'min_lenght' => 'NIS terlalu pendek'
        ]);

        $this->form_validation->set_rules('kelas', 'Kelas', 
            'required|min_length[3]', [
            'required' => 'Kelas harus diisi',
            'min_lenght' => 'Kelas terlalu pendek'
        ]);

        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 
            'required|min_length[3]', [
            'required' => 'Tanggal Lahir harus diisi',
            'min_lenght' => 'Tanggal Lahir terlalu pendek'
        ]);

        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 
            'required|min_length[3]', [
            'required' => 'Tempat Lahir harus diisi',
            'min_lenght' => 'Tempat Lahir terlalu pendek'
         ]);

        $this->form_validation->set_rules('alamat', 'Alamat', 
            'required|min_length[3]', [
            'required' => 'Alamat harus diisi',
            'min_lenght' => 'Alamat terlalu pendek'
        ]);

        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 
            'required', [
            'required' => 'Jenis Kelamin harus dipilih'
        ]);

        $this->form_validation->set_rules('agama', 'Agama', 
            'required', [
            'required' => 'Agama harus dipilih'
        ]);

        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-dlemas');
        } else {
            $data = [
                'nama'          => $this->input->post('nama'),
                'nis'           => $this->input->post('nis'),
                'kelas'         => $this->input->post('kelas'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'tempat_lahir'  => $this->input->post('tempat_lahir'),
                'alamat'        => $this->input->post('alamat'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'agama'         => $this->input->post('agama')
            ];
            $this->load->view('view-data-dlemas', $data);
        }
    }
}