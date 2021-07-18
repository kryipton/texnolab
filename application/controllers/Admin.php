<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        if (empty($this->session->userdata("user"))){

            $this->load->view('admin/login/content');

        }else{
            redirect(base_url("SlideController"));
        }

    }

    public function login()
    {
        if (empty($this->session->userdata("user"))){
            $usr = strip_tags($this->input->post("usr"));
            $psw = strip_tags($this->input->post("psw"));

            if (!empty($usr) && !empty($psw)){


                $user = $this->Core->get_where_row(
                    array(
                        "username" => $usr,
                        "password" => md5($psw),
                    ),
                    "users");
                if (!empty($user)){

                    $this->session->set_userdata("user", $user["id"]);
                    $this->session->set_userdata("user_role", $user["isAdmin"]);
                    $this->session->set_flashdata("success", "Daxil oldunuz");
                    redirect(base_url("SlideController"));
                }else{
                    $this->session->set_flashdata("alert", "İstifadəci adı vəya Şifrə yanlışdır");
                    redirect(base_url("Admin"));
                }

            }else{
                $this->session->set_flashdata("alert", "Boşluq Buraxmayın!");
                redirect(base_url("Admin"));
            }

        }else{
            redirect(base_url("SlideController"));
        }
    }

    public function logout()
    {
        if (!empty($this->session->userdata("user"))){
            $this->session->unset_userdata("user");
            $this->session->unset_userdata("user_role");
            $this->session->set_flashdata("success", "Çıxıldı");
            redirect(base_url("Admin"));
        }else{
            redirect(base_url("SlideController"));
        }
    }


}