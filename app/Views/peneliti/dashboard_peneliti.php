<?= $this->extend("/template/back_layout.php"); ?>
<?= $this->section("konten"); ?>
<div class="page-content container bg-white">
    <div class="page-header border-0 ">
        <h1 class="page-title text-primary-d2">
            Survey
        </h1>
    </div>
    <hr class="my-3">
    <!-- stat boxes -->
    <div class="row">
        <div class="col-12">
            <table id="example" class="display" style="width:100%; font-size: 13px">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Survey</th>
                        <th>Instrument</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Number of Respondents</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>a880ii</td>
                        <td>Sexual Orientation Scale</td>
                        <td>8/17/2021</td>
                        <td>10/30/2021</td>
                        <td>40</td>
                        <td>
                            <a href="#" class="btn btn-xs btn-warning text-white">Edit</a>
                            <a href="/admin/daftar-responden-2" class="btn btn-xs btn-info text-white">Respondents</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>b098ol</td>
                        <td>Religious Harmony Scale</td>
                        <td>1/1/2022</td>
                        <td>4/30/2022</td>
                        <td>98</td>
                        <td>
                            <a href="#" class="btn btn-xs btn-warning text-white">Edit</a>
                            <a href="/admin/daftar-responden-2" class="btn btn-xs btn-info text-white">Respondents</a>
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