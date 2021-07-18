<?php $lang = $this->session->userdata("lang")?>

<style>
    .grid {
        column-count: 4;
        column-gap: 1em;
        max-width: 1200px;
        margin: auto;
        width: 100%;
    }
    .grid__item{
        margin-bottom: 1em;
        cursor: pointer;
    }

    img {
        height: auto;
        max-width: 100%;
    }

    @media(max-width: 800px) {
        .grid {
            column-count: 3;
        }
    }

    @media(max-width: 600px) {
        .grid {
            column-count: 2;
        }
    }

    @media(max-width: 400px) {
        .grid {
            column-count: 1;
        }
    }
</style>


<!-- Inner Banner -->
<div class="inner-page-banner-area" style="background-image: url('<?=base_url("uploads/news_page_background/$news_page_background[img]")?>')">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-12 mx-auto text-center">
                <h2 class="font-weight-bold text-uppercase display-4 text-white">
                    <?=$news_page_background["title_$lang"]?>
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

<!-- News & Blog Section -->
<section class="news">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <img  src="<?=base_url("uploads/news/$news_single[img]")?>" class="img-fluid" alt="Blog images">
                <h6 class="text-uppercase font-weight-bold p-0 mt-4"><a href="#">
                        <?=$news_single["title_$lang"]?>
                    </a></h6>
                <ul class="list-inline m-0">
                    <li class="list-inline-item"><i class="fa fa-calendar"></i><span> <?=$news_single["date"]?></span></li>
                    <li class="list-inline-item"><i class="fa fa-pencil"></i><span> <?=$news_single["author"]?></span></li>
                    <li class="list-inline-item"><i class="fa fa-list-alt"></i><span> <?=$news_category["name_$lang"]?></span></li>
                </ul>

                <?=$news_single["desc_$lang"]?>

                <?php if (!empty($news_gallery)) { ?>
                    <hr>
                    <h6 class="text-uppercase">Gallery</h6>
                    <hr>

                    <div>
                        <div class="grid" id="lightgallery">

                            <?php foreach ($news_gallery as $item) { ?>
                                <div href="<?=base_url("uploads/news_gallery/$item[file]")?>" class="grid__item"><img src="<?=base_url("uploads/news_gallery/$item[file]")?>"</a></div>
                            <?php }?>

                        </div>
                    </div>
                <?php }?>


            </div>
        </div>
    </div>
</section>