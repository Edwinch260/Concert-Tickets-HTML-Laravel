@extends('konser/konser')
@section('main')
<main>

<section style="background:url('https://imgx.parapuan.co/crop/0x0:0x0/x/photo/2022/10/12/cara-nonton-konser-bts-yet-to-co-20221012121033.jpg')" class="hero" id="section_1">
    <div   class="container">
        <div class="row">

            <div class="col-lg-5 col-12 m-auto">
                <div class="hero-text">

                    <h1 class="text-white mb-4"><u class="text-info">Sisca</u> Group 2023</h1>

                    <div class="d-flex justify-content-center align-items-center">
                    <span class="date-text">
                    <?php for ($i=0;$i<count($temp);$i++)
                            {
                                if ($i==0)
                                {
                                    ?>
                                            <?php echo$temp[$i]->tanggal2;?> to 
                                    <?php
                                }
                                if($i==count($temp)-1)
                                {
                                    ?>
                                            <?php echo$temp[$i]->tanggal2;?>
                                    <?php
                                }
                                
                            }
                    ?>
                    </span>

                        <span class="location-text">Universitas PCU, SBY</span>
                    </div>

                    <a href="#section_2" class="custom-link bi-arrow-down arrow-icon"></a>
                </div>
            </div>
        </div>
    </div>

</section>




<section class="about section-padding" id="section_2">
    <div class="container">
        <div class="row">

            <div class="col-lg-10 col-12">
                <h2 class="mb-4">Our <u class="text-info">Story</u></h2>
            </div>

            <div class="col-lg-6 col-12">
                <h3 class="mb-3">Since 2022</h3>

                <p>
                Sisca Group, founded by entrepreneur Sisca, started as a local event management company and swiftly grew into a leading organizer of concerts for global icons like Coldplay. Their state-of-the-art venues are now sought-after destinations, contributing to the advancement of the music entertainment industry.</p>

                <a class="custom-btn custom-border-btn btn custom-link mt-3 me-3" href="#section_3">Meet The Team</a>

                <a class="custom-btn btn custom-link mt-3" href="#section_4">Check out Schedule</a>
            </div>

            <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                <h4>Where passion meets performance, Sisca Group orchestrates unforgettable moments, transforming dreams into global melodies</h4>

                <div class="avatar-group border-top py-5 mt-5">
                    
                </div>
            </div>

        </div>
    </div>
</section>


<section class="speakers section-padding" id="section_3">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12 d-flex flex-column justify-content-center align-items-center">
                <div class="speakers-text-info">
                    <h2 class="mb-4">Our <u class="text-info">Team</u></h2>

                    <p>Our team is dedicated to providing the best for all audiences</p>
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="speakers-thumb">
                    <img src="images\avatar\happy-asian-man-standing-with-arms-crossed-grey-wall.jpg" class="img-fluid speakers-image" alt="">

                    <small class="speakers-featured-text">Featured</small>

                    <div class="speakers-info">

                        <h5 class="speakers-title mb-0">Steven</h5>

                        <p class="speakers-text mb-0">CEO / Founder</p>

                        <ul class="social-icon">
                            <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="#" class="social-icon-link bi-google"></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="speakers-thumb speakers-thumb-small">
                            <img src="images\avatar\portrait-good-looking-brunette-young-asian-woman.jpg" class="img-fluid speakers-image" alt="">

                            <div class="speakers-info">
                                <h5 class="speakers-title mb-0">Sisca</h5>

                                <p class="speakers-text mb-0">Concert Planner</p>

                                <ul class="social-icon">
                                    <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                                    <li><a href="#" class="social-icon-link bi-instagram"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="speakers-thumb speakers-thumb-small">
                            <img src="images\avatar\senior-man-white-sweater-eyeglasses.jpg" class="img-fluid speakers-image" alt="">

                            <div class="speakers-info">
                                <h5 class="speakers-title mb-0">Surya</h5>

                                <p class="speakers-text mb-0">Promotor</p>

                                <ul class="social-icon">
                                    <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                                    <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="speakers-thumb speakers-thumb-small">
                            <img src="images\avatar\pretty-smiling-joyfully-female-with-fair-hair-dressed-casually-looking-with-satisfaction.jpg" class="img-fluid speakers-image" alt="">

                            <div class="speakers-info">
                                <h5 class="speakers-title mb-0">Evelyn</h5>

                                <p class="speakers-text mb-0">Decorator</p>

                                <ul class="social-icon">
                                    <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                                    <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                                    <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="speakers-thumb speakers-thumb-small">
                            <img src="images\avatar\indoor-shot-beautiful-happy-african-american-woman-smiling-cheerfully-keeping-her-arms-folded-relaxing-indoors-after-morning-lectures-university.jpg" class="img-fluid speakers-image" alt="">

                            <div class="speakers-info">
                                <h5 class="speakers-title mb-0">Carolyn</h5>

                                <p class="speakers-text mb-0">Backstage Operator</p>

                                <ul class="social-icon">
                                    <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                                    <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="schedule section-padding" id="section_4">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <h2 class="mb-5 text-center">Next <u class="text-info">Schedules</u></h2>

                <nav>
                    <div class="nav nav-tabs align-items-baseline" id="nav-tab" role="tablist">
                        
                        <?php
                            if (false)
                            {
                                
                            }

                            for ($i=0;$i<count($temp);$i++)
                            {
                                if ($i<4)
                                {
                                    ?>
                                            <button class="nav-link" id="nav-Day<?php echo $i;?>-tab" data-bs-toggle="tab" data-bs-target="#nav-Day<?php echo $i;?>" type="button" role="tab" aria-controls="nav-Day<? echo $i?>" aria-selected="false">
                                                <h3>
                                                    <span>Day <?php echo ($i+1);?></span>
                                                    <small><?php echo $temp[$i]->tanggal2;?></small>
                                                    <br/>
                                                    <ul>
                                                   
                                                    </ul>
                                                </h3>
                                            </button>
                                    <?php
                                }
                                
                            }
                        
                        ?>
                        
                    </div>
                </nav>

                <div class="tab-content mt-5" id="nav-tabContent">
                    
                    <?php
                        for ($i=0;$i<count($temp);$i++)
                        {

                            if ($i<4)
                            {
                                $extra="";
                                if ($i==0)
                                {
                                    //$extra="show active";
                                }
                                ?>
                                        <div class="tab-pane fade <?php echo $extra;?>" id="nav-Day<?php echo $i;?>" role="tabpanel" aria-labelledby="nav-Day<?php echo $i;?>-tab">
                                            <div class="row border-bottom pb-5 mb-5">
                                            
                                                <!--awal-->
                                                    <?php
                                                    
                                                        for ($j=0;$j<count($temp[$i]->konser);$j++)
                                                        {
                                                            $detail=$temp[$i]->konser[$j];
                                                            ?>
                                                                <div class="col-lg-4 col-12">
                                                                    <img src="<?php echo url("konser\upload\\");?><?php echo $detail->Gambar;?>" class="schedule-image img-fluid" alt="">
                                                                </div>

                                                                <div class="col-lg-8 col-12 mt-3 mt-lg-0">

                                                                    <h4 class="mb-2"><?php echo $detail->Nama;?></h4>

                                                                    <p><?php echo $detail->Deskripsi;?></p>

                                                                    <div class="d-flex align-items-center mt-4">
                                                                     

                                                                        <span class="mx-3 mx-lg-5">
                                                                            <i class="bi-clock me-2"></i>
                                                                            <?php echo date("H:i",strtotime($detail->JamMulai))." s/d ".date("H:i",strtotime($detail->JamBerakhir));?>
                                                                        </span>

                                                                        <span class="mx-1 mx-lg-5">
                                                                            <i class="bi-layout-sidebar me-2"></i>
                                                                            Petra Christian Univeristy
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            <?php
                                                        }
                                                    ?>
                                                    

                                               
                                                <!--akhir-->

                                        
                                            </div>
                                        </div>
                                <?php
                            }
                            
                        }
                        
                    ?>
                  
                </div>
            </div>

        </div>
    </div>
</section>



<section class="call-to-action section-padding">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-7 col-12">
                <h2 class="text-white mb-4">Become a part of <u class="text-info">Sisca Group?</u></h2>

                <p class="text-white">Sisca Group is committed to delivering the best experience for all prospective audience members</p>
            </div>

            <div class="col-lg-3 col-12 ms-lg-auto mt-4 mt-lg-0">
                <a href="<?php echo url("register");?>" class="custom-btn btn">Register Today</a>
            </div>

        </div>
    </div>
</section>


<section class="venue section-padding" id="section_6">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <h2 class="mb-5">Here you go <u class="text-info">Venue</u></h2>
            </div>

            <div class="col-lg-6 col-12">
                <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.127665659567!2d112.73498897476122!3d-7.339557192669013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb4867925b0b%3A0xd06ae2d4f0af3f59!2sPetra%20Christian%20University!5e0!3m2!1sen!2sid!4v1702718831427!5m2!1sen!2sid" width="100%" height="371.59" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                <div class="venue-thumb bg-white shadow-lg">

                    <div class="venue-info-title">
                        <h2 class="text-white mb-0">Universitas Kristen Petra</h2>
                    </div>

                    <div class="venue-info-body">
                        <h4 class="d-flex">
                            <i class="bi-geo-alt me-2"></i>
                            <span>Jl. Siwalankerto No.121-131, Siwalankerto, Kec. Wonocolo, Surabaya, Jawa Timur 60236</span>
                        </h4>

                        <h5 class="mt-4 mb-3">
                            <a href="mailto:hello@yourgmail.com">
                                <i class="bi-envelope me-2"></i>
                                pcu@company.com
                            </a>
                        </h5>

                        <h5 class="mb-0">
                            <a href="tel: 305-240-9671">
                                <i class="bi-telephone me-2"></i>
                                081-252-693-305
                            </a>
                        </h5>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



</main>
@endsection