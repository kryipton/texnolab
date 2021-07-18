<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CoursesController extends MY_Controller{

    private $view_folder = "";
    private $table_name= "";
    private $table_name_in_azeri = "";
    private $class_name = "";
    private $upload_path= "";
    private $label_name_and_input_name = "";
    private $update_link = "";
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


    public function __construct()
    {
        parent::__construct();

        //========================Config ucun vacib elementler=====================================================

        //      tablemizin adi
        $this->table_name = "courses";

        //      tablemizin az dilinde adi
        $this->table_name_in_azeri = "Kurslar";

        //      tablenin fieldlerinin az dilinde adi
        $this->table_field_names = array(
            "ID",
            "Kursun Adı (Az) (visible)",
            "Adı (EN)",
            "Adı (Ru)",

            "Kursu Haqqında Qısa Məlumat (Az) (visible)",
            "Kursu Haqqında Qısa Məlumat (EN)",
            "Kursu Haqqında Qısa Məlumat (Ru)",

            "Şəkil (visible)",

            "Yaş Məhdudiyyəti",
            "Kurs Müddəti ",
            "Kursun qiyməti ",


            "about az",
            "about en",
            "about ru",

            "program az",
            "program en",
            "program ru",

            "Qalereya (visible)",
            "Kursa Qeydiyyat müraciətləri (visible)",
            "Kurs Müəllimləri (visible)",
            "Kurs Məzunları (visible)",
        );

        //      inputlarin adlari ve labelleri
        $this->label_name_and_input_name = array(


            "Kursun adı (Az)" => "(group1)name_az",
            "Kursun adı (En)" => "(group1)name_en",
            "Kursun adı (RU)" => "(group1)name_ru",

            "Kursu Haqqında Qısa Məlumat (Az)" => "(group1)wider_desc_az",
            "Kursu Haqqında Qısa Məlumat (En)" => "(group1)wider_desc_en",
            "Kursu Haqqında Qısa Məlumat (RU)" => "(group1)wider_desc_ru",

            "Yaş Məhdudiyyəti" => "age",
            "Kurs Müddəti" => "size",
            "Kursun qiyməti" => "price",


            "Kurs Haqqında (Az)" => "(group2)about_course_az",
            "Kurs Haqqında (En)" => "(group2)about_course_en",
            "Kurs Haqqında (Ru)" => "(group2)about_course_ru",

            "Kurs Proqramı Haqqında(Az)" => "(group2)course_program_az",
            "Kurs Proqramı Haqqında(En)" => "(group2)course_program_en",
            "Kurs Proqramı Haqqında(Ru)" => "(group2)course_program_ru",

            "Şəkil" => "img",
        );



        //========================Config ucun vacib elementler=====================================================




        //========================Config ucun avtomatik tenzimlenen elementler bunlar deyisilmediyi muddetce avtomatik tenzimlenir=====================================================

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
        $this->success_link                   = base_url("$this->class_name/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez

        //      proseslerden her hansi biri ugurla basa catmadiqda hansi linke atsin
        $this->error_link                     = base_url("$this->class_name/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez

        //      data tablenin icine melumatlarin ajaxnan getirilmesi ucun lazim olan link
        $this->get_data_link                  = base_url("$this->class_name/get_data");

        //      eger sekil veya file varsa tablenin hansi fieldinnen adini goturub papkadan silsin
        $this->table_file_field_names = array();

        //========================Config ucun avtomatik tenzimlenen elementler bunlar deyisilmediyi muddetce avtomatik tenzimlenir=====================================================


    }

    public function index()
    {

        $config["label_name_and_input_name"] = $this->label_name_and_input_name;
        $config["input_name_type"] = $this->input_name_type;
        $config["select_name_and_table_name"] = array(
        );
        $config["update_link"] = $this->update_link;
        $config["add_link"]    = $this->add_link;
        $config["table_name"]    = $this->table_name;
        $config["folder"]    = "installator";
        $data["create_modal"] = $this->create_view($config);


        $data["get_data_link"] = $this->get_data_link;
        $data["field_names"] = $this->field_names;
        $data["view_folder"] = $this->view_folder;
        $data["import_link"] = $this->import_link;
        $data["table_name_in_azeri"] = $this->table_name_in_azeri;
        $data["table_field_names"] = $this->table_field_names;
        $this->recurse_copy($config);
        $this->load->view('admin/includes/index', $data);
    }

    public function get_data()
    {

        $config["where"] = array();
        $config["additional_links"] = array(
            "Qalereya" => "CourseGalleryController/index/",
            "Kursa Qeydiyyat" => "CourseRegistersController/index/",
            "Kurs Müəllimləri" => "CourseTeachersController/index/",
            "Kurs Məzunları" => "CourseAlumniController/index/",
        );
        $config["table_name"] = $this->table_name;
        $config["upload_path"] = $this->upload_path;
        $config["delete_link"] = $this->delete_link;
        $config["link_for_update_modal"] = $this->link_for_update_modal;

        $this->data_table_where_array($config);

    }

    public function add()
    {

        $config["inputs_array"] = $this->add_update_input_array;
        $config["success_link"] = $this->success_link;
        $config["error_link"] =  $this->error_link;
        $config["table_name"] = $this->table_name;
        $config["upload_path"] = $this->upload_path;

        $this->insert_db($config);

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
        $config["select_name_and_table_name"] = array(
        );

        echo $this->update_view($config);

    }

    public function update($id)
    {


        $config["where"]            = array(
            "id" => $id,
        );
        $config["inputs_array"]     = $this->add_update_input_array;
        $config["success_link"]     = $this->success_link;
        $config["error_link"]       = $this->error_link;
        $config["table_name"]       = $this->table_name;
        $config["upload_path"]      = $this->upload_path;

        $this->update_db($config);

    }

    public function delete($id)
    {

        $config["where"] = array(
            "id"=> $id,
        );
        $config["table_file_field_names"] = $this->table_file_field_names;
        $config["success_link"] = $this->success_link;
        $config["error_link"] = $this->error_link;
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