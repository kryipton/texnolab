<?php $lang = $this->session->userdata("lang")?>


<!-- Inner Banner -->
<div class="inner-page-banner-area" style="background-image: url('<?=base_url("uploads/news_page_background/$contact_page_background[img]")?>')">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-12 mx-auto text-center">
                <h2 class="font-weight-bold text-uppercase display-4 text-white">
                    <?=$contact_page_background["title_$lang"]?>
                </h2>
                <ol class="list-inline text-center">
                    <li class="list-inline-item"><a href="#">Home </a> / </li>
                    <li class="list-inline-item active">Contact  </li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">

                <h2 class="mb-3 text-uppercase font-weight-bold">
                    Contact US
                </h2>

                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6076.041870630613!2d49.860712!3d40.408387000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xce33ae0f551adedb!2sTexnoLab%20MMC!5e0!3m2!1sru!2sus!4v1626250021376!5m2!1sru!2sus" width="600" height="450" style="border:0; width: 90%!important;" allowfullscreen="" loading="lazy"></iframe>

                <div class="team-social1 ml-0 mt-1">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="<?=$social["facebook"]?>" class="rounded"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="<?=$social["youtube"]?>"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="<?=$social["instagram"]?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>

            </div>

            <div class="col-lg-4 col-md-6 text-center">
                <div class="bg-light py-4 px-3 border-top mb-5">
                    <i class="fa fa-envelope-o fa-3x"></i>
                    <ul class="inline-item">
                        <li class="list-inline-item"><strong>Email Address: </strong> <a href="#"><?=$contact["email"]?></a></li>
                    </ul>
                </div>

                <div class="bg-light py-4 px-3 border-top mb-5">
                    <i class="fa fa-phone fa-3x"></i>
                    <div class="space20"></div>
                    <p><strong>Phone Number:</strong> <a href="#"><?=$contact["phone"]?></a><br />
                </div>

                <div class="bg-light py-4 px-3 border-top">
                    <h6 class="font-weight-bold text-uppercase">Our Address </h6>
                    <i class="fa fa-map-marker fa-3x"></i>
                    <div class="space20"></div>
                    <?=$contact["address_$lang"]?>

                </div>
            </div>
        </div>
    </div>
</section>
