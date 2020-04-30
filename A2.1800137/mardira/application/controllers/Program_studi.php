<?php

class Program_studi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Prodi_model');
    }

    public function _rules()
    {

        $attr_nama = array(
            'required' => 'Nama prodi harus diisi!',
            'min_length' => 'Nama prodi minimal 5 karakter!',
            'max_length' => 'Nama prodi maksimal 30 karakter',
        );
        $this->form_validation->set_rules('nama_prodi', 'Nama Prodi', 'trim|required|min_length[5]|max_length[50]', $attr_nama);
    }

    public function index()
    {
        $data['prodi'] = $this->Prodi_model->lihat_data();
        $this->load->view('prodi_v', $data);
    }

    public function tambah_data()
    {
        $form_open = form_open('program_studi/tambah_aksi');
        $label_nama = form_label('Nama Prodi', 'nama_prodi');
        $attr_id = array(
            'type' => 'hidden',
            'name' => 'id_prodi',
            'value' => set_value('id_prodi')
        );
        $attr_nama = array(
            'type' => 'text',
            'name' => 'nama_prodi',
            'class' => 'form-control'
        );
        $attr_submit = array(
            'type' => 'submit',
            'class' => 'btn btn-success',
        );
        $input_nama = form_input($attr_nama);
        $input_id = form_input($attr_id);
        $form_submit = form_submit($attr_submit, 'Simpan');

        $error_nama = form_error('nama_prodi');

        $data = array(
            'form_open' => $form_open,
            'label_nama' => $label_nama,
            'input_id' => $input_id,
            'input_nama' => $input_nama,
            'form_submit' => $form_submit,
            'error_nama' => $error_nama,
        );
        $this->load->view('prodi_form', $data);
    }

    public function tambah_aksi()
    {
        $this->_rules();
        $validasi = $this->form_validation->run();
        if ($validasi == FALSE) {
            $this->tambah_data();
        } else {
            $nama_prodi = $this->input->post('nama_prodi');
            $data = array(
                'nama_prodi' => $nama_prodi,
                'id_prodi' => $prodi,
            );
            $this->Prodi_model->insert_data($data);
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah!');
            redirect('prodi');
        }
    }

    public function edit($id)
    {
        $get_row = $this->Prodi_model->get_row($id);
        if ($get_row->num_rows() > 0) {
            $row = $get_row->row();
            $id_prodi = $row->id_prodi;
            $attr_id = array(
                'type' => 'hidden',
                'name' => 'id_prodi',
                'value' => set_value('id_prodi', $id_prodi)
            );
            $attr_nama = array(
                'type' => 'text',
                'name' => 'nama_prodi',
                'class' => 'form-control'
            );
            $attr_submit = array(
                'type' => 'submit',
                'class' => 'btn btn-success',
            );
            $nama_prodi = $row->nama_prodi;
            $id_prodi = $row->id_prodi;
            $form_open = form_open('program_studi/edit_aksi');
            $label_nama = form_label('Nama Prodi', 'nama_prodi');
            $input_nama = form_input($attr_nama, $nama_prodi);
            $input_id = form_input($attr_id);

            $form_submit = form_submit($attr_submit, 'Simpan Perubahan');
            $error_nama = form_error('nama_prodi');
            $data = array(
                'form_open' => $form_open,
                'label_nama' => $label_nama,
                'input_id' => $input_id,
                'input_nama' => $input_nama,
                'form_submit' => $form_submit,
                'error_nama' => $error_nama,
            );
            $this->load->view('editprodi_form', $data);
        } else {
            $this->session->set_flashdata('pesan', 'Data tidak ditemukan!');
            redirect('prodi');
        }
    }

    public function edit_aksi()
    {
        $this->_rules();
        $validasi = $this->form_validation->run();
        $id = $this->input->post('id_prodi');
        if ($validasi == FALSE) {
            $this->edit($id);
        } else {
            $nama_prodi = $this->input->post('nama_prodi');
            $data = array(
                'nama_prodi' => $nama_prodi,
            );
            $this->Prodi_model->update_data($id, $data);
            $this->session->set_flashdata('pesan', 'Data berhasil diubah!');
            redirect('prodi');
        }
    }

    public function hapus($id)
    {
        $id = $this->uri->segment(3);
        $this->Prodi_model->delete_data($id);
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus!');
        redirect('prodi');
    }


}
