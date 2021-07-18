<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sub_crud_demo extends MY_Controller{

    private $view_folder = "";
    private $table_name= "";
    private $table_name_in_azeri = "";
    private $class_name = "";
    private $upload_path= "";
    private $label_name_and_input_name = "";
    private $add_link = "";
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
    private $prev_link  ="";
    private $update_link  ="";


    public function __construct()
    {
        parent::__construct();

        //========================Config ucun vacib elementler=====================================================

        //      tablemizin adi
        $this->table_name = "new_subblog";

        //      tablemizin az dilinde adi
        $this->table_name_in_azeri = "Sub bloq2";

        //      tablenin fieldlerinin az dilinde adi
        $this->table_field_names = array(
            "ID",
            "Bloq id",
            "name(visible)",
            "surname(visible)",
            "img(visible)",
            "img(visible)",
            "img(visible)",
            "img(visible)",
            "img(visible)",
            "img(visible)",
        );


        //      inputlarin adlari ve labelleri
        $this->label_name_and_input_name = array(
            "Bloqun Adı Az" => "(group1)name_az",
            "Bloqun Adı En" => "(group1)name_en",
            "Bloqun Adı Ru" => "(group1)name_ru",

            "Bloqun Desci Az" => "(group2)desc_az",
            "Bloqun Desci En" => "(group2)desc_en",
            "Bloqun Desci Ru" => "(group2)desc_ru",

            "Bloqun Şəkli" => "img1",
            "Bloqun Şəkli2" => "img2",

        );


        //      geri butonuna basanda hansi linke geri atsin
        $this->prev_link = base_url("Standart_crud_demo");

        //========================Config ucun vacib elementler=====================================================




        //========================Config ucun avtomatik tenzimlenen elementler bunlar deyisilmediyi muddetce avtomatik tenzimlenir=====================================================

        $main_id = $this->session->userdata("c");

        $this->input_name_type = array();

        $this->add_update_input_array = array();

        //      Controllerimizin adi
        $this->class_name = get_class($this);

        //      Adminin icindeki papkanin adi
        $this->view_folder = $this->table_name;

        //      sekilleri ve fayllari yukleyeceyimiz yer meselen: "uploads/teachers/"
        $this->upload_path = "";

        //      tablemizin fieldlerinin array icinde siralanmasi BU DEYISILMIR!
        $this->field_names = $this->Core->list_fields($this->table_name);

        //      Controllerimizin adi
        $this->class_name = get_class($this);

        //      Adminin icindeki papkanin adi
        $this->view_folder = $this->table_name;

        //      sekilleri ve fayllari yukleyeceyimiz yer meselen: "uploads/teachers/"
        $this->upload_path = "";

        //      tablemizin fieldlerinin array icinde siralanmasi BU DEYISILMIR!
        $this->field_names = $this->Core->list_fields($this->table_name);

        //      tableye melumatlarin import edilmesi
        $this->import_link                    = base_url("$this->class_name/import/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez

        //      tabledeki melumatlarin update olunduqu link
        $this->update_link                    = base_url("$this->class_name/update/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez

        //      tabledeki melumatlarin add olunduqu link
        $this->add_link                       = base_url("$this->class_name/add/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez

        //      tabledeki melumatlarin delete olunduqu link
        $this->delete_link                    = base_url("$this->class_name/delete/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez

        //      ajaxnan melumatlarin modalin icine getirilmesi
        $this->link_for_update_modal          = base_url("$this->class_name/get_data_for_update/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez

        //      proseslerden her hansi biri ugurla basa catdiqda hansi linke atsin
        $this->success_link                   = base_url("$this->class_name/index/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez

        //      proseslerden her hansi biri ugurla basa catmadiqda hansi linke atsin
        $this->error_link                     = base_url("$this->class_name/index/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez

        //      data tablenin icine melumatlarin ajaxnan getirilmesi ucun lazim olan link
        $this->get_data_link                  = base_url("$this->class_name/get_data");

        //      eger sekil veya file varsa tablenin hansi fieldinnen adini goturub papkadan silsin
        $this->table_file_field_names = array();

        $this->select = array();

        //========================Config ucun avtomatik tenzimlenen elementler bunlar deyisilmediyi muddetce avtomatik tenzimlenir=====================================================


    }


    public function index($id)
    {
        $this->session->set_userdata("c", $id);

        $config["label_name_and_input_name"] = $this->label_name_and_input_name;
        $config["input_name_type"] = $this->input_name_type;
        $config["select_name_and_table_name"] = array();
        $config["update_link"] = $this->update_link;
        $config["add_link"]    = $this->add_link.$id;
        $config["table_name"]    = $this->table_name;
        $config["folder"]    = "installator";
        $data["create_modal"] = $this->create_view($config);



        $config["table_name"] = $this->table_name;
        $config["folder"] = "sub_crud_demo_installator";
        $this->recurse_copy($config);

        $data["get_data_link"] = $this->get_data_link;
        $data["field_names"] = $this->field_names;
        $data["view_folder"] = $this->view_folder;
        $data["table_name_in_azeri"] = $this->table_name_in_azeri;
        $data["table_field_names"] = $this->table_field_names;
        $data["prev_link"] = $this->prev_link;
        $data["id"] = $id;
        $this->load->view('admin/includes/index', $data);
    }

    public function get_data()
    {
        $field_names = $this->field_names;

        $config["where"] = array($field_names[1] => $this->session->userdata("c"));
        $config["additional_links"] = array();
        $config["table_name"] = $this->table_name;
        $config["upload_path"] = $this->upload_path;
        $config["delete_link"] = $this->delete_link;
        $config["link_for_update_modal"] = $this->link_for_update_modal;

        $this->data_table_where_array($config);

    }

    public function get_data_for_update()
    {

        $id = strip_tags($this->input->post("my_data"));//bu deyisilmir

        $config["where"] = array(
            "id" => $id,
        );
        $config["table_name"] = $this->table_name;
        $config["label_name_and_input_name"] = $this->label_name_and_input_name;
        $config["input_name_type"] = $this->input_name_type;
        $config["select_name_and_table_name"] = array();

        echo $this->update_view($config);

    }

    public function add($id)
    {

        $config["inputs_array"] = array();

        $fields = $this->db->field_data($this->table_name);
        foreach ($fields as $field)
        {
            if ($field->primary_key == 1 || ($field->max_length == 11 && $field->type == "int")){

            }elseif($field->max_length == 10 && $field->type == "int"){
                $config["inputs_array"][$field->name] = "(not_input)$id";
            }elseif ($field->type == "text"){
                $config["inputs_array"][$field->name] = "(editor)" . $field->name;
            }elseif($field->type == "varchar" && $field->max_length == 254){
                $config["inputs_array"][$field->name] = "(file)" . $field->name;
            }else{
                $config["inputs_array"][$field->name] = $field->name;
            }

        }

        $config["success_link"] = $this->success_link . $id;
        $config["error_link"] =  $this->error_link . $id;
        $config["table_name"] = $this->table_name;
        $config["upload_path"] = $this->upload_path;

        $this->insert_db($config);

    }

    public function update($id)
    {
        $field_names = $this->field_names;
        $row = $this->Core->get_where_row(array($field_names[0] => $id), $this->table_name);

        $config["inputs_array"] = array();

        $fields = $this->db->field_data($this->table_name);
        foreach ($fields as $field)
        {
            if ($field->primary_key == 1 || ($field->max_length == 11 && $field->type == "int")){

            }elseif($field->max_length == 10 && $field->type == "int"){
            }elseif ($field->type == "text"){
                $config["inputs_array"][$field->name] = "(editor)" . $field->name;
            }elseif($field->type == "varchar" && $field->max_length == 254){
                $config["inputs_array"][$field->name] = "(file)" . $field->name;
            }else{
                $config["inputs_array"][$field->name] = $field->name;
            }

        }

        $config["where"]            = array(
            $field_names[0] => $id,
        );
        $config["success_link"]     = $this->success_link . $row[$field_names[1]];
        $config["error_link"]       = $this->error_link . $row[$field_names[1]];
        $config["table_name"]       = $this->table_name;
        $config["upload_path"]      = $this->upload_path;

        $this->update_db($config);

    }

    public function delete($id)
    {
        $field_names = $this->field_names;
        $row = $this->Core->get_where_row(array($field_names[0] => $id), $this->table_name);

        $config["where"] = array(
            $field_names[0] => $id,
        );
        $config["table_file_field_names"] = $this->table_file_field_names;
        $config["success_link"] = $this->success_link.$row[$field_names[1]];
        $config["error_link"] = $this->error_link.$row[$field_names[1]];
        $config["upload_path"] = $this->upload_path;
        $config["table_name"] = $this->table_name;

        $this->delete_db($config);


    }

    public function import()
    {
        $config["table_name"] = $this->table_name;
        $config["field_names"] = $this->field_names;
        $this->import_csv($config);
    }


}