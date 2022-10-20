<?= $this->extend("/template/back_layout.php"); ?>
<?= $this->section("konten"); ?>
<div class="page-content container bg-white">
    <div class="page-header border-0 justify-content-between">
        <h1 class="page-title text-primary-d2">
            Data Instrument
        </h1>
        <a href="/admin/form-tambah-instrumen" class="btn btn-xs btn-primary"><i class="fa fa-plus text-110 align-text-bottom mr-1"></i> | Add Instrument</a>
    </div>
    <hr class="my-4">
    <!-- stat boxes -->
    <div class="row">
        <div class="col-12">
            <table id="example" class="display" style="width:100%; font-size: 13px;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Instrument Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Sexual Orientation Scale</td>
                        <td>
                            <a href="/admin/detail-instrumen" class="btn btn-xs btn-info text-white">Detail</a>
                            <a href="/admin/data-pertanyaan" class="btn btn-xs btn-secondary text-white">Open Question</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Religious Harmony Scale</td>
                        <td>
                            <a href="/admin/detail-instrumen" class="btn btn-xs btn-info text-white">Detail</a>
                            <a href="/admin/data-pertanyaan" class="btn btn-xs btn-secondary text-white">Open Question</a>
                        </td>
                    </tr>
                </tbody>
            </table>
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