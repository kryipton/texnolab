<style>
    <?php

         $count = 0;

         foreach($table_field_names as $item){ ?>
    <?php if (substr($item, -9) != "(visible)"){?>

    th:nth-child(<?php echo $count + 2?>){
        display: none;
    }

    td:nth-child(<?php echo $count + 2?>){
        display: none;
    }

    <?php } $count++; }?>
</style>

<div id="table-area">

    <!--cedvelin adi-->
    <div id="menu-head">
        <span><?php echo $table_name_in_azeri?></span>
    </div>
    <!--cedvelin adi-->


    <a href="<?php echo $prev_link?>" class="btn btn-success c_row_create">
        <i class="fas fa-arrow-left fa-sm"></i>
        <span>Geri</span>
    </a>


   <br>
   <br>



    <hr>
    <!--yeni yaratma buttonu-->


    <!--sag teref-->
    <div class="c_overflow_auto">


        <!--cedvelimiz-->
        <table data-langurl="<?php echo base_url("public/admin/data_table")?>/Azerbaijan.json" data-url="<?php echo $get_data_link?>" id="bootstrap-data-table" class="table table-bordered table-hover dataTable no-footer c_data_table" style="width:97%" aria-describedby="bootstrap-data-table_info" role="grid">
            <thead>

            <th class="c_switch_th" data-orderable="false" style="width: 71px!important; padding: 5px!important;">

                <!--<label for="checkbox" class="form-check-label mr-2 label-table c_label_thead"><input type="checkbox" class="c_check_all form-check-input"/><span id="c_span_whole"></span></label>-->
                <a style="float: right!important;" class="red lighten-1 btn btn-danger c_delete_all"><i style="color:red;font-size: 14px;" class="fas fa-trash"></i></a>

                <input data-onstyle="success" style="float: left!important;" id="checkbox" data-style="fast" data-size="sm" data-toggle="toggle" class="form-check-input c_check_all" type="checkbox">
            </th>

            <?php foreach ($table_field_names as $item){ ?>
                <th><a><?php

                        if (substr($item, -9) == "(visible)"){
                            echo substr($item,0 , strlen($item)-9);
                        }else{
                            echo $item;
                        }

                        ?><i class="fas fa-sort ml-1"></i></a></th>
            <?php }?>


            <th data-orderable="false" class="" style="width: 53px!important;"><a>Əməliyyatlar</a></th>

            </thead>

            <tbody></tbody>

<!--            <style>-->
<!--                .c_row_update{-->
<!--                    display: none;-->
<!--                }-->
<!--            </style>-->

        </table>
        <!--cedvelimiz-->


    </div>
    <!--sag teref-->
</div>




