<?php $this->load->view("admin/includes/header"); ?>

<?php $this->load->view("admin/includes/top_navbar"); ?>

<?php $this->load->view("admin/includes/left_navbar"); ?>


    <!--    yenileme ve insert ucun modal -->
<?php
if (!empty($create_modal)) {
    echo $create_modal;
}
?>
    <!--    yenileme ve insert ucun modal -->


<?php $this->load->view("admin/$view_folder/content") ?>

<?php $this->load->view("admin/includes/footer"); ?>

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
<?php if($this->session->flashdata("alert") && false){ ?>
    <script>
        iziToast.warning({
            icon: 'icon-person',
            message: '<?php echo $this->session->flashdata("alert")?>',
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            // progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>
<?php }?>