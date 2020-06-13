<?php

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
        
    }
    public function login()
    {
        $form_open = form_open('auth/cek_login');
        $form_close = form_close();
        $label_email = form_label('Email', 'email');
        $label_password = form_label('Password', 'password');
        $attr_email = array(
            'type' => 'email',
            'name' => 'email',
            'class' => 'form-control'
        );
        $attr_pass = array(
            'type' => 'password',
            'name' => 'password',
            'class' => 'form-control'
        );
        $attr_submit = array(
            'type' => 'submit',
            'class' => 'btn btn-block btn-primary btn-lg'
        );
        $input_email = form_input($attr_email);
        $input_password = form_password($attr_pass);
        $submit = form_submit($attr_submit, 'Login');
        $data = array(
            'form_open' => $form_open,
            'form_close' => $form_close,
            'label_email' => $label_email,
            'label_password' => $label_password,
            'input_email' => $input_email,
            'input_password' => $input_password,
            'submit' => $submit,
        );
        $this->load->view('auth/login_v', $data);
    }

    public function cek_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $data = array(
            'email' => $email,
            'pwd' => md5($password),
        );
        $cek_user = $this->Auth_model->cek_user($data);
        if ($cek_user->num_rows() > 0) {
            $row = $cek_user->row();
            $email = $row->email;
            $nama_lengkap = $row->nama_lengkap;
            $userdata = array(
                'email' => $email,
                'nama_lengkap' => $nama_lengkap,
                'status' => 'login'
            );
            $this->session->set_userdata($userdata);
            redirect('home');
        } else {
            $this->session->set_flashdata('pesan', 'username atau password salah!');
            redirect('login');
        }
    }

    public function hapus_session()
    {
        $this->session->unset_userdata('nama_lengkap');
        redirect('home');
    }

    public function logout()
    {
        $this->session->unset_userdata('status');
        redirect('login');
    }
}
