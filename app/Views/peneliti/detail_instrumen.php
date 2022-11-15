<?= $this->extend("/template/back_layout.php"); ?>
<?= $this->section("konten"); ?>
<div class="page-content container bg-white">
    <div class="page-header border-0 justify-content-between">
        <h1 class="page-title text-primary-d2">
            Instrument Details
            <small class="page-info text-secondary-d2">
                <i class="fa fa-angle-double-right text-80"></i>
                <?= $data->nama_instrument ?>
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
                        <td><?= $data->nama_instrument ?></td>
                    </tr>
                    <tr class="bgc-h-default-l3 d-style">
                        <td style="font-weight: bold;">
                            Description
                        </td>
                        <td><?= $data->deskripsi_instrument ?></td>
                    </tr>
                    <tr class="bgc-h-default-l3 d-style">
                        <td style="font-weight: bold;">
                            Scale Range
                        </td>
                        <td>
                            <?php foreach ($data->scale_range as $key => $value) : ?>
                                <?= ucfirst($value->label) ?> (<?= $value->low ?> - <?= $value->upper ?>) <br>
                            <?php endforeach ?>
                        </td>
                    </tr>
                    <tr class="bgc-h-default-l3 d-style">
                        <td style="font-weight: bold;">
                            Result Description
                        </td>
                        <td>
                            <?php foreach ($data->result_description as $key => $value) : ?>
                                <strong> <?= ucfirst($value->label) ?> </strong> <br>
                                <?= $value->deskripsi ?>
                                <br>
                                <br>
                            <?php endforeach ?>
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
            <table id="datatable" class="table table-border-y text-dark-m2 text-95 border-y-1 brc-secondary-l1">
                <thead class="text-secondary-m2 text-uppercase text-85">
                    <tr>
                        <th>No</th>
                        <th style="max-width: 500px;">Question</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data_soal as $key => $value) : ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $value->soal ?></td>
                        </tr>
                    <?php endforeach ?>
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

            <form action="" method="post">
                <input type="hidden" value="<?= $_GET['instrument']?>" name="instrument">
                <input type="hidden" value="<?= $data->survei_code ?>" name="code_survei">
            <div class="form-group row">
                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                    <label for="id-form-field-1" class="mb-0">Date Range</label>
                </div>

                <div class="col-sm-8">
                    <div id="id-daterange-wrapper" class="pos-rel">
                        <div class="form-row">
                            <div class="col">
                                <input required id="id-daterange-from" name="start_date" class="form-control ex-inputs-start" placeholder="From date">
                            </div>
                            <div class="text-grey-l2">_</div>
                            <div class="col">
                                <input required id="id-daterange-to" name="end_date" class="form-control ex-inputs-end" placeholder="To date">
                            </div>
                        </div>

                        <div id="id-daterange-container" class="dp-daterange-picker dp-daterange-above"></div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                    <label for="id-form-field-1" class="mb-0">Survey link</label>
                </div>

                <div class="col-sm-9">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">https://assessme.puslogin.com/survei/<?= $data->survei_code ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer bg-white justify-content-between px-0 py-3">
                <button type="button" class="btn btn-md px-2 px-md-4 btn-light-secondary btn-h-light-warning btn-a-light-danger" data-dismiss="modal">
                    <i class="fas fa-undo-alt mr-1 text-danger-m2"></i>
                    Cencel
                </button>

                <button type="submit" class="btn btn-md px-2 px-md-4 btn-light-secondary btn-h-light-success btn-a-light-success">
                    Save
                    <i class="fa fa-arrow-right ml-1 text-success-m2"></i>
                </button>
            </div>
            </form>
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

<?= $this->section("js_page"); ?>
<script>
            
    var daterange_container = document.querySelector('#id-daterange-container');
    // Inject DateRangePicker into our container
    DateRangePicker.DateRangePicker(daterange_container, {
        mode: 'dp-modal'
    })
    .on('statechange', function (_, rp) {
        // Update the inputs when the state changes
        var range = rp.state;
        var str_start_date = `${range.start.getFullYear()}-${range.start.getMonth()+1}-${range.start.getDate()}`
        var str_end_date = `${range.end.getFullYear()}-${range.end.getMonth()+1}-${range.end.getDate()}`


        $('#id-daterange-from').val( range.start ? str_start_date : '' );
        $('#id-daterange-to').val( range.end ? str_end_date : '' );
    });

    $('#id-daterange-from, #id-daterange-to').on('focus', function() {    
        daterange_container.classList.add('visible');
    });

    var daterange_wrapper = document.querySelector('#id-daterange-wrapper');
    var previousTimeout = null;
    $( daterange_wrapper ).on('focusout', function() {
        if(previousTimeout) clearTimeout(previousTimeout);
        previousTimeout = setTimeout(function() {
            if ( !daterange_wrapper.contains(document.activeElement) ) {
            daterange_container.classList.remove('visible');
            }
        }, 10);
    });

</script>
<?= $this->endSection(); ?>