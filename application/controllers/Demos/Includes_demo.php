<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Includes_demo extends MY_Controller{

    private $view_folder = "";
    private $table_name= "";
    private $viewed_table= "";
    private $table_name_in_azeri = "";
    private $class_name = "";
    private $upload_path= "";
    private $label_name_and_input_name = "";
    private $add_link = "";
    private $update_link = "";
    private $delete_link = "";
    private $link_for_update_modal = "";
    private $success_link = "";
    private $error_link = "";
    private $get_data_link = "";
    private $input_name_type ="";
    private $field_names ="";
    private $import_link ="";
    private $add_update_input_array  ="";
    private $table_file_field_names  ="";
    private $table_field_names  ="";
    private $select  ="";
    private $prev_controller_name  ="";


    public function __construct()
    {
        parent::__construct();

        //========================Config ucun vacib elementler=====================================================

        //      tablemizin adi
        $this->table_name = "blog_includes";

        //      data tabelde view olaraq gorenecek tablemizin adi
        $this->viewed_table = "includes";

        //      tablemizin az dilinde adi
        $this->table_name_in_azeri = "Bloqun Includes";

        //      tablenin fieldlerinin az dilinde adi
        $this->table_field_names = array(
            "ID",
            "name(visible)",
            "yas(visible)",
            "date(visible)",
        );

        $this->select = array(
            "includes_id.Kateqoriyanın Adı" => "includes.name",
        );

        //      geri butonuna basanda hansi linke geri atsin
        $this->prev_link = base_url("Standart_crud_demo");
        //========================Config ucun vacib elementler=====================================================




        //========================Config ucun avtomatik tenzimlenen elementler bunlar deyisilmediyi muddetce avtomatik tenzimlenir=====================================================

        $main_id = $this->session->userdata("c");

        $this->input_name_type = array();

        $this->add_update_input_array = array();

        //      inputlarin adlari ve labelleri
        $this->label_name_and_input_name = array();

        //      Controllerimizin adi
        $this->class_name = get_class($this);

        //      Adminin icindeki papkanin adi
        $this->view_folder = $this->table_name;

        //      sekilleri ve fayllari yukleyeceyimiz yer meselen: "uploads/teachers/"
        $this->upload_path = "";

        //      tablemizin fieldlerinin array icinde siralanmasi BU DEYISILMIR!
        $this->field_names = $this->Core->list_fields($this->table_name);

        //      tabledeki melumatlarin add olunduqu link
        $this->add_link                       = base_url("$this->class_name/add/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez

        //      tabledeki melumatlarin delete olunduqu link
        $this->delete_link                    = base_url("$this->class_name/delete/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez

        //      data tablenin icine melumatlarin ajaxnan getirilmesi ucun lazim olan link
        $this->get_data_link                  = base_url("$this->class_name/get_data/");

        //      proseslerden her hansi biri ugurla basa catdiqda hansi linke atsin
        $this->success_link                   = base_url("$this->class_name/index/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez

        //      proseslerden her hansi biri ugurla basa catmadiqda hansi linke atsin
        $this->error_link                     = base_url("$this->class_name/index/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez

        //      eger sekil veya file varsa tablenin hansi fieldinnen adini goturub papkadan silsin
        $this->table_file_field_names = array();

        //========================Config ucun avtomatik tenzimlenen elementler bunlar deyisilmediyi muddetce avtomatik tenzimlenir=====================================================


    }


    public function index($id)
    {
        $this->session->set_userdata("c", $id);

        $config["label_name_and_input_name"] = $this->label_name_and_input_name;
        $config["input_name_type"] = $this->input_name_type;
        $config["select_name_and_table_name"] = $this->select;
        $config["add_link"]    = $this->add_link . "$id";
        $config["update_link"]    = $this->update_link;
        $config["table_name"]    = $this->table_name;
        $config["folder"]    = "includes_installator";
        $data["create_modal"] = $this->create_view($config);


        $data["get_data_link"] = $this->get_data_link;
        $data["field_names"] = $this->field_names;
        $data["view_folder"] = $this->view_folder;
        $data["import_link"] = $this->import_link;
        $data["prev_link"] = $this->prev_link;
        $data["table_name_in_azeri"] = $this->table_name_in_azeri;
        $data["table_field_names"] = $this->table_field_names;
        $this->recurse_copy($config);
        $this->load->view('admin/includes/index', $data);
    }

    public function get_data()
    {
        $field_names = $this->field_names;
        $field_name = $field_names[1];

        $tour_image_ids = $this->Core->get_where_result_desc(array($field_name => $this->session->userdata("c")), $this->table_name);
        $id_array = array();
        foreach ($tour_image_ids as $item){
            $id_array[] = $item[$field_names[2]];
        }

        $config["id"] = $field_names[0];
        $config["id_array"] = $id_array;
        $config["additional_links"] = array();
        $config["table_name"] = $this->viewed_table;
        $config["upload_path"] = $this->upload_path;
        $config["delete_link"] = $this->delete_link;
        $config["link_for_update_modal"] = $this->link_for_update_modal;

        $this->data_table_array($config);

    }

    public function add($id)
    {
        $field_names = $this->field_names;

        $config["inputs_array"] = array(
            $field_names[1] => "(not_input)$id",
            $field_names[2] => "$field_names[2]",
        );
        $config["field_names"] = $this->field_names;
        $config["success_link"] = $this->success_link . "$id";
        $config["error_link"] =  $this->error_link . "$id";
        $config["table_name"] = $this->table_name;
        $config["upload_path"] = $this->upload_path;
        $config["id"] = $id;

        $this->insert_db_no_dublicate($config);

    }

    public function delete($id)
    {
        $id2 = $this->session->userdata("c");
        $field_names = $this->field_names;

        $config["where"] = array(
            $field_names[1] => $id2,
            $field_names[2] => $id,
        );
        $config["table_file_field_names"] = $this->table_file_field_names;
        $config["success_link"] = $this->success_link . $id2;
        $config["error_link"] = $this->error_link . $id2;
        $config["upload_path"] = $this->upload_path;
        $config["table_name"] = $this->table_name;
        $config["id"] = $field_names[2];

        $this->delete_db($config);


    }



}