<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class HomeController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $dil = $this->uri->segment(1);
        if ($dil == ""){
            $dil = "az";
        }
        $this->lang->load($dil, $dil);

        $this->session->set_userdata("lang", $dil);
    }

    public function index()
    {
        //hamisinda cagirilacaqlar
        $data["logo"] = $this->db->get("logo")->row_array();
        $data["contact"] = $this->db->get("contact")->row_array();
        $data["footer"] = $this->db->get("footer")->row_array();
        $data["social"] = $this->db->get("social")->row_array();
        $data["footer_gallery"] = $this->db->limit(8)->get("footer_gallery")->result_array();
        //hamisinda cagirilacaqlar

        $data["slider"] = $this->db->get("slider")->result_array();
        $data["home_page_services"] = $this->db->get("home_page_services")->result_array();
        $data["client_reviews"] = $this->db->limit(12)->get("client_reviews")->result_array();
        $data["courses"] = $this->db->order_by("id", "desc")->limit(6)->order_by("id", "desc")->get("courses")->result_array();
        $data["news"] = $this->db->order_by("id", "desc")->limit(3)->get("news")->result_array();
        $data["teachers"] = $this->db->order_by("id", "desc")->limit(3)->get("teachers")->result_array();


        $data["home_page_bg1"] = $this->db->get("home_page_bg1")->row_array();
        $data["home_page_courses_text"] = $this->db->get("home_page_courses_text")->row_array();
        $data["home_page_happy_clients_text"] = $this->db->get("home_page_happy_clients_text")->row_array();
        $data["home_page_news_text"] = $this->db->get("home_page_news_text")->row_array();
        $data["home_page_services_text"] = $this->db->get("home_page_services_text")->row_array();
        $data["home_page_teachers_text"] = $this->db->get("home_page_teachers_text")->row_array();

//        pr($data["footer_gallery"]);


        $data["page"] = "home/index";
        $this->load->view('front/includes/index', $data);
    }

    public function about()
    {
        //hamisinda cagirilacaqlar
        $data["logo"] = $this->db->get("logo")->row_array();
        $data["contact"] = $this->db->get("contact")->row_array();
        $data["footer"] = $this->db->get("footer")->row_array();
        $data["social"] = $this->db->get("social")->row_array();
        $data["footer_gallery"] = $this->db->limit(8)->get("footer_gallery")->result_array();
        //hamisinda cagirilacaqlar

        $data["about"] = $this->db->get("about")->row_array();
        $data["about_page_background"] = $this->db->get("about_page_background")->row_array();
        $data["home_page_bg1"] = $this->db->get("home_page_bg1")->row_array();
        $data["teachers"] = $this->db->order_by("id", "desc")->limit(3)->get("teachers")->result_array();
        $data["home_page_teachers_text"] = $this->db->get("home_page_teachers_text")->row_array();


        $data["page"] = "about/index";
        $this->load->view('front/includes/index', $data);
    }

    public function contact()
    {
        //hamisinda cagirilacaqlar
        $data["logo"] = $this->db->get("logo")->row_array();
        $data["contact"] = $this->db->get("contact")->row_array();
        $data["footer"] = $this->db->get("footer")->row_array();
        $data["social"] = $this->db->get("social")->row_array();
        $data["footer_gallery"] = $this->db->limit(8)->get("footer_gallery")->result_array();
        //hamisinda cagirilacaqlar

        $data["contact"] = $this->db->get("contact")->row_array();
        $data["contact_page_background"] = $this->db->get("contact_page_background")->row_array();


        $data["page"] = "contact/index";
        $this->load->view('front/includes/index', $data);
    }


    public function news()
    {
        //hamisinda cagirilacaqlar
        $data["logo"] = $this->db->get("logo")->row_array();
        $data["contact"] = $this->db->get("contact")->row_array();
        $data["footer"] = $this->db->get("footer")->row_array();
        $data["social"] = $this->db->get("social")->row_array();
        $data["footer_gallery"] = $this->db->limit(8)->get("footer_gallery")->result_array();
        //hamisinda cagirilacaqlar

        $data["news"] = $this->db->order_by("id", "desc")->limit(6)->get("news")->result_array();

        $last_element = end($data["news"]);
        $data["last_id"] = $last_element["id"];

        $data["news_page_background"] = $this->db->get("news_page_background")->row_array();

//        pr($data["news_page_background"]);


        $data["page"] = "news/index";
        $this->load->view('front/includes/index', $data);
    }

    public function news_single($id)
    {
        //hamisinda cagirilacaqlar
        $data["logo"] = $this->db->get("logo")->row_array();
        $data["contact"] = $this->db->get("contact")->row_array();
        $data["footer"] = $this->db->get("footer")->row_array();
        $data["social"] = $this->db->get("social")->row_array();
        $data["footer_gallery"] = $this->db->limit(8)->get("footer_gallery")->result_array();
        //hamisinda cagirilacaqlar

        $data["news_single"] = $this->db->where("id", $id)->get("news")->row_array();
        $data["news_gallery"] = $this->db->where("news_id", $id)->get("news_gallery")->result_array();
        $data["news_category"] = $this->db->where("id", $data["news_single"]["category_id"])->get("news_category")->row_array();
        $data["news_page_background"] = $this->db->get("news_page_background")->row_array();


        $data["page"] = "news/news_single/index";
        $this->load->view('front/includes/index', $data);
    }

    public function news_get($id)
    {
        $lang = $this->session->userdata("lang");
        $data = "";
        $news = $this->db->order_by("id", "desc")->where("id <", $id)->limit(6)->get("news")->result_array();
        $last_element = end($news);
        $last_id = $last_element["id"];

        foreach ($news as $item){
            $data .= '<div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img src="'. base_url("uploads/news/$item[img]") .'" class="img-fluid" alt="Blog images">
                        <div class="card-body">
                            <h6 class="card-title text-uppercase font-weight-bold">
                                '. $item["title_$lang"] .'
                            </h6>
                            <ul class="list-inline italic">
                                <li class="list-inline-item"><i class="fa fa-calendar"></i><span>
                                        '. $item["date"] .'
                                </span></li>
                                <li class="list-inline-item"><i class="fa fa-pencil"></i><span>
                                        '. $item["author"] .'
                                </span></li>
                            </ul>
                            <p>
                                '. $item["wider_desc_$lang"] .'
                            </p>
                            <a class="btn btn-radius2 font-weight-normal py-2 px-3" href="'. base_url("$lang/news/$item[id]") .'">Etrafli <i class="fa fa-angle-double-right"></i></a>						</div>
                    </div>
                </div>';
        }


        $result = json_encode([
            "last_id" => $last_id,
            "data" => $data
        ]);

        echo $result;

    }


}