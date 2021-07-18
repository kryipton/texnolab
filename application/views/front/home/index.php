<?php $lang = $this->session->userdata("lang")?>

<!-- Master Slider -->
<div class="overflo-h">
    <div class="master-slider ms-skin-default" id="masterslider">

        <?php foreach ($slider as $item){ ?>
            <div class="ms-slide slide-1" data-delay="9"> <img src="<?= base_url("uploads/slider/$item[img]")?>" class="img-responsive" alt=""/>
                <h3 class="ms-layer text-center full-width text-title margin-top"
                    style="top:220px;left:0px;"
                    data-type="text"
                    data-delay="1000"
                    data-ease="easeOutExpo"
                    data-duration="1230"
                    data-effect="bottom(250)">
                    <?= $item["title_$lang"]?>
                </h3>
                <h3 class="ms-layer text-center text-subtitle full-width margin-top"
                    style="top:330px;left:0; right:0;"
                    data-type="text"
                    data-delay="1500"
                    data-ease="easeOutExpo"
                    data-duration="1230"
                    data-effect="bottom(250)">
                    <?= $item["desc_$lang"]?>
                </h3>

                <?php if (!empty($item["button_text_$lang"])){ ?>
                    <p class="ms-layer text-center full-width margin-top"
                       style="top:410px;right:0;"
                       data-type="text"
                       data-delay="2500"
                       data-ease="easeOutExpo"
                       data-duration="1230"
                       data-effect="bottom(250)"><a href="<?= $item["button_link"]?>" class="btn btn-radius2 rounded-0  btn-xs text-uppercase">
                            <?= $item["button_text_$lang"]?>
                        </a></p>
                <?php }?>


            </div>
        <?php }?>

    </div>
</div>


<!-- Courses -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 mx-auto text-center">
                <h2 class="mb-3 text-uppercase font-weight-bold">
                    <?=$home_page_services_text["title_$lang"]?>
                </h2>

                <div class="divider"></div>

                <br>
                <?=$home_page_services_text["desc_$lang"]?>

            </div>
        </div>

        <div class="row">

            <?php foreach ($home_page_services as $item){ ?>
                <div class="col-lg-4 col-md-6 mx-auto mb-4">
                    <div class="media box-shadow1 p-4 py-5">
                        <div class="d-flex mr-2">
                            <img width="40px" height="37px" style="object-fit: cover" src="<?= base_url("uploads/home_page_services/$item[img]")?>" alt="">
                        </div>
                        <div class="media-body">
                            <h6 class="font-weight-bold text-uppercase">
                                <?= $item["title_$lang"]?>
                            </h6>
                            <?= $item["desc_$lang"]?>
                        </div>
                    </div>
                </div>
            <?php }?>

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

<!-- Course -->
<section class="course">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 mx-auto text-center">
                <h2 class="mb-3 text-uppercase font-weight-bold">
                    <?=$home_page_courses_text["title_$lang"]?>
                </h2>
                <div class="divider"></div>

                <br>
                <?=$home_page_courses_text["desc_$lang"]?>

            </div>
        </div>

        <div class="row">
            <div class="card-group">

                <?php foreach ($courses as $item) { ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="card c_course" style="cursor: pointer" data-url="<?=base_url("$lang/course/$item[id]")?>">
                            <img class="card-img-top" src="<?=base_url("uploads/courses/$item[img]")?>" alt="Card image cap">
                            <div class="card-body">
                                <h6 class="text-uppercase font-weight-bold m-0 mb-3">
                                    <?=$item["name_$lang"]?>
                                </h6>
<!--                                <div class="font-italic py-2 font-weight-bold orange">Henry H. Garrick, Teacher</div>-->
                                <p class="card-text">
                                    <?=$item["wider_desc_$lang"]?>

                                </p>
                            </div>
                            <div class="card-footer">
                                <ul class="list-inline m-0">
                                    <li class="list-inline-item"><i class="fa fa-group fa-1x"></i><strong>
                                            <?=$item["size"]?>
                                    </strong></li>


                                    <li class="list-inline-item ml-4"><i class="fa fa-child"></i> <strong>
                                            <?=$item["age"]?>
                                        </strong></li>
                                    <li class="list-inline-item float-right"><i class="fa fa-money"></i>
                                        <strong>
                                            <?=$item["price"]?>
                                        </strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php }?>

            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="image-bg">
    <div class="background-image-maker"></div>
    <div class="holder-image">
        <img src="<?= base_url("uploads/home_page_happy_clients_text/$home_page_happy_clients_text[img]")?>" alt="" class="img-fluid">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 mx-auto text-center">
                <h2 class="mb-3 text-uppercase font-weight-bold text-white">
                    <?=$home_page_happy_clients_text["title_$lang"]?>
                </h2>
                <div class="divider"></div>

                <br>
                <?=$home_page_happy_clients_text["desc_$lang"]?>

            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <div id="testimonial-slider" class="owl-carousel">

                    <?php foreach ($client_reviews as $item) { ?>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="<?= base_url("uploads/client_reviews/$item[img]")?>" alt="">
                            </div>
                            <p class="description">
                                <?= $item["desc_$lang"]?>
                            </p>
                            <h3 class="testimonial-title"><?= $item["name_$lang"]?></h3>
                        </div>
                    <?php }?>


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

<!-- News Section -->
<section class="news">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 mx-auto text-center">
                <h2 class="mb-3 text-uppercase font-weight-bold">
                    <?=$home_page_news_text["title_$lang"]?>
                </h2>
                <div class="divider"></div>

                <br>
                <?=$home_page_news_text["desc_$lang"]?>

            </div>
        </div>

        <div class="row">

            <?php foreach ($news as $item){ ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="<?= base_url("uploads/news/$item[img]")?>" class="img-fluid" alt="Blog images">
                        <div class="card-body">
                            <h6 class="card-title text-uppercase font-weight-bold">
                                <?=$item["title_$lang"]?>
                            </h6>
                            <ul class="list-inline font-italic orange mb-1">
                                <li class="list-inline-item"><i class="fa fa-calendar"></i><span>
                                    <?=$item["date"]?>
                                </span></li>
                                <li class="list-inline-item"><i class="fa fa-pencil"></i><span>
                                    <?=$item["author"]?>
                                </span></li>
                            </ul>
                            <p>
                                <?=$item["wider_desc_$lang"]?>
                            </p>
                            <a class="btn btn-radius2 font-weight-normal py-2 px-3" href="<?=base_url("$lang/news/$item[id]")?>">
                                Etrafli
                            <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            <?php }?>

        </div>
    </div>
</section>