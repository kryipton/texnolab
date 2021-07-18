<?php $lang = $this->session->userdata("lang")?>


<!-- Inner Banner -->
<div class="inner-page-banner-area" style="background-image: url('<?=base_url("uploads/news_page_background/$about_page_background[img]")?>')">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-12 mx-auto text-center">
                <h2 class="font-weight-bold text-uppercase display-4 text-white">
                    <?=$about_page_background["title_$lang"]?>
                </h2>
                <ol class="list-inline text-center">
                    <li class="list-inline-item"><a href="#">Home </a> / </li>
                    <li class="list-inline-item"><a href="#">News </a> / </li>
                    <li class="list-inline-item active">News Single  </li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- About Section -->
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h2 class="text-uppercase font-weight-bold">
                    <?=$about["title_$lang"]?>
                </h2>
                <div class="divider float-left"></div>
                <div class="clearfix" style="margin-bottom: 13px"></div>

                <?=$about["desc_$lang"]?>


            </div>
            <div class="col-lg-6 col-md-6">
                <img src="<?=base_url("uploads/about/$about[img]")?>" class="rounded img-fluid" alt="" />
            </div>
        </div>
    </div>
</section>

<!-- Counter -->
<section class="image-bg">
    <div class="background-image-maker"></div>
    <div class="holder-image py-5">
        <img src="<?= base_url("uploads/home_page_bg1/$home_page_bg1[img]")?>" alt="" class="img-fluid">
    </div>
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-3 col-md-3 mx-auto text-center">
                <div class="single_counter text-white">
                    <h3 class="statistic-counter text-white"><?=$home_page_bg1["num1"]?></h3>
                    <h6 class="text-uppercase text-white"><?=$home_page_bg1["text1_$lang"]?></h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 mx-auto text-white text-center">
                <div class="single_counter p-y-2 m-t-1 text-white">
                    <h3 class="statistic-counter text-white"><?=$home_page_bg1["num2"]?></h3>
                    <h6 class="text-white text-uppercase"><?=$home_page_bg1["text2_$lang"]?></h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 mx-auto text-center text-white">
                <div class="fact-box mb-5 mb-lg-0">
                    <h3 class="statistic-counter text-white"><?=$home_page_bg1["num3"]?></h3>
                    <h6 class="text-uppercase text-white"><?=$home_page_bg1["text3_$lang"]?></h6>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 mx-auto text-center text-white">
                <div class="single_counter p-y-2 m-t-1">
                    <h3 class="statistic-counter text-white"><?=$home_page_bg1["num4"]?></h3>
                    <h6 class="text-uppercase text-white"><?=$home_page_bg1["text4_$lang"]?></h6>
                </div>
            </div>

        </div>
    </div>
</section>



<!-- Team Members -->
<section class="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 mx-auto text-center">
                <h2 class="mb-3 text-uppercase font-weight-bold">
                    <?=$home_page_teachers_text["title_$lang"]?>
                </h2>
                <div class="divider"></div>

                <br>
                <?=$home_page_teachers_text["desc_$lang"]?>

            </div>
        </div>
        <div class="row">

            <?php foreach ($teachers as $item){ ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="<?= base_url("uploads/teachers/$item[img]")?>" class="card-img-top img-fluid" alt="">
                        <div class="card-body">
                            <h6 class="font-weight-bold text-uppercase mb-0">
                                <?=$item["name_$lang"]?>
                            </h6>
                            <div class="font-italic py-2 orange"><b>
                                    <?=$item["job_$lang"]?>
                                </b></div>
                            <p class="card-text">
                                <?=$item["wider_desc_$lang"]?>
                            </p>
                            <div class="team-social1 ml-0">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><a href="<?=$item["facebook"]?>" class="rounded"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="list-inline-item"><a href="<?=$item["twitter"]?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li class="list-inline-item"><a href="<?=$item["instagram"]?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>

        </div>
    </div>
</section>
