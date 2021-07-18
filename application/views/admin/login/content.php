<?php $this->load->view("admin/includes/header") ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/")?>css/style_login.css">

<div id="main" class="c_admin_card">
    <div id="logo-area">
        <img src="<?php echo base_url("public/admin/img/preview.png")?>" >
    </div>
    <div id="login-area">
        <form action="<?php echo base_url("Admin/login")?>" method="post" >
            <div id="user-name">İSTİFADƏÇİ ADI</div>
            <div class="input-area">
                <input name="usr" type="text" class="inputs" tabindex="1" placeholder="İstifadəçi adı" required>
            </div>

            <div id="user-pass">ŞİFRƏ</div>
            <div class="input-area">
                <input name="psw" type="password" class="inputs" tabindex="1" placeholder="Şifrə" required>
            </div>

            <div class="button-area">
                <input type="submit" class="button" value="DAXİL OL" name="" tabindex="3">
            </div>
        </form>
<?php $this->load->view("admin/includes/footer") ?>

        <!--melumat alerti-->
        <?php if($this->session->flashdata("success") && false){ ?>
            <script>
                iziToast.success({
                    icon: 'icon-person',
                    message: '<?php echo $this->session->flashdata("success")?>',
                    position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
                    // progressBarColor: 'rgb(0, 255, 184)',
                });
            </script>
        <?php }?>

        <!--melumat alerti-->
        <?php if(!$this->session->flashdata("alert") && false){ ?>
            <script>
                iziToast.warning({
                    icon: 'icon-person',
                    message: '<?php echo $this->session->flashdata("alert")?>',
                    position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
                    // progressBarColor: 'rgb(0, 255, 184)',
                });
            </script>
        <?php }?>
