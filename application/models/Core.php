<?php
 class Core extends CI_Model{

//==============================================Core ucun lazim olan functionlar========================================

    //  get data asc
    public function get_asc($table_name)
    {
        return $this->db->order_by("id", "ASC")->get($table_name)->result_array();
    }



    //  get data desc
    public function get_desc($table_name)
    {
        return $this->db->order_by("id", "DESC")->get($table_name)->result_array();
    }



    //  get data asc limit
    public function get_asc_limit($table_name, $limit)
    {
        return $this->db->order_by("id", "ASC")->limit($limit)->get($table_name)->result_array();
    }




    //  get data desc limit
    public function get_desc_limit($table_name, $limit)
    {
        return $this->db->order_by("id", "DESC")->limit($limit)->get($table_name)->result_array();
    }




    //  get data pagination limit asc
    public function get_pagination_asc($limit, $count, $table_name)
    {
        return $this->db->order_by("id", "ASC")->limit($limit, $count)->get($table_name)->result_array();
    }




    //  get data pagination limit desc
    public function get_pagination_desc($limit, $count, $table_name)
    {
        return $this->db->order_by("id", "DESC")->limit($limit, $count)->get($table_name)->result_array();
    }




    //  get data with row array
    public function get_where_row($where, $table_name)
    {
        return $this->db->where($where)->get($table_name)->row_array();
    }




    //  get data with where and result array with asc
    public function get_where_result_asc($where, $table_name)
    {
        return $this->db->where($where)->order_by("id", "ASC")->get($table_name)->result_array();
    }




    //  get data with where and result array with desc
    public function get_where_result_desc($where,$table_name)
    {
        return $this->db->where($where)->order_by("id", "DESC")->get($table_name)->result_array();
    }



    //  get data with where and result array with desc
    public function get_select_where_result_desc($select, $where,$table_name)
    {
        return $this->db->select($select)->where($where)->order_by("id", "DESC")->get($table_name)->result_array();
    }


    //  get data with where in and result array with desc
    public function get_where_in_result_desc($where_in,$table_name)
    {
        return $this->db->where_in('id', $where_in)->order_by("id", "DESC")->get($table_name)->result_array();
    }


    //  insert db with data
    public function add($data, $table_name)
     {
         $this->db->insert($table_name,$data);
         $id = $this->db->insert_id();
         return $id;
     }




    //  update db with data
    public function update($where, $table_name ,$data)
    {
        $this->db->where($where)->update($table_name ,$data);
    }




    //  delete db with data
    public function delete($where, $table_name)
    {
        return $this->db->where($where)->delete($table_name);
    }




    // get column names of table
    public function list_fields($table_name)
    {
        return $this->db->list_fields($table_name);
    }




    // count all table rows
    public function get_counts($table_name)
    {
        return $this->db->count_all($table_name);
    }


    // count all table rows
    public function get_counts_where($where, $table_name)
    {
        return $this->db->where($where)->from($table_name)->count_all_results();
    }


    public function get_where_result_desc_limit($limit, $count, $where, $table_name)
    {
        return $this->db->where($where)->order_by("id", "DESC")->limit($limit, $count)->get($table_name)->result_array();
    }

//==============================================Core ucun lazim olan functionlar========================================


//==============================================BU sayt ucun lazim olan elave funksiyalar========================================

    public function get_popular_tours($table_name)
    {
        return $this->db->order_by("click_times", "DESC")->limit(4)->get($table_name)->result_array();
    }

    //  get data pagination limit asc
    public function get_price_pagination_asc($limit, $count, $table_name)
    {
        return $this->db->order_by("tour_price", "ASC")->limit($limit, $count)->get($table_name)->result_array();
    }

    //  get data pagination limit desc
    public function get_price_pagination_desc($limit, $count, $table_name)
    {
        return $this->db->order_by("tour_price", "DESC")->limit($limit, $count)->get($table_name)->result_array();
    }

    //  get data pagination limit asc
    public function get_popularity_pagination_asc($limit, $count, $table_name)
    {
        return $this->db->order_by("click_times", "ASC")->limit($limit, $count)->get($table_name)->result_array();
    }

    //  get data pagination limit desc
    public function get_popularity_pagination_desc($limit, $count, $table_name)
    {
        return $this->db->order_by("click_times", "DESC")->limit($limit, $count)->get($table_name)->result_array();
    }

    //  get data pagination limit desc
    public function get_price_range_pagination($where, $limit, $count, $table_name)
    {
        return $this->db->where("tour_price >=" , $where[0])->where("tour_price <=" , $where[1])->order_by("tour_price", "ASC")->limit($limit, $count)->get($table_name)->result_array();
    }

    //  get data pagination limit desc
    public function get_search_pagination($search_value, $limit, $count, $table_name)
    {
        $lang = $this->session->userdata("dil");

        $this->db->like("name_$lang", $search_value);
        $this->db->or_like("desc_$lang", $search_value);
        return $this->db->limit($limit, $count)->get($table_name)->result_array();
    }

    //  get data pagination limit desc
    public function get_date_pagination($date_value, $end_date_value, $limit, $count, $table_name)
    {
        $lang = $this->session->userdata("dil");

        $this->db->where("date", $date_value);
        $this->db->where("end_date", $end_date_value);
        return $this->db->limit($limit, $count)->get($table_name)->result_array();
    }

    public function get_search_pagination_date($date_value, $end_date_value ,$search_value, $limit, $count, $table_name)
    {
        $lang = $this->session->userdata("dil");

        $this->db->where("date", $date_value);
        $this->db->where("end_date", $end_date_value);
        $this->db->like("name_$lang", $search_value);
        $this->db->or_like("desc_$lang", $search_value);
        return $this->db->limit($limit, $count)->get($table_name)->result_array();
    }
//    public function get_tours($table_name)
//    {
//        $this->db->select('tours.*,tour_gallery.*');
//        $this->db->from('tours');
//        $this->db->join('tour_gallery','tours.id = tour_gallery.tour_id','left');
//        return $this->db->get()->result_array();
//    }
    public function get_tours($table_name)
    {
        return $this->db->order_by("click_times", "DESC")->limit(9)->get($table_name)->result_array();
    }

    public function get_highest_price($table_name)
    {
        return $this->db->order_by('tour_price','desc')->limit(1)->get('tours')->row_array('id');
    }

    public function get_lowest_price($table_name)
    {
        return $this->db->order_by('tour_price','ASC')->limit(1)->get('tours')->row_array('id');
    }

    public function get_popular_tours_for_home($table_name)
    {
        return $this->db->order_by("click_times", "DESC")->limit(12)->get($table_name)->result_array();
    }

    public function get_highest_price_tours_for_home($table_name)
    {
        return $this->db->order_by("tour_price", "DESC")->limit(6)->get($table_name)->result_array();
    }
//==============================================BU sayt ucun lazim olan elave funksiyalar========================================




 }