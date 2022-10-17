<?= $this->extend("/template/front_layout.php"); ?>
<?= $this->section("konten"); ?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?= base_url(); ?>/depan/assets/img/blog/blog-inside-post.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center">
            <h3 style="color: white;">My Survey Results and Reports</h3>
        </div>
    </div><!-- End Breadcrumbs -->

    <section id="services-list" class="services-list" style="padding-top: 40px;">
        <div class="container" data-aos="fade-up">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Taken On</th>
                        <th>Survey Name</th>
                        <th>Score</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>8/17/2022</td>
                        <td>Sexual Orientation Scale</td>
                        <td>28 (Low)</td>
                        <td><a href="/home/hasil-survei" class="btn btn-info text-white">Open Detail</a></td>
                    </tr>
                    <tr>
                        <td>9/01/2022</td>
                        <td>Religious Harmony Scale</td>
                        <td>67 (Medium)</td>
                        <td><a href="/home/hasil-survei" class="btn btn-info text-white">Open Detail</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section><!-- End Our Services Section -->



</main><!-- End #main -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
<?= $this->endSection(); ?>