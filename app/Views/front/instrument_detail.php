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
                <?= $deskripsi; ?>
            </p>
            <br>
            <p class="text-center"><a href="/home/quiz?instrument=<?= $id_instrument; ?>" class="btn btn-buatanku">Take the Free Survey</a></p>
        </div>
    </section><!-- End Our Services Section -->



</main><!-- End #main -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<?= $this->endSection(); ?>