<?= $this->extend("/template/front_layout.php"); ?>
<?= $this->section("konten"); ?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?= base_url(); ?>/depan/image/edutorium_ums.jpeg');">
        <div class="container position-relative d-flex flex-column align-items-center">
            <h3 style="color: white;">Sexual Orientation Scale</h3>
        </div>
    </div><!-- End Breadcrumbs -->

    <section id="about" class="about">
        <div class="container aos-init aos-animate" data-aos="fade-up">

            <div class="row gy-4 aos-init aos-animate" data-aos="fade-up">
                <div class="col-lg-4">
                    <canvas id="myChart"></canvas>
                </div>
                <div class="col-lg-8">
                    <div class="content ps-lg-5">
                        <h3 class="pb-0 mb-0">Low</h3>
                        <span class="small-text">Your Score: 28</span>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



</main><!-- End #main -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const data = {
        labels: [
            'Your Score',
            '-'
        ],
        datasets: [{
            label: 'Your Score',
            data: [28, 10],
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)'
            ],
            hoverOffset: 4
        }]
    };

    const config = {
        type: 'doughnut',
        data: data,
    };
</script>
<script>
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>
<?= $this->endSection(); ?>