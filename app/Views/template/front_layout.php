<?php
$locale = service('request')->getLocale();
?>
<!DOCTYPE html>
<html lang="<?= $locale ?>">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= lang('Landing.title') ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url(); ?>/depan/assets/img/favicon.png" rel="icon">
    <link href="<?= base_url(); ?>/depan/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>/depan/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/depan/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/depan/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/depan/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/depan/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/depan/assets/vendor/remixicon/remixicon.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url(); ?>/depan/assets/css/main.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/depan/assets/css/login.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/depan/assets/scss/option.scss" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <!-- =======================================================
  * Template Name: Nova - v1.2.0
  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active {
            opacity: 1;
        }

        .step.finish {
            background-color: #04AA6D;
        }

        .opt_input input[type="radio"] {
            display: none;
        }

        .opt_input label {
            position: relative;
            color: #1b2f45;
            font-family: "Montserrat", sans-serif;
            border: 2px solid #1b2f45;
            border-radius: 20px;
            padding: 20px 10px;
            display: flex;
            align-items: center;
            min-width: 200px;
            text-align: center;
        }

        .opt_input input[type="radio"]:checked+label {
            background-color: #1b2f45;
            color: white;
            font-weight: bold;
            border: 4px solid orange;
        }

        .btn-buatanku {
            font-family: var(--font-default);
            font-weight: 500;
            font-size: 16px;
            letter-spacing: 1px;
            display: inline-block;
            padding: 12px 40px;
            border-radius: 50px;
            transition: 0.5s;
            margin: 10px;
            color: #fff;
            background: #2aa5df;
        }

        .small-text {
            font-size: 13px;
            font-style: italic;
            color: #2aa5df;
            margin-top: 0px;
            padding-top: 0px;
        }

        @media only screen and (max-width: 700px) {
            .paling_atas {
                margin-top: 20px;
            }
        }
    </style>
</head>

<body class="page-index">

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="<?=base_url($locale)?>" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="<?= base_url(); ?>/depan/assets/img/logo.png" alt=""> -->
                <h1 class="d-flex align-items-center">InI.expert</h1>
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="<?=base_url($locale)?>#hero" class="active"><?= lang('Landing.home') ?></a></li>
                    <li><a href="<?=base_url($locale)?>#about-us"><?= lang('Landing.about') ?></a></li>
                    <li><a href="<?=base_url($locale)?>#our-services"><?= lang('Landing.services') ?></a></li>
                    <li><a href="<?=base_url($locale)?>#instrument-list"><?= lang('Landing.instruments') ?></a></li>
                    <li><a href="<?=base_url($locale)?>#contact"><?= lang('Landing.contact') ?></a></li>
                    <li><a href="<?=base_url($locale)?>/home/riwayat-netizen"><?= lang('Landing.my_account') ?></a></li>
                    <li><a href="<?=base_url($locale)?>/auth/hal_muasok/0"><?= lang('Landing.sign_in') ?></a></li>
                    <li id="toggle-language" class="dropdown">
                        <a id="a_dropdown" href="#">
                            <img src="<?= base_url(); ?>/global/in.gif" alt="" srcset="">
                            &nbsp;<span>Indonesia</span> <i class="bi bi-chevron-down dropdown-indicator"></i>
                        </a>
                        <ul>
                            <li><a href="#"> <span class="option-lang"><img src="<?= base_url(); ?>/global/in.gif" style="margin-right:5px" alt="" srcset="">Indonesia</span></a></li>
                            <li><a href="#"> <span class="option-lang"><img src="<?= base_url(); ?>/global/en.gif" style="margin-right:5px" alt="" srcset="">English</span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <?= $this->renderSection("konten"); ?>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-2 col-6 footer-links text-center text-md-start">
                        <img style="max-width: 130px;" src="https://www.ums.ac.id/wp-content/uploads/2021/12/Resmi_Logo_UMS_Color.png" alt="">
                    </div>
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span>Psikologi UMS</span>
                        </a>
                        <p>
                            Fakultas Psikologi,
                            Universitas Muhammadiyah Surakarta

                            Gedung Psikologi Kampus 2 – Pabelan
                            Jl. A Yani, Pabelan, Kartasura, Surakarta 57162, Jawa Tengah – Indonesia
                        </p>
                        <div class="social-links d-flex  mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>


                    <div class="col-lg-2 col-6 footer-links">
                        <h4><?= lang('Landing.title_service') ?></h4>
                        <ul>
                            <li><i class="bi bi-dash"></i> <a href="#">Self-Assessment</a></li>
                            <li><i class="bi bi-dash"></i> <a href="#">For Research</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4><?= lang('Landing.contact_us') ?></h4>
                        <p>
                            <strong>Phone:</strong> +62 271-717417 ext. 3404<br>
                            <strong>Email:</strong> psikologi@ums.ac.id<br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div id="contact" class="footer-legal">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Puslogin UMS</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nova-bootstrap-business-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?= base_url(); ?>/depan/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/depan/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url(); ?>/depan/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url(); ?>/depan/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url(); ?>/depan/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>/depan/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url(); ?>/depan/assets/js/main.js"></script>

</body>

</html>
<script>
    function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
</script>
<script>
    if (getCookie('language') == ""){
        document.cookie = `language=id`;
    }
    console.log(getCookie('language'))

    const id = `<a href="#">
                        <img src="<?= base_url(); ?>/global/in.gif" alt="" srcset=""> 
                        &nbsp;<span>Indonesia</span> <i class="bi bi-chevron-down dropdown-indicator"></i>
                    </a>
                    <ul>
                        <li><a href="#"> <span class="option-lang"><img src="<?= base_url(); ?>/global/in.gif" style="margin-right:5px" alt="" srcset="">Indonesia</span></a></li>
                        <li><a href="#"> <span class="option-lang"><img src="<?= base_url(); ?>/global/en.gif" style="margin-right:5px" alt="" srcset="">English</span></a></li>
                    </ul>`

    const en = `<a href="#">
                    <img src="<?= base_url(); ?>/global/en.gif" alt="" srcset=""> 
                    &nbsp;<span>English</span> <i class="bi bi-chevron-down dropdown-indicator"></i>
                </a>
                <ul>
                    <li><a href="#"> <span class="option-lang"><img src="<?= base_url(); ?>/global/in.gif" style="margin-right:5px" alt="" srcset="">Indonesia</span></a></li>
                    <li><a href="#"> <span class="option-lang"><img src="<?= base_url(); ?>/global/en.gif" style="margin-right:5px" alt="" srcset="">English</span></a></li>
                </ul>`
                
    const lang_url = `<?=$locale?>`
    document.cookie = `language=${lang_url}`;
    if (getCookie('language') == 'en' || lang_url == 'en' ) {
        $('#toggle-language').html(en)
        
    } else {
        $('#toggle-language').html(id)

    }


    $('#toggle-language').on('click', function(e) {
        e.preventDefault();
        const language_option = $(e.target)
        if (language_option[0].className == "option-lang"){
            const language = ($(e.target).text() == 'Indonesia') ? 'id' : 'en'
            document.cookie = `language=${language}`;

            const url_reload = location.origin
            if (language == 'en') {
                window.location.href = `${url_reload}/en`
            } else if (language == 'id') {
                window.location.href = `${url_reload}/id`
            }
        }



    });
</script>
<?= $this->renderSection("js_page"); ?>
