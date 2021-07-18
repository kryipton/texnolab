<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Panel_admin_page_profile_update extends MY_Controller{



    public function __construct()
    {
        parent::__construct();

    }


    public function index()
    {
        $id = $this->session->userdata("user");
        $user = $this->Core->get_where_row(array("id" => $id), "users");

        $data["view_folder"] = "profile_update";
        $data["usr"] = $user["username"];
        $this->load->view('admin/includes/index', $data);

    }

    public function update()
    {
        $usr = strip_tags($this->input->post("usr"));
        $psw = strip_tags($this->input->post("psw"));
        $psw2 = strip_tags($this->input->post("psw2"));

        if (!empty($usr) && !empty($psw) && !empty($psw2)){

            if ($psw == $psw2){

                $data = array(
                    "username" => $usr,
                    "password" => md5($psw),
                );

                $this->Core->update(array(
                    "id" => $this->session->userdata('user')
                ), "users", $data);

                $this->session->set_flashdata("success", "Profil Yeniləndi");
                $this->session->unset_userdata("user");
                $this->session->unset_userdata("user_role");
                redirect(base_url("Admin"));

            }else{
                $this->session->set_flashdata("alert", "Şifrə Və Şifrə Təkrarı Eyni Deyil!");
                redirect(base_url("Panel_admin_page_profile_update"));
            }

        }else{
            $this->session->set_flashdata("alert", "Boşluq Buraxmayın!");
            redirect(base_url("Panel_admin_page_profile_update"));
        }

    }

}