<?= $this->extend("/template/front_layout.php"); ?>
<?php
$locale = service('request')->getLocale();
?>
<?= $this->section("konten"); ?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?= base_url(); ?>/depan/image/edutorium_ums.jpeg');">
        <div class="container position-relative d-flex flex-column align-items-center">
            <h3 style="color: white;"><?= $data_instrument['nama_instrument']; ?></h3>
        </div>
    </div><!-- End Breadcrumbs -->

    <section id="services-list" class="services-list" style="padding-top: 40px;">
        <div class="container" id="section_container" data-aos="fade-up">
            <p>
                <?= $data_instrument['deskripsi_instrument']; ?>
            </p>
            <br>
            <p class="text-center"><button id="btn_take_survei" class="btn btn-buatanku">Take the Free Survey</button></p>
        </div>
    </section><!-- End Our Services Section -->



</main><!-- End #main -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>


<?= $this->endSection(); ?>

<?= $this->section("js_page"); ?>
<script>
    $('#btn_take_survei').on('click', function () {
        if (lang_url == 'en') {
            $('#section_container').html(`
            <h5> Questionnaire Filling Instructions</h5>
            <ol>
                <li>Questionnaire Filling Instructions </li>
                <li>Choose one of the alternative answers that you think fits your situation. <br>
                </li>
    
                <li>All alternative answers are not true/false as long as they suit your situation. </li>
                <li>You are expected to answer all statements to completion. Don't miss anything</li>
                <li>All of your answers are kept confidential.</li>
                <li>The seriousness of choosing an alternative answer that suits your situation will determine the validity of the measurement.</li>
            </ol>
            <br>
            <h5 class="text-center">Voluntarily and without any coercion to fill out this questionnaire, and agree that the results are used for research purposes.</h5>
            <br>
            <p class="text-center">
                <a style="min-width: 207px; background-color: #8dadbd;" href="/" class="btn btn-buatanku">Not ready</a>
                <a style="min-width: 207px; background-color: #2aa5df;" href="<?=base_url()?>/<?=$locale?>/home/quiz?instrument=<?= $id_instrument; ?>" class="btn btn-buatanku">Ready</a>
            </p>
            `)

        }else{
            $('#section_container').html(`
            <h5> Petunjuk Pengisian Kuesioner</h5>
            <ol>
                <li>Di dalam skala ini akan disajikan sejumlah pernyataan, bacalah setiap pernyataan dengan cermat. </li>
                <li>Pilihlah salah satu alternatif jawaban yang menurut anda sesuai dengan keadaan anda. <br>
                </li>
    
                <li>Semua alternatif jawaban tidak bernilai benar/salah selama itu sesuai dengan keadaan diri anda . </li>
                <li>Anda diharapkan untuk menjawab semua pernyataan sampai dengan selesai. Jangan sampai ada yang terlewat</li>
                <li>Seluruh jawaban anda dijamin kerahasiaannya.</li>
                <li>Kesungguhan memilih alternatif jawaban yang sesuai dengan keadaan diri anda sangat menentukan validitas pengukuran.</li>
            </ol>
            <br>
            <h5 class="text-center">Dengan sukarela dan tanpa paksaan apapun untuk mengisi kuisoner ini, dan menyetujui hasilnya digunakan untuk kepentingan penelitian.</h5>
            <br>
            <p class="text-center">
                <a style="min-width: 207px; background-color: #8dadbd;" href="/" class="btn btn-buatanku">Tidak bersedia</a>
                <a style="min-width: 207px; background-color: #2aa5df;" href="<?=base_url()?>/<?=$locale?>/home/quiz?instrument=<?= $id_instrument; ?>" class="btn btn-buatanku">Bersedia</a>
            </p>
            `)
        }

    })
</script>
<?= $this->endSection(); ?>
