<?= $this->extend("/template/back_layout.php"); ?>
<?= $this->section("konten"); ?>
<div class="page-content container bg-white">
    <div class="page-header border-0 justify-content-between">
        <h1 class="page-title text-primary-d2">
            Respondents
            <small class="page-info text-secondary-d2">
                <i class="fa fa-angle-double-right text-80"></i>
                Sexual Orientation Scale
            </small>
        </h1>
    </div>
    <hr class="my-3">

    <!-- stat boxes -->
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-md-12 bg-white" style="font-size: 13px">
                    <div class="table-responsive-md">
                        <table id="datatable" class="table table-border-y text-dark-m2 text-95 border-y-1 brc-secondary-l1">
                            <thead class="text-secondary-m2 text-uppercase text-85">
                                <tr>
                                    <th class="border-0 bgc-h-default-l3">No.</th>
                                    <th class="border-0 bgc-h-default-l3">Taken on</th>
                                    <th class="border-0 bgc-h-default-l3">Name</th>
                                    <th class="border-0 bgc-h-default-l3">Scor</th>
                                    <th class="border-0 bgc-h-default-l3">Label</th>
                                    <th class="border-0 bgc-h-default-l3">Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="d-style bgc-h-default-l4">
                                    <td>
                                        <span class="text-105">1</span>
                                    </td>
                                    <td>
                                        <span class="text-105">9/18/2021</span>
                                    </td>
                                    <td>
                                        <span class="text-105">Purwo Setiawan</span>
                                    </td>
                                    <td>
                                        <span class="text-105">10</span>
                                    </td>
                                    <td>
                                        <span class="text-105">Low</span>
                                    </td>
                                    <td>
                                        <a data-rel="tooltip" title="Lihat Detail" href="/admin/detail-responden"><i class="fa fa-eye text-blue-m1 text-120"></i> Detail</a>
                                    </td>
                                </tr>
                                <tr class="d-style bgc-h-default-l4">
                                    <td>
                                        <span class="text-105">2</span>
                                    </td>
                                    <td>
                                        <span class="text-105">9/30/2021</span>
                                    </td>
                                    <td>
                                        <span class="text-105">Michael Tela</span>
                                    </td>
                                    <td>
                                        <span class="text-105">40</span>
                                    </td>
                                    <td>
                                        <span class="text-105">High</span>
                                    </td>
                                    <td>
                                        <a data-rel="tooltip" title="Lihat Detail" href="/admin/detail-responden"><i class="fa fa-eye text-blue-m1 text-120"></i> Detail</a>
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
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
<?= $this->endSection(); ?>