<?= $this->extend("/template/back_layout.php"); ?>
<?= $this->section("konten"); ?>
<div class="page-content container bg-white">
    <div class="page-header border-0 justify-content-between">
        <h1 class="page-title text-primary-d2">
            Data Question
            <small class="page-info text-secondary-d2">
                <i class="fa fa-angle-double-right text-80"></i>
                Sexual Orientation Scale
            </small>
        </h1>
        <button data-toggle="modal" data-target="#warningModal" class="btn btn-xs btn-primary"><i class="fa fa-plus text-110 align-text-bottom mr-1"></i> | Add Question</button>
    </div>
    <div class="row">
        <div class="col-md-6">
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
    <hr class="my-4">
    <!-- stat boxes -->
    <div class="row">
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
                    Add new question
                </p>
            </div>

            <div class="form-group row">
                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                    <label for="id-form-field-1" class="mb-0">Question in Indonesia</label>
                </div>

                <div class="col-sm-9">
                    <textarea class="form-control" id="id-textarea-autosize" placeholder="" style="overflow: hidden; overflow-wrap: break-word; resize: horizontal; height: 80px;"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                    <label for="id-form-field-1" class="mb-0">Question in English</label>
                </div>

                <div class="col-sm-9">
                    <textarea class="form-control" id="id-textarea-autosize" placeholder="" style="overflow: hidden; overflow-wrap: break-word; resize: horizontal; height: 80px;"></textarea>
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