<?php

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function Index()
    {
        $this->load->view('login');
    }

    public function Login_user()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user_id = $this->login_model->login_user($username, $password);
        if ($user_id) {
            $user_data = ([
                'user_id' => $user_id,
                'username' => $username,
                'logged_in' => true
            ]);

            $data['page'] = 'admin/admin_page';
            $this->load->view('admin/_main_layout',$data);
        }else{
            redirect('Login');
        }

    }
}