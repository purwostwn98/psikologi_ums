<?= $this->extend("/template/front_layout.php"); ?>
<?= $this->section("konten"); ?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?= base_url(); ?>/depan/image/edutorium_ums.jpeg');">
        <div class="container position-relative d-flex flex-column align-items-center">
            <h3 style="color: white;">Sexual Orientation Scale</h3>
        </div>
    </div><!-- End Breadcrumbs -->

    <section id="services-list" class="services-list" style="padding-top: 40px;">
        <div class="container" data-aos="fade-up">
            <p>
                This is instrument's description. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore voluptas rem culpa, eius tempora totam magni ducimus alias veritatis velit nisi in odit. Perspiciatis voluptas illo vel maiores? Deserunt, reiciendis?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi nihil voluptas quam perspiciatis, libero, consectetur possimus, error necessitatibus blanditiis neque magnam dolorem obcaecati cupiditate autem velit aliquam qui officiis soluta!
            </p>
            <br>
            <p class="text-center"><a href="/home/quiz" class="btn btn-buatanku">Take the Free Survey</a></p>
        </div>
    </section><!-- End Our Services Section -->



</main><!-- End #main -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<?= $this->endSection(); ?>