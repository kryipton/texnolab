<div id="table-area">

    <!--cedvelin adi-->
    <div id="menu-head">
        <span>Profil Yeniləmə</span>
    </div>
    <!--cedvelin adi-->


    <!--sag teref-->
    <div class="c_overflow_auto">

        <br>
        <div class="c_update_row_div">
            <form style="text-align: left" id="c_update_form" action="<?php echo base_url("Panel_admin_page_profile_update/update")?>" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="usr">Yeni İstifadəçi adı:</label>
                    <input name="usr" required type="text" class="form-control" id="usr" value="<?php echo $usr;?>">
                </div>

                <div class="form-group">
                    <label for="pwd">Yeni Şifrə:</label>
                    <input name="psw" required type="password" class="form-control" id="pwd">
                </div>

                <div class="form-group">
                    <label for="pwd2">Yeni Şifrənin Təkrarı:</label>
                    <input name="psw2" required type="password" class="form-control" id="pwd2">
                </div>

                <button type="submit" class="btn btn-primary">
                    Yenilə
                    <i class="fa fa-pen fa-sm"></i>
                </button>
            </form>
        </div>
        <br><br><br>

    </div>
    <!--sag teref-->
</div>




