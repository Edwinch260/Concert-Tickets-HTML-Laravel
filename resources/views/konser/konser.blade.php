<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>www.Sisca Group Concert.com</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">

        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

        <link href="<?php echo url("konser");?>\css\bootstrap.min.css" rel="stylesheet">

        <link href="<?php echo url("konser");?>\css\bootstrap-icons.css" rel="stylesheet">

        <link href="<?php echo url("konser");?>\css\templatemo-leadership-event.css?x=2" rel="stylesheet">

<!--

TemplateMo 575 Leadership Event

https://templatemo.com/tm-575-leadership-event

-->
    </head>

    <body>

        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a href="index.html" class="navbar-brand mx-auto mx-lg-0">
                    <i class="bi-bullseye brand-logo"></i>
                    <span class="brand-text">Sisca <br> Group</span>
                </a>

                <a class="nav-link custom-btn btn d-lg-none" href="#">Buy Tickets</a>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <?php
                              $user=Session::get('user');
                        ?>

                        <?php
                            if ($user==null)
                            {
                                ?>
                                    <li class="nav-item">
                                        <a class="nav-link click-scroll" onclick="home2();">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link click-scroll" onclick="signin();">Sign In</a>
                                    </li>
                                    
                                <?php
                            }
                            else {
                                $role=$user->role;
                                if ($role=="Admin")
                                {
                                    ?>
                                        <li class="nav-item">
                                            <a class="nav-link click-scroll" onclick="konser();">Konser</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link click-scroll" onclick="transaksiadmin();">Transaksi</a>
                                        </li>

                                    <?php
                                }
                                else
                                {
                                    ?>
                                        <li class="nav-item">
                                                <a class="nav-link click-scroll" onclick="homeuser();">Home</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link click-scroll" onclick="transaksi();">Transaksi</a>
                                        </li>
                                    <?php
                                }
                                ?>

                                    <li class="nav-item">
                                        <a class="nav-link click-scroll" onclick="signout();">Sign out</a>
                                    </li>
                                <?php
                            }
                        ?>

                    </ul>
                <div>

            </div>
        </div></div></nav>
        @if(session()->has('warning'))
            <div class="container">
                <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-warning">

                            {{ session()->get('warning') }}

                    </div>
                </div>
                </div>
            </div>
            <br/>

        @endif
        @yield('main')

        <footer class="site-footer">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-12 col-12 border-bottom pb-5 mb-5">
                        <div class="d-flex">
                            <a href="index.html" class="navbar-brand">
                                <i class="bi-bullseye brand-logo"></i>
                                <span class="brand-text">Sisca <br> Group</span>
                            </a>
                            <div class="col-lg-5 col-12 ms-lg-auto">
                        <div class="copyright-text-wrap d-flex align-items-center">
                            <p class="copyright-text ms-lg-auto me-4 mb-0">Copyright © 2022  Sisca Group Co., Ltd.

                            <br>All Rights Reserved.


                            <a href="#section_1" class="bi-arrow-up arrow-icon custom-link"></a>
                        </div>
                    </div>

                           
                        </div>
                    </div>


                   
                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="<?php echo url("konser");?>\js\jquery.min.js"></script>
        <script src="<?php echo url("konser");?>\js\bootstrap.min.js"></script>
        <script src="<?php echo url("konser");?>\js\jquery.sticky.js"></script>
        <!--
        <script src="<?php echo url("konser");?>\js\click-scroll.js"></script>
                        -->
        <script src="<?php echo url("konser");?>\js\custom.js"></script>

        <script>
            function home2()
            {
                window.location="<?php echo url("");?>";
            }
            function home()
            {
                window.location="<?php echo url("home");?>";
            }
            function homeuser()
            {
                window.location="<?php echo url("homeuser");?>";
            }
            function konser()
            {
                window.location="<?php echo url("masterkonser");?>";
            }
            function signin()
            {
                window.location="<?php echo url("signin");?>"
                //alert("aa");
            }
            function transaksi()
            {
                window.location="<?php echo url("transaksi");?>"
                //alert("aa");
            }
            function transaksiadmin()
            {
                window.location="<?php echo url("transaksiadmin");?>"
                //alert("aa");
            }

            function signout()
            {
                window.location="<?php echo url("signout");?>"
                //alert("aa");
            }
            var previewFile = function(event,preview) {
                var output = document.getElementById(preview);
                output.src = URL.createObjectURL(event.target.files[0]);
                output.onload = function() {
                    URL.revokeObjectURL(output.src) // free memory
                }
            };

            function toMoney(num) {
                num=num*1;
                var p = num.toFixed(2).split(".");
                return "Rp " + p[0].split("").reverse().reduce(function(acc, num, i, orig) {
                return num + (num != "-" && i && !(i % 3) ? "," : "") + acc;
                }, "") + "." + p[1];
            }
            
        </script>


        @yield('js')

    </body>
</html>