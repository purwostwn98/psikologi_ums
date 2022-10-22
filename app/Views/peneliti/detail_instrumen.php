<?= $this->extend("/template/back_layout.php"); ?>
<?= $this->section("konten"); ?>
<div class="page-content container bg-white">
    <div class="page-header border-0 justify-content-between">
        <h1 class="page-title text-primary-d2">
            Instrument Details
            <small class="page-info text-secondary-d2">
                <i class="fa fa-angle-double-right text-80"></i>
                Sexual Orientation Scale
            </small>
        </h1>
        <button data-toggle="modal" data-target="#warningModal" class="btn btn-xs btn-primary"><i class="fa fa-plus text-110 align-text-bottom mr-1"></i> | Create New Survey</button>
    </div>
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
    <!-- stat boxes -->
    <div style="font-size: 13px;" class="row justify-content-center">
        <div style="font-weight: bold;" class="col-12 text-center">
            List of Questions
        </div>
    </div>
    <div style="font-size: 13px;" class="row mt-3">
        <div class="col-md-3 col-sm-12">
            Choose a language
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="input-group">
                <select class="ace-select text-dark-m1 bgc-default-l5 bgc-h-warning-l3  brc-default-m3 brc-h-warning-m1 form-control form-control-xs bahasa" id="form-field-select-11">
                    <option value="in">Indonesia</option>
                    <option value="en">English</option>
                </select>
                <div class="input-group-append">
                    <button class="btn btn-secondary btn-bahasa" type="button"><i class="fa fa-calendar mr-1"></i> Go!</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 tabel-pertanyaan">
            <table id="example" class="display" style="width:100%; font-size: 13px;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th style="max-width: 500px;">Question</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Secara seksual, saya lebih tertarik memperhatikan penampilan lawan jenis dibandingkan penampilan sesama jenis</td>
                        <td>
                            <a href="#" class="btn btn-xs btn-warning text-white"><i class="fa fa-edit text-white"></i></a>
                            <a href="#" class="btn btn-xs btn-danger text-white"><i class="fa fa-trash text-white"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Ketika berada di dekat orang sejenis (laki-laki dekat dengan laki-laki, perempuan dekat dengan perempuan) yang wajahnya cakep (tampan/cantik) jantung saya terasa berdetak lebih kencang</td>
                        <td>
                            <a href="#" class="btn btn-xs btn-warning text-white"><i class="fa fa-edit text-white"></i></a>
                            <a href="#" class="btn btn-xs btn-danger text-white"><i class="fa fa-trash text-white"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Ketika berjabat tangan dengan orang sejenis yang wajahnya cakep, saya memegang tangannya lebih erat</td>
                        <td>
                            <a href="#" class="btn btn-xs btn-warning text-white"><i class="fa fa-edit text-white"></i></a>
                            <a href="#" class="btn btn-xs btn-danger text-white"><i class="fa fa-trash text-white"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>etc</td>
                        <td>etc..</td>
                        <td>
                            <a href="#" class="btn btn-xs btn-warning text-white"><i class="fa fa-edit text-white"></i></a>
                            <a href="#" class="btn btn-xs btn-danger text-white"><i class="fa fa-trash text-white"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal modal-lg fade" id="warningModal" tabindex="-1" role="dialog" aria-labelledby="warningModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-width-0 border-t-4 brc-primary-m2 px-3">

            <div class="modal-header py-2">
                <i class="bgc-white fas fa-exclamation-circle mb-n4 mx-auto fa-3x text-primary-m2"></i>
            </div>

            <div class="modal-body text-center">
                <p class="text-primary-d1 text-130 mt-3">
                    Create new survey
                </p>
            </div>

            <div class="form-group row">
                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                    <label for="id-form-field-1" class="mb-0">Start date</label>
                </div>

                <div class="col-sm-9">
                    <input type="date" name="" id="">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                    <label for="id-form-field-1" class="mb-0">End date</label>
                </div>

                <div class="col-sm-9">
                    <input type="date" name="" id="">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                    <label for="id-form-field-1" class="mb-0">Survey link</label>
                </div>

                <div class="col-sm-9">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">https://assessme.puslogin.com/</span>
                        </div>
                        <input type="text" readonly class="form-control form-control-lg" id="form-field-mask-2" inputmode="text" value="u9set1">
                    </div>
                </div>
            </div>

            <div class="modal-footer bg-white justify-content-between px-0 py-3">
                <button type="button" class="btn btn-md px-2 px-md-4 btn-light-secondary btn-h-light-warning btn-a-light-danger" data-dismiss="modal">
                    <i class="fas fa-undo-alt mr-1 text-danger-m2"></i>
                    Cencel
                </button>

                <button type="button" class="btn btn-md px-2 px-md-4 btn-light-secondary btn-h-light-success btn-a-light-success" data-dismiss="modal">
                    Save
                    <i class="fa fa-arrow-right ml-1 text-success-m2"></i>
                </button>
            </div>

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
<script>
    $('.btn-bahasa').click(function(e) {
        e.preventDefault();
        var bahasa = $('.bahasa').val();
        $.ajax({
            url: "<?= site_url('dinamis/tabel-pertanyaan-bahasa'); ?>",
            type: "POST",
            dataType: "json",
            data: {
                bahasa: bahasa
            },
            success: function(response) {
                // console.log(response);
                $('.tabel-pertanyaan').html(response.data);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    });
</script>
<?= $this->endSection(); ?>