<?php $lang = $this->session->userdata("lang")?>

<!-- Footer Section -->
<section class="footer">
    <div class="container">
        <div class="row animatedParent animateOnce animateOnce">
            <div class="col-lg-4 col-md-6">
                <h5 class="text-uppercase text-white">
                    <?=$footer["title_$lang"]?>
                </h5>
                <p><?=$footer["desc_$lang"]?></p>
                <h6 class="text-white">
                    Bizi izleyin
                </h6>
                <ul class="list-inline">
                    <li class="list-inline-item pr-2"><a href="<?=$social["facebook"]?>" class="text-white"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li class="list-inline-item pl-2 pr-2"><a href="<?=$social["youtube"]?>" class="text-white"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    <li class="list-inline-item pl-2 pr-2"><a href="<?=$social["instagram"]?>" class="text-white"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>


            <div class="col-lg-4 col-md-6">
                <h5 class="text-uppercase text-white">Useful Links</h5>
                <ul class="list-inline">
                    <li class="list-block-item"><span class="ti-angle-double-right"></span> <a href="#"> Home</a></li>
                    <li class="list-block-item"><span class="ti-angle-double-right"></span> <a href="#"> About Us</a></li>
                    <li class="list-block-item"><span class="ti-angle-double-right"></span> <a href="#"> Courses</a></li>
                    <li class="list-block-item"><span class="ti-angle-double-right"></span> <a href="#"> Teachers</a></li>
                    <li class="list-block-item"><span class="ti-angle-double-right"></span> <a href="#"> Contact Us</a></li>
                </ul>
            </div>


            <div class="col-lg-4 col-md-6">

                <h5 class="text-uppercase text-white">Instagram </h5>
                <ul class="list-inline">

                    <?php foreach ($footer_gallery as $item){ ?>
                        <li class="list-inline-item mb-2"><a href="<?=$item["link"]?>" target="_blank" title=""><img width="55px" height="55px" style="object-fit: cover" src="<?=base_url("uploads/footer_gallery/$item[img]")?>" class="rounded" alt="" /></a></li>
                    <?php }?>

                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 text-left">
                <?=$footer["copyright_$lang"]?>
            </div>
            <div class="col-lg-6 col-md-6 text-right">
                <ul class="linst-inline">
                    <li class="list-inline-item"><a href="#">Privacy</a></li>
                    <li class="list-inline-item"><a href="#">Terms & Conditions</a></li>
                    <li class="list-inline-item"><a href="#">Sitemap</a></li>
                    <li class="list-inline-item"><a href="#">Purchase</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

