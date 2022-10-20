<?= $this->extend("/template/back_layout.php"); ?>
<?= $this->section("konten"); ?>
<div class="page-content container bg-white">
    <div class="page-header border-0 justify-content-between">
        <h1 class="text-grey-d1 pb-0 mb-0 text-130">
            Sexual Orientation Scale
        </h1>
        <div class="page-tools pt-1 mt-3 mt-sm-0 mb-sm-n1"></div>
    </div>
    <!-- stat boxes -->
    <div class="row gy-4 aos-init aos-animate" data-aos="fade-up">
        <div class="col-lg-4">
            <canvas id="myChart"></canvas>
        </div>
        <div class="col-lg-8">
            <div class="content ps-lg-5">
                <h3 class="pb-0 mb-0">Purwo Setiawan</h3>
                <span style="font-size:12px; font-weight: bold;">Score: 10 (Low)</span>
                <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                </p>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12">
            <div class="row">
                <div class="col-md-12 bg-white" style="font-size: 13px">
                    <div class="table-responsive-md">
                        <table id="datatable" class="table table-border-y text-dark-m2 text-95 border-y-1 brc-secondary-l1">
                            <thead class="text-secondary-m2 text-uppercase text-85">
                                <tr>
                                    <th class="border-0 bgc-h-default-l3">No.</th>
                                    <th class="border-0 bgc-h-default-l3">Question</th>
                                    <th class="border-0 bgc-h-default-l3">Answer Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="d-style bgc-h-default-l4">
                                    <td>
                                        <span class="text-105">1</span>
                                    </td>
                                    <td>
                                        <span class="text-105">Secara seksual, saya lebih tertarik memperhatikan penampilan lawan jenis dibandingkan penampilan sesama jenis</span>
                                    </td>
                                    <td>
                                        <span class="text-105">2</span>
                                    </td>
                                </tr>
                                <tr class="d-style bgc-h-default-l4">
                                    <td>
                                        <span class="text-105">2</span>
                                    </td>
                                    <td>
                                        <span class="text-105">Ketika berada di dekat orang sejenis (laki-laki dekat dengan laki-laki, perempuan dekat dengan perempuan) yang wajahnya cakep (tampan/cantik) jantung saya terasa berdetak lebih kencang</span>
                                    </td>
                                    <td>
                                        <span class="text-105">2</span>
                                    </td>
                                </tr>
                                <tr class="d-style bgc-h-default-l4">
                                    <td>
                                        <span class="text-105">3</span>
                                    </td>
                                    <td>
                                        <span class="text-105">Ketika berjabat tangan dengan orang sejenis yang wajahnya cakep, saya memegang tangannya lebih erat</span>
                                    </td>
                                    <td>
                                        <span class="text-105">3</span>
                                    </td>
                                </tr>
                                <tr class="d-style bgc-h-default-l4">
                                    <td>
                                        <span class="text-105">etc.</span>
                                    </td>
                                    <td>
                                        <span class="text-105">...</span>
                                    </td>
                                    <td>
                                        <span class="text-105">..</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="<?= base_url(); ?>/application/views/default/pages/partials/table-datatables/@page-script.js"></script>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const data = {
        labels: [
            'Score',
            '-'
        ],
        datasets: [{
            label: 'Score',
            data: [10, 40],
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
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
<?= $this->endSection(); ?>