<?= $this->extend("/template/back_layout.php"); ?>
<?= $this->section("konten"); ?>
<div class="page-content container bg-white">
    <div class="page-header border-0 justify-content-between">
        <h1 class="page-title text-primary-d2">
            Data Instrumen
            <small class="page-info text-secondary-d2">
                <i class="fa fa-angle-double-right text-80"></i>
                Sexual Orientation Scale
            </small>
        </h1>
        <button class="btn btn-xs btn-warning"><i class="fa fa-edit text-110 align-text-bottom mr-1"></i> | Edit Instrument</button>
    </div>
    <!-- stat boxes -->
    <div class="row">
        <div class="col-12">
            <table style="font-size: 13px;" id="simple-table" class="table table-bordered-x table-hover text-dark-m2">
                <tbody>
                    <tr class="bgc-h-default-l3 d-style">
                        <td style="font-weight: bold;">
                            Name
                        </td>
                        <td>Sexual Orientation Scale</td>
                    </tr>
                    <tr class="bgc-h-default-l3 d-style">
                        <td style="font-weight: bold;">
                            Description
                        </td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequuntur ex quis praesentium deleniti alias consectetur eligendi doloremque totam cum id sint repudiandae magnam, reprehenderit quaerat qui deserunt porro labore.</td>
                    </tr>
                    <tr class="bgc-h-default-l3 d-style">
                        <td style="font-weight: bold;">
                            Scale Range
                        </td>
                        <td>
                            Low (26-51) <br> Medium (52-78) <br> High (79-104)
                        </td>
                    </tr>
                    <tr class="bgc-h-default-l3 d-style">
                        <td style="font-weight: bold;">
                            Result Description
                        </td>
                        <td>
                            <strong>Low</strong><br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere odio expedita facilis. Delectus dolor asperiores soluta odit facilis fugiat? Recusandae cupiditate doloribus consequuntur eum voluptatum, aut unde repellat est quae?<br><br> <strong>Medium</strong><br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque id consectetur pariatur ducimus fuga voluptas magni unde beatae fugit natus in architecto recusandae fugiat, asperiores repudiandae minima voluptatum accusantium corporis.<br><br>
                            <strong>High</strong><br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, nam blanditiis nesciunt quam eius sint enim dolorem, quis non voluptate ab fuga, ad explicabo at totam suscipit consequuntur? Quam, iure!
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