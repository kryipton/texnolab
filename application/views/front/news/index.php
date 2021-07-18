<?php $lang = $this->session->userdata("lang")?>

<!-- Inner Banner -->
<div class="inner-page-banner-area" style="background-image: url('<?=base_url("uploads/news_page_background/$news_page_background[img]")?>')">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-12 mx-auto text-center">
                <h2 class="font-weight-bold text-uppercase display-4 text-white">
                    <?=$news_page_background["title_$lang"]?>
                </h2>
                <ol class="list-inline text-center">
                    <li class="list-inline-item"><a href="#">Home </a> &nbsp; / </li>
                    <li class="list-inline-item active">News  </li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- News & Blog Section -->
<section class="news">
    <div class="container">
        <div class="row" id="c_container">

            <?php foreach ($news as $item) { ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img src="<?=base_url("uploads/news/$item[img]")?>" class="img-fluid" alt="Blog images">
                        <div class="card-body">
                            <h6 class="card-title text-uppercase font-weight-bold">
                                <?=$item["title_$lang"]?>
                            </h6>
                            <ul class="list-inline italic">
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
                            <a class="btn btn-radius2 font-weight-normal py-2 px-3" href="<?=base_url("$lang/news/$item[id]")?>">Etrafli <i class="fa fa-angle-double-right"></i></a>						</div>
                    </div>
                </div>
            <?php }?>


        </div>
    </div>
</section>


<script>
    let last_id = <?=$last_id?>

    $(window).scroll(function() {
        if($(window).scrollTop() == $(document).height() - $(window).height()) {
            $.get( "<?=base_url("$lang/news_get/")?>" + last_id, function( data ) {
                data = JSON.parse(data);
                last_id = data.last_id;

                $("#c_container").append(data.data);
            });
        }
    });
</script>